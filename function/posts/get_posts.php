<?php
require_once 'function/connect.php';

function get_post(int $id) {
	foreach (connect()->query("SELECT * FROM posts WHERE id = $id") as $post)
	return $post;
	// foreach (connect()->query("SELECT * FROM posts WHERE id = $id") as $post) {
		// print_r($post);
	// }
}

function get_area_select(int $id) {
	foreach (connect()->query("SELECT area_select FROM posts WHERE id = $id") as $post)

	if($post != NULL)
		return $post['area_select'];
}

function print_post(int $id, int $type) {
	$info_post = get_post($id);

	// trending-top mb-30
	if($info_post != NULL) {
		require_once 'function/tags/get_tags.php';
		$info_tag = show_tag($info_post['tag_id']);

		if($info_tag != NULL) {
			switch($type) {
				case 1: {
					echo  "<div class=\"trending-top mb-30\">
						<div class=\"trend-top-img\">
							<img src=".$info_post['image']." alt=\"\">
							<div class=\"trend-top-cap\">
								<span style=\"background: ".$info_tag['color']."\">".$info_tag['name']."</span>
								<h2><a href=\"details.html\">".$info_post['name']."<br>".$info_post['description']."</a></h2>
							</div>
						</div>
					</div>";
					break;
				}
				case 2: {
					echo "<div class=\"col-lg-4\">
					<div class=\"single-bottom mb-35\">
						<div class=\"trend-bottom-img mb-30\">
							<img src=".$info_post['image']." alt=\"\">
						</div>
						<div class=\"trend-bottom-cap\">
							<span style=\"background: ".$info_tag['color']."\">".$info_tag['name']."</span>
							<h4><a href=\"details.html\">".$info_post['name']."</a></h4>
						</div>
					</div>
					</div>";
					break;
				}
				case 3: {
					echo "<div class=\"trand-right-single d-flex\">
					<div class=\"trand-right-img\">
						<img src=".$info_post['image']." style=\"width: 180px; height: 94px; border-radius: 6px;\" alt=\"\">
					</div>
					<div class=\"trand-right-cap\">
						<span style=\"background: ".$info_tag['color']."\">".$info_tag['name']."</span>
						<h4><a href=\"details.html\">".$info_post['name']."</a></h4>
					</div>
					</div>";
					break;
				}
			}
		}
	}
	return;
}