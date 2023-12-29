<?php
require_once 'function/connect.php';


function show_tag(int $id)
{
	foreach (connect()->query("SELECT * FROM tags WHERE id =$id") as $post)
	return $post;
}

function all_tag()
{
    $connect = connect();
    return $connect->query("SELECT * FROM tags;");
}
