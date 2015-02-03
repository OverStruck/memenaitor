<?php
	header("Content-type: text/javascript");
	$img = $_GET['img'];
?>
var image = 'img/normal/<?php echo $img;?>.jpg';

//create default meme
Meme(image, 'meme', 'Texto superior', 'Texto inferior');

var topText = $('#top-text'),
	buttonText = $('#button-text');

//update meme when new text is typed
topText.keyup(updateMeme);
buttonText.keyup(updateMeme);

$('#editor button:first').click(function() {
	$.ajax({
		type: 'POST',
		url: 'save_meme.php',
		data: { 
	     imgBase64: $('#meme')[0].toDataURL("image/jpg")
		}
	}).done(function(response) {
		window.location = response;
	});
})

function updateMeme() {
	Meme(image, 'meme', topText.val(), buttonText.val());
}