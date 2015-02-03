<?php
	//check how many files we have uploaded
	$id = 0;
	$directory = 'img/meme/'; // dir location
	if (glob($directory . "*.*") != false) {
	 $id = count(glob($directory . "*.*"));
	}

	$rawData = $_POST['imgBase64'];
	$filteredData = explode(',', $rawData);
	$unencoded = base64_decode($filteredData[1]);
	//Create the image 
	$fp = fopen("img/meme/$id.jpg", 'w');
	fwrite($fp, $unencoded);
	fclose($fp);
	echo "view_meme.php?id=$id";
?>