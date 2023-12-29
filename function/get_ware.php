<?php

require_once 'connect.php';

// Подключение бд
$connect = connect();

// Создание таблиц
try { create_tag_table($connect); }
catch(PDOException) {}

try { create_post_table($connect); }
catch(PDOException) {}
