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
    header('Location: http://localhost:5500/admin.php');
}