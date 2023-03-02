<?php

function dd($data, $showType = false): void
{
    echo "<pre style='background-color: #1d1d1d;color: #cdcdcd; padding: 20px; margin: 10px; border-radius: 10px; line-height: 1.2rem;'>";
    if ($showType) {
        var_dump($data);
    } else {
        print_r($data);
    }
    echo  "</pre>";
    die();
}

function url(string $path = null): string
{
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if (isset($path)) {
        $url .= "/";
        $url .= $path;
    }
    return $url;
}

function view(string $viewName, array $data = null): void
{
    // array to variable
    if (!is_null($data)) {
        foreach ($data as $key => $value) {
            // dynamic variable name
            ${$key} = $value;
        }
    }

    require_once ViewDir . "/$viewName.view.php";
}

function controller(string $controllerName): void
{
    // string to array
    // list@index => ["list","index"];
    $controllerNameArray = explode("@", $controllerName);
    require_once ControllerDir . "/$controllerNameArray[0].controller.php";
    // dynamic fun call
    call_user_func($controllerNameArray[1]);
}


function route(string $path, array $queries = null): string
{
    $url = url($path);
    if (!is_null($queries)) {
        $url .= "?" . http_build_query($queries);
    }
    return $url;
}

function redirect(string $url, string $message = null): void
{
    if (!is_null($message)) setSession($message);
    header("Location:" . $url);
}

function checkRequestMethod(string $methodName)
{
    $result = false;
    $methodName = strtoupper($methodName);
    $serverRequestMethod = $_SERVER["REQUEST_METHOD"];
    if ($methodName === "POST" && $serverRequestMethod === "POST") {
        $result = true;
    } elseif ($methodName === "PUT" && $serverRequestMethod === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) === "PUT") {
        $result = true;
    } elseif ($methodName === "DELETE" && $serverRequestMethod === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) === "DELETE") {
        $result = true;
    }

    return $result;
}

function alert(string $message, string $color = "success"): string
{
    return "<div class=' alert alert-$color'>$message</div>";
}

function paginator($lists)
{

    $links = "";

    foreach ($lists['links'] as $link) {
        $links .= "<li class='page-item'><a class='page-link " . $link['is_active'] . "' href='" . $link['url'] . "'>" . $link['page_number'] . "</a></li>";
    }

    return "<div class=' d-flex justify-content-between'>
            <p class=' mb-0'>Total : " . $lists['total'] . "</p>
            <nav aria-label='Page navigation example'>
                <ul class='pagination'>
                
                    " . $links . "
                </ul>
            </nav>
        </div>";
}

// more color => https://i.stack.imgur.com/HFSl1.png

function logger(string $message, int $colorCode = 32): void
{
    echo " \e[39m[LOG]" . " \e[{$colorCode}m" . $message . " \n";
}


// session function start
function setSession(string $message, string $key = "message"): void
{
    // $_SESSION[key] = value
    $_SESSION[$key] = $message;
}

function hasSession(string $key = "message"): bool
{
    if (!empty($_SESSION[$key])) return true;
    return false;
}

function showSession(string $key = "message"): string
{
    $message = $_SESSION[$key];
    unset($_SESSION[$key]);
    return $message;
}
// session function end


// database functions start

function run(string $sql, bool $closeConnection = false): object|bool
{
    try {

        $query = mysqli_query($GLOBALS["conn"], $sql);
        if ($closeConnection) mysqli_close($GLOBALS["conn"]);
        return $query;
    } catch (Exception $e) {
        dd($e);
    }
}

function all(string $sql): array
{

    $lists = [];

    $query = run($sql);

    while ($row = mysqli_fetch_assoc($query)) {
        $lists[] = $row;
    }

    return $lists;
}

function first(string $sql): array
{
    $query = run($sql);
    $list = mysqli_fetch_assoc($query);
    return $list;
}

function paginate($sql, $limit = 10)
{

    $total = first(str_replace("*", "COUNT(id) AS total", $sql))["total"];
    // $limit = 10;
    $totalPages = ceil($total / $limit);
    $currentPage = isset($_GET['page']) ? $_GET["page"] : 1;
    $offset = ($currentPage - 1) * $limit;

    $sql .= " LIMIT $offset,$limit";

    $links  = [];



    for ($i = 1; $i <= $totalPages; $i++) {
        $queries = $_GET;
        $queries["page"] = $i;
        $url = url() . $GLOBALS['path'] . "?" . http_build_query($queries);

        $links[] = [
            "url" => $url,
            "is_active" => $i == $currentPage ? "active" : "",
            "page_number" => $i
        ];
    }

    $lists = [
        "total" => $total,
        "limit" => $limit,
        "total_page" => $totalPages,
        "current_page" => $currentPage,
        "data" => all($sql),
        "links" => $links
    ];

    return $lists;
}

function createTable(string $tableName,...$columns): void
{

    $sql = "DROP TABLE IF EXISTS $tableName";
    run($sql);
    logger($tableName . " table drop successfully", 93);


    $sql = "CREATE TABLE $tableName (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    ".join(",",$columns).",
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

    run($sql);
    logger($tableName . " table create successfully");
}



// database functions end