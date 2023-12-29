<?php

require_once '../connect.php';


$connect = connect();


if ($connect->prepare(" 
    INSERT INTO tags(name, color)
    VALUES(:name, :color);
    ")->execute([
        "name" => $_POST['name'],
        "color" => $_POST['color'] ]))
{
	require_once '../const.php'; 
	header("Location: " . URL_SITE . "/admin.php"); 
}