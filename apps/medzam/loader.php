<?php
	$url = $_GET['url'];
	//$url = "https://mygrubbook.com/control/static/compress/medzam.html";
	$data = file_get_contents($url);
	echo $data;
?>