<?php

function dd($val)
{
echo "<pre>";
    print_r($val);
    echo "</pre>";

die();
}

function urlIs($val)
{
return $_SERVER['REQUEST_URI'] === $val;
}