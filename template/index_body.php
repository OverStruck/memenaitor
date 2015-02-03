<?php 
	//populate body with the number of meme images
	for ($i=0; $i < 15 ; $i++) { 
?>
<div class="meme" >
<a href="edit.php?img=<?php echo $i; ?>">
	<img alt="" src="img/small/<?php echo $i; ?>.jpg" >
</a>   
</div>
<?php
	}
?>