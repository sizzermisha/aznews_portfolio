<?php

require_once 'const.php';

function connect()
{
    return new PDO($dns=DB_DRIVER . ":" . DB_PATH ."/" . DB_FILE);
}

function create_tag_table(PDO $connect)
{
    return $connect->query(
        "
        CREATE TABLE tags
        (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name VARCHAR NOT NULL,
            color CHAR(20) NOT NULL
        );
        "
    );
}

function create_post_table(PDO $connect)
{
    return $connect->query(
        "
        CREATE TABLE posts
        (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            tag_id INTEGER,
            name VARCHAR NOT NULL,
            description TEXT NOT NULL,
			area_select INTEGER,
            image VARCHAR NULL,
            FOREIGN KEY (tag_id) REFERENCES tags (id)
        );
        "
    );
}