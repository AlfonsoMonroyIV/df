<?php

function controllers($name)
{
    if($name==''){
        $name='home';
    }
    $route="controllers/$name.php";
    if (file_exists($route))
    {
        require($route);
    }else
    {
        require('controllers/404.php');
    }
}

function view($name, $vars=[])
{
    extract($vars);
    $route="views/$name.v.php";
    require $route;
}