<?php
	$url = "http://cstsolution.com/clients/medzam/apps/install/manifest.plist";
	$data = file_get_contents($url);
	echo $data;
?>