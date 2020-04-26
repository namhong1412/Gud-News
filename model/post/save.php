<?php
	include_once '../../controller/database.php';
	include_once '../objects/post.php';

	// instantiate login object
	$save = new Post();

	$random = date('YmdHis', time());
	$date = date('m/d/Y');
	$my_save_dir = "../../views/assets/images/posts/";

	$link_image = $_POST['images'];
	$title = $_POST['title'];
	$link = $_POST['link'];

	$savefile = @file_put_contents($my_save_dir."$random.jpg", base64_decode(explode(",", $_POST['data'])[1]));
	if($savefile){
	  unlink('../../'.$link_image);
	}
	$image = 'views/assets/images/posts/'."$random.jpg";

	// mysqli_real_escape_string value input
	$save->title = mysqli_escape_string($save->get_connection(), $title);
	$save->image = mysqli_escape_string($save->get_connection(), $image);
	$save->link = mysqli_escape_string($save->get_connection(), $link);
	$save->date = mysqli_escape_string($save->get_connection(), $date);

	// add post
	$save->create();
?>