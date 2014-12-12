<?
$targetLink[$selectedMain] = ($selectedSub)? "focused" : "selected";
$targetSubMenu[$selectedMain] = "selected";
$targetSub[$selectedSub] = "selected";
$subnav = (
	$topnav || $selectedMain == 'about' ||
	$topnav || $selectedMain == 'solutions' ||
	$topnav || $selectedMain == 'patients' ||
	$topnav || $selectedMain == 'dentists' ||
	$topnav || $selectedMain == 'periodontics'
	)? 1 : 0;

function navlink($page){
	global $targetSub;
	$target = substr($page, -(strlen($page) - strrpos($page, '-', -1) - 1));
	
	print 'id="sub-' .  $targetSub[$target] . '" href="' . $page . '.html" alt="' . $target . '"';
}

?>
<? $topnav = 1; ?>
<ul>
<? include 'nav.php' ?>
</ul>
<? $topnav = 0; ?>
<?
/*
			<a id="link-<? print $targetLink[home] ?>" class="home" href="index.html">Home</a
			><a id="link-<? print $targetLink[about] ?>" href="about.html">About Us</a
			><a id="link-<? print $targetLink[solutions] ?>" href="solutions.html">Solutions</a
			><a id="link-<? print $targetLink[patients] ?>" href="patients.html">For Patients</a
			><a id="link-<? print $targetLink[periodontics] ?>" href="periodontics.html">Periodontics</a>
*/
?>