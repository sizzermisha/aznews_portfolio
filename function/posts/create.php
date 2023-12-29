<?php

require_once '../connect.php';

$connect = connect();

$path = 'C:\Users\misha\Desktop\php_less_3_novocollege\movie/';

if (move_uploaded_file(
    $_FILES['userfile']['tmp_name'],
    $path . $_FILES['userfile']['name']
)) {

	if($_POST['area_select'] == 1) { // Главный блок новостей
		if($connect->prepare("UPDATE posts SET area_select = 2 WHERE area_select = :area_select")->execute(['area_select' => $_POST['area_select']]));
	}

    if ($connect->prepare("
        INSERT INTO posts(tag_id, name, description, image, area_select)
        VALUES(:tag_id, :name, :description, :image, :area_select);
        ")->execute([
            "tag_id" => $_POST["tag_id"],
            "name" => $_POST["name"],
            "description" => $_POST["description"],
			"area_select" => $_POST["area_select"],
            "image" => "/movie" . "/" . $_FILES['userfile']['name']
        ])
    )

	{
		require_once '../const.php'; 
		header("Location: " . URL_SITE . "/admin.php"); 
	}
}