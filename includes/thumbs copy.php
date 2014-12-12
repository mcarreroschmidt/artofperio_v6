<?
$num = 0;
function thumb($img,$caption){
	global $num;
	// return '<a href="gallery/' . $img . '.jpg" title="' . $caption . '" rel="lightbox" style="background: url(gallery/thumb_grid.jpg) no-repeat ' . $thisX . 'px ' . $thisY . 'px;width:125px;height:125px;float:right;"><img src="images/spacer.gif" width="125" height="125" title="' . $caption . '" border="0" align="right" /><br><span>' . $caption . '</span></a>';
	$thisX = ($num - (floor($num/6) * 6)) * 125 * -1;
	$thisY = floor($num/6) * 125 * -1;
	$thisPrint = '';
	$thisPrint .= '
		<a href="gallery/'.$img.'.jpg" rel="galleryX" title="'.$caption.'" class="gallery"><span  style="background-position:' . $thisX . 'px ' . $thisY . 'px;width:125px;height:125px;display:block;"></span> <b>'.$caption . '</b></a>';
	$num++;
	
	return $thisPrint;
}


$popups = array();
// $popups = array(
// 	thumb(34,'Pieta-4012','Pieta 4012'),
// 	thumb(33,'Pieta-4012','Pieta 4012'),
// 	thumb(32,'dolce_far_niente','Dolce Far Niente'),
// 	thumb(31,'juliet_of_urbino','Juliet of Urbino'),
// 	thumb(30,'bach_fugue_in_fringed_ivory','Bach Fugue in Fringed Ivory'),
// 	thumb(29,'artemesia','Artemesia'),
// 	thumb(28,'ophelia','Ophelia'),
// 	thumb(27,'germanicus','Germanicus'),
// 	thumb(26,'caravaggio','In Honor of Caravaggio'),
// 	thumb(25,'venus','Venus after Botticelli'),
// 	thumb(24,'tiepelo','Kennedy Abandoning America after Tiepolo'),
// 	thumb(23,'St_Johns_Wort','St. John\'s Wort'),
// 	thumb(22,'friends','Three Close Friends'),
// 	thumb(21,'still_life','Still Life'),
// 	thumb(20,'sea_escape','Sea Escape'),
// 	thumb(19,'sarah_berhardt','Sarah Berhardt'),
// 	thumb(18,'ReturnToEden','Return to Eden'),
// 	thumb(17,'4513','4513'),
// 	thumb(16,'anemone','Anemone'),
// 	thumb(15,'never_ending','Never Ending Story'),
// 	thumb(14,'out_to_pasture','Out to Pasture'),
// 	thumb(13,'ellison','The Reverend Ellison after Rembrandt'),
// 	thumb(12,'diana','Diana'),
// 	thumb(11,'primatif','Primatif'),
// 	thumb(10,'tricorner_vase','Tricorner Vase'),
// 	thumb(9,'relief','Relief'),
// 	thumb(8,'ozymandias','Ozymandias'),
// 	thumb(7,'moonlight','Moonlight'),
// 	thumb(6,'indian_summer','Indian Summer'),
// 	thumb(5,'da_vinci','The Annunciation after Da Vinci'),
// 	thumb(4,'Colour-Study-VI','Colour Study VI'),
// 	thumb(3,'Colour-Study-V','Male Female Hermaphrodite'),
// 	thumb(2,'Colour-Study-IV','Colour Study IV'),
// 	thumb(1,'still-life','Still... Life'),
// 	thumb(0,'monastery','The Monastery of Taxiarcon on Seriphos')
// );
$popups = array(
	thumb('monastery','The Monastery of Taxiarcon on Seriphos'),
	thumb('still-life','Still... Life'),
	thumb('Colour-Study-IV','Colour Study IV'),
	thumb('Colour-Study-V','Male Female Hermaphrodite'),
	thumb('Colour-Study-VI','Colour Study VI'),
	thumb('da_vinci','The Annunciation after Da Vinci'),
	thumb('indian_summer','Indian Summer'),
	thumb('moonlight','Moonlight'),
	thumb('ozymandias','Ozymandias'),
	thumb('relief','Relief'),
	thumb('tricorner_vase','Tricorner Vase'),
	thumb('primatif','Primatif'),
	thumb('diana','Diana'),
	thumb('ellison','The Reverend Ellison after Rembrandt'),
	thumb('out_to_pasture','Out to Pasture'),
	thumb('never_ending','Never Ending Story'),
	thumb('anemone','Anemone'),
	thumb('4513','4513'),
	thumb('ReturnToEden','Return to Eden'),
	thumb('sarah_berhardt','Sarah Berhardt'),
	thumb('sea_escape','Sea Escape'),
	thumb('still_life','Still Life'),
	thumb('friends','Three Close Friends'),
	thumb('St_Johns_Wort','St. John\'s Wort'),
	thumb('tiepelo','Kennedy Abandoning America after Tiepolo'),
	thumb('venus','Venus after Botticelli'),
	thumb('caravaggio','In Honor of Caravaggio'),
	thumb('germanicus','Germanicus'),
	thumb('ophelia','Ophelia'),
	thumb('artemesia','Artemesia'),
	thumb('bach_fugue_in_fringed_ivory','Bach Fugue in Fringed Ivory'),
	thumb('juliet_of_urbino','Juliet of Urbino'),
	thumb('dolce_far_niente','Dolce Far Niente'),
	thumb('Pieta-4012','Pieta 4012'),
	thumb('Rendezvous','Rendezvous'),
	thumb('venezia','Venezia')
);

$random_pic = ($_COOKIE['aop_pic'])? $_COOKIE['aop_pic'] : rand(1,count($popups));
$next_pic = ($random_pic < count($popups))? $random_pic + 1 : 1;
setcookie('aop_pic',$next_pic,time()+36000000);

function getNextPic(){
	global $popups,$random_pic;
	print $popups[$random_pic - 1];
}

function drawAllThumbs(){
	global $popups;
	foreach ($popups as $i => $value) {
		print $value;
	}
}

//$random_popup = rand(1,28);
//if(!$thumb) print $popups[$random_popup];
//if(!$thumb) getNextPic();
// print $popups[$random_popup];
?>