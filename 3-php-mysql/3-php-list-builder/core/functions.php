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

function redirect(string $url,string $message = null): void
{
    if(!is_null($message)) setSession($message);
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

function alert(string $message, string $color = "success"):string
{
    return "<div class=' alert alert-$color'>$message</div>";
}

// session function start
function setSession(string $message, string $key = "message"):void{
    // $_SESSION[key] = value
    $_SESSION[$key] = $message;

}

function hasSession(string $key = "message"):bool{
    if(!empty($_SESSION[$key])) return true;
    return false;
}

function showSession(string $key = "message"):string {
    $message = $_SESSION[$key];
    unset($_SESSION[$key]);
    return $message;
}
// session function end


// database functions start

function run(string $sql,bool $closeConnection = true): object|bool
{
    try{

        $query = mysqli_query($GLOBALS["conn"],$sql);
        if($closeConnection) mysqli_close($GLOBALS["conn"]);
        return $query;
        
    }catch(Exception $e){
        dd($e);
    }
}

function all(string $sql):array{

    $lists = [];

    $query = run($sql);

    while ($row = mysqli_fetch_assoc($query)) {
        $lists[] = $row;
    }

    return $lists;
}

function first(string $sql):array{
    $query = run($sql);
    $list = mysqli_fetch_assoc($query);
    return $list;
}



// database functions end