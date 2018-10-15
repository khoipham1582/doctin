<?php
include("simple_html_dom.php");
$html=file_get_html("https://toplist.vn/top-lists/du-l%E1%BB%8Bch/");
$tins=$html->find('div.media');
foreach ($tins as $tin) {
	$link=$tin->find('div.media-left a');
	$img=$tin->find('div.media-left img.round_img');
	foreach ($img as $i) {
		echo $i."<hr/>";
	}
	
	foreach ($link as $l ) {
		if(isset($l)){
		echo $l->href."<hr/>";
	}
	}
	
	//echo $tin."<hr/>";
}

?>