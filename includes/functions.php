<?

date_default_timezone_set("America/New_York");

function writeGallery($inputGallery){
	if($inputGallery){
		print '
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="540" height="500" id="kenderian_gallery" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="FlashVars" value="path=gallery/&xml=' . $inputGallery . '.xml" />
<param name="movie" value="gallery/kenderian_gallery.swf" />
<param name="quality" value="high" />
<param name="bgcolor" value="#ffffff" />
<embed FlashVars="path=gallery/&xml=' . $inputGallery . '.xml" src="gallery/kenderian_gallery.swf" quality="high" bgcolor="#ffffff" width="540" height="500" name="kenderian_gallery" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
		';
	}
}

function city($City_Display = 0){
	$city = "";
	$CityURL = strtolower(str_replace(", ","-",$City_Display));
	$CityURL = strtolower(str_replace(" ","_",$CityURL));
	$city = "<a href=\"$CityURL\">$City_Display</a>";
	return $city;
}
function cities($citiesInput){
	$citiesArray = explode("\n", trim($citiesInput));
	$citiesOutput = "<ul>
";
	foreach ($citiesArray as $value) {
		$thisCity = trim($value);
		if($thisCity) $citiesOutput .= "	<li>" . city($thisCity) . "</li>
";
	}
	$citiesOutput .= "</ul>
";
	print $citiesOutput;
}

?>