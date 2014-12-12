<?

$popups = array(
	thumb('The Monastery of Taxiarcon on Seriphos'),
	thumb('Still... Life'),
	thumb('Colour Study IV'),
	thumb('Male Female Hermaphrodite'),
	thumb('Colour Study VI'),
	thumb('The Annunciation after Da Vinci'),
	thumb('Indian Summer'),
	thumb('Moonlight'),
	thumb('Ozymandias'),
	thumb('Relief'),
	thumb('Tricorner Vase'),
	thumb('Primatif'),
	thumb('Diana'),
	thumb('The Reverend Ellison after Rembrandt'),
	thumb('Out to Pasture'),
	thumb('Never Ending Story'),
	thumb('Anemone'),
	thumb('4513'),
	thumb('Return to Eden'),
	thumb('Sarah Bernhardt'),
	thumb('Sea Escape'),
	thumb('Still Life','artemesia'),
	thumb('Three Close Friends'),
	thumb('St. John\'s Wort'),
	thumb('Kennedy Abandoning America after Tiepolo'),
	thumb('Venus after Botticelli'),
	thumb('In Honor of Caravaggio'),
	thumb('Germanicus'),
	thumb('Ophelia'),
	thumb('Artemesia'),
	thumb('Bach Fugue in Fringed Ivory'),
	thumb('Juliet of Urbino'),
	thumb('Dolce Far Niente'),
	thumb('Pieta 4012'),
	thumb('Rendezvous'),
	thumb('Venezia'),
	thumb('Ponte Dei Frari'),
	thumb('Time')
);

$random_pic = ($_COOKIE['aop_pic'])? $_COOKIE['aop_pic'] : rand(1,count($popups));
$next_pic = ($random_pic < count($popups))? $random_pic + 1 : 1;
setcookie('aop_pic',$next_pic,time()+36000000);
$num = 0;

function thumb($caption,$img = ''){
	if($img == ''){
		$img = str_replace('.','',$caption);
		$img = str_replace(' ','-',$img);
		$img = str_replace('\'','',$img);
		$img = str_replace('_','-',$img);
		$img = strtolower($img);
	}
	global $num;
	// return '<a href="gallery/' . $img . '.jpg" title="' . $caption . '" rel="lightbox" style="background: url(gallery/thumb_grid.jpg) no-repeat ' . $thisX . 'px ' . $thisY . 'px;width:125px;height:125px;float:right;"><img src="images/spacer.gif" width="125" height="125" title="' . $caption . '" border="0" align="right" /><br><span>' . $caption . '</span></a>';
	$thisX = ($num - (floor($num/6) * 6)) * 125 * -1;
	$thisY = floor($num/6) * 125 * -1;
	$thisPrint = '';
	$thisPrint .= '
		<a href="gallery/'.$img.'.jpg" rel="galleryX" title="'.$caption.'" class="gallery"><span  style="background-position:' . $thisX . 'px ' . $thisY . 'px;"></span><div><b>'.$caption . '</b></div></a>';
	$num++;
	
	return $thisPrint;
}

function getNextPic(){
	global $popups,$random_pic;
	print $popups[$random_pic - 1];
}

function drawAllThumbs(){
	global $popups;
	$gallery = array_reverse($popups);
	foreach ($gallery as $i => $value) {
		print $value;
	}
}
?>