<?php
	$img = $_GET['id'];
	$data = getimagesize("img/meme/$img.jpg");
	
	require 'template/header.php';
	require 'template/view_meme_body.php';
	require 'template/footer.php';
?>