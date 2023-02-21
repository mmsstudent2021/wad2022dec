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
    require_once ControllerDir."/$controllerNameArray[0].controller.php";
    // dynamic fun call
    call_user_func($controllerNameArray[1]);
}


function route(string $path,array $queries = null):string {
    $url = url($path);
    if(!is_null($queries)){
        $url .= "?".http_build_query($queries);
        
    }
    return $url;
}

function redirect($url):void{
    header("Location:".$url);
}
