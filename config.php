<?php

$conn = mysqli_connect("localhost", "root", "", "connext");

function dd($var)
{
    var_dump($var);
    die;
}

function redirect($loc)
{
    header("Location: " . $loc);
}
