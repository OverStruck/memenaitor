<?php
	header("Content-type: text/javascript");
	$img = $_GET['id'];
?>
var image = 'img/meme/<?php echo $img;?>.jpg';

Meme(image, 'meme', '', '');