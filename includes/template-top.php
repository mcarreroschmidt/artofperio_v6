<? if(!$includedTop){ ?>
<? 
include "includes/thumbs.php";
include "includes/seo.php";
include "includes/functions.php";
$Selected = 'four';
$DivSelected[$Selected] = " style='background:#F00;'";

// Determine page from URL
$domain = $_SERVER['HTTP_HOST'];
$url = $_SERVER['REQUEST_URI'];
$page_url = str_replace($domain,'',$url);
$page_path = str_replace('.html','',$page_url);
$page_parts = array();
$page_parts = explode('/', $page_path);
// If $page is specified, ignore URL
$page = ($page)? $page : $page_parts[count($page_parts) - 1];

// Parse page and main/sub sections based on page var
$sections = array();
$sections = explode('-', $page);
$selectedMain =  $sections[0];
$selectedSub =  $sections[1];
$selectedSubSub =  $sections[2];

// Subsections
$selected_question[$selected_qa] = '_selected';
$selected_answer[$selected_qa] = 'X';
$selected_subpage[$subpage] = 'selectedSub';

// LOCALIZATION
if($_GET['city']){
	$city = $_GET['city'];
	$city = ucwords(str_replace('_',' ',$city));
	$state = (strpos($city, "-") ? ", " . strtoupper( substr($city,strpos($city, "-") - strlen($city) + 1) ) : ", NJ");
	// print "<pre>" . strpos($city, "-") . "</pre>";
	if(strpos($city, "-")) $city = substr($city,0,strpos($city, "-"));
	$city = $city . $state;
	$city_s = "$city ";
}

// Title
$default_title = $city_s . "Dentist, Periodontist, Dental Implants, and Oral Medicine: David Goteiner, DDS, LLC";
$description = $city_s . "dentist and pediatrist specializing in dental implants, laser oral surgery, periodontics, 'Teeth-in-a-Day' procedures, and family dentistry: David Goteiner, DDS, LLC";
$title = ($Title)? $Title : $default_title;
$var = strstr($url, '?');
$page = str_replace($var,'',$url);

function copyYear($initYear){
	$thisYear = date("Y",time());
	$displayYear = ($initYear == $thisYear)? $initYear : $initYear . " - " . $thisYear;
	print $displayYear;
}

function email($memail,$mdisplay){
	$memail_parts=split("@",$memail);
	$muser = $memail_parts[0];
	$memail2 = str_replace(".", "{MCS_SPLIT}", $memail_parts[1]);
	$mdomain_parts = split("{MCS_SPLIT}",$memail2);
	$mdomain = $mdomain_parts[0];
	$mdomain2 = str_replace("?", "{MCS_SPLIT}", $mdomain_parts[1]);
	$msuffix_parts = split("{MCS_SPLIT}",$mdomain2);
	$mdomain_suffix = $msuffix_parts[0];
	$mdomain_suffix = "com";
	$mvars = $msuffix_parts[1];
	$mvars = ($mvars)? "?" . str_replace(" ", "%20", $mvars) : "";

	$thisDisplay = ($mdisplay)? $mdisplay : '' . $muser . '<span style="display:none;">xxx</span>&#64;' . $mdomain . '<span style="display:none;">xxx</span>&#46;' . $mdomain_suffix . '';
	$thisEmailDisplay = '<a href="&#109;ai&#108;to&#58;' . $muser . '%40' . $mdomain . '&#46;' . $mdomain_suffix . $mvars . '">' . $thisDisplay . '</a>';
	print $thisEmailDisplay;
}


// Set COUNTY Var
$County = ($_GET['County'] ? $_GET['County'] : $_COOKIE['County']);
$County = (!$County ? 'Morris' : $County);
if($_GET['County']) setcookie('County', $_GET['County'], time() + (86400 * 7 * 365));
$CountyLead = ($County ? $County . ' County - ' : '');

if(strstr($url, 'about-gallery')) $title = 'Art Gallery: David Goteiner, DDS, LLC';
if(strstr($url, 'dentists-cosmeticperiodontics.asp" or strURL="/patientscosmeticperiodontics')) $title = 'Cosmetic Periodontics, Cosmetic Dentistry, Cosmetic Periodontal Surgery';
if(strstr($url, 'dentists-education')) $title = 'Upcoming Continuing Education Courses';
if(strstr($url, 'dentists-services')) $title = 'Services Provided: Cosmetic Peridontal Surgery, General Anesthesia, Guided Tissue Regeneration, Implants, Laser Surgery, Maintenance Therapy, Occlusal Therapy, Osseus Surgery, Children, Sedation';
if(strstr($url, 'patients-assessment')) $title = 'Periontal Risk Assessment';
if(strstr($url, 'patients-implants')) $title = 'Dental Implants to Replace Missing Teeth: What Dental Implants Can Do, Sinus Augmentation, Ridge Augmentation and Expansion, Immediate Load Implants';
if(strstr($url, 'patients-infection')) $title = 'Infection Control';
if(strstr($url, 'patients-insurance')) $title = 'Insurance Frequently Asked Questions (FAQ)';
if(strstr($url, 'patients-pathology')) $title = 'Oral Pathology and Oral Medicine';
if(strstr($url, 'patients-periodontist')) $title = 'Who is a Periodontist?';
if(strstr($url, 'patients-signs')) $title = 'The Warning Signs of Gum Disease';
if(strstr($url, 'patients-snoring')) $title = 'Snoring and Sleep Apnea';
if(strstr($url, 'patients-solutions')) $title = 'Cosmetic and Gum Enhancement Procedures: Crown Lengthening, Soft Tissue Grafting, Ridge  Augmentation';
if(strstr($url, 'patients-therapy')) $title = 'Periodontal Therapy to Treat Infections: Non-Surgical Periodontal Therapy, Root Planning, Regeneration, Crown Lengthening, Grafting, Guided Tissue and Bone Regeneration';
if(strstr($url, 'periodontics-associations')) $title = 'Periodontal and Dental Associations';
if(strstr($url, 'periodontics-birth')) $title = 'Periodontics: Mom&rsquo;s Dental Health Could Affect Baby&rsquo;s Birth';
if(strstr($url, 'periodontics-birthweight')) $title = 'Periodontal Disease and Preterm Low Birthweight';
if(strstr($url, 'periodontics-bloodtest')) $title = 'Your Routine Blood Test May One Day Send You to a Periodontist';
if(strstr($url, 'periodontics-brush-up')) $title = '&quot;Brush-Up&quot; on Brushing Your Teeth and Gums';
if(strstr($url, 'periodontics-brushfloss')) $title = 'How to Brush and Floss';
if(strstr($url, 'periodontics-calcium')) $title = 'Listen Up Ladies: Calcium May Reduce the Risk of Periodontitis';
if(strstr($url, 'periodontics-children')) $title = 'Periodontics: Protecting Children&rsquo;s Oral Health';
if(strstr($url, 'periodontics-connection')) $title = 'Peridontics: Mouth Body Connection';
if(strstr($url, 'periodontics-crownlengthening')) $title = 'Periodontics: Crown Lengthening';
if(strstr($url, 'periodontics-diabetes')) $title = 'Periodontal Therapy Helps Patients With Type 2 Diabetes';
if(strstr($url, 'periodontics-diseases')) $title = 'Periodontal (Gum) Diseases';
if(strstr($url, 'periodontics-equipment')) $title = 'Maintaining and Protecting Your Oral Hygiene Equipment';
if(strstr($url, 'periodontics-excuses')) $title = 'Brushing and Flossing &quot;Excuse Busters&quot; to the Rescue';
if(strstr($url, 'periodontics-faq')) $title = 'Periodontics: Frequently Asked Questions';
if(strstr($url, 'periodontics-guminflammation')) $title = 'Gum Inflammation May Affect the Body: Gingivitis, Chronic Periodontitis, Aggressive Periodontitis, Localized Aggressive Periodontitis, Generalized Aggressive Periodontitis';
if(strstr($url, 'periodontics-health')) $title = 'Periodontics: General Health Frequently Asked Questions';
if(strstr($url, 'periodontics-healthyheart')) $title = 'Don&rsquo;t Let a Dirty Mouth Pollute Your Clean Heart';
if(strstr($url, 'periodontics-heartdisease')) $title = 'New Study Finds Positive Association Between Periodontal Disease and Coronary Heart Disease';
if(strstr($url, 'periodontics-hormones')) $title = 'Women&rsquo;s Hormones Could Affect Their Oral Health';
if(strstr($url, 'periodontics-implants')) $title = 'Dental Implants: Teeth That Look and Feel Like Your Own';
if(strstr($url, 'periodontics-links')) $title = 'Periodontics Links';
if(strstr($url, 'periodontics-medications')) $title = 'How Medications Can Affect Your Oral Health';
if(strstr($url, 'periodontics-menopause')) $title = 'Postmenopause and Periodontal Disease: What Women Need to Know';
if(strstr($url, 'periodontics-plastic')) $title = 'Periodontal Plastic Procedures';
if(strstr($url, 'periodontics-pocketreduction')) $title = 'Periodontics: Pocket Depth Reduction';
if(strstr($url, 'periodontics-procedures')) $title = 'Periodontal Procedures';
if(strstr($url, 'periodontics-regeneration')) $title = 'Periodontics: Regeneration';
if(strstr($url, 'periodontics-ridgeaugmentation')) $title = 'Periodontics: Ridge Augmentation';
if(strstr($url, 'periodontics-scalingrootplaning')) $title = 'What is Scaling and Root Planing?';
if(strstr($url, 'periodontics-selfevaluation')) $title = 'Periodontics: Self-Evaluation Quiz';
if(strstr($url, 'periodontics-seniors')) $title = 'Periodontics: How to Keep a Healthy Smile for Life';
if(strstr($url, 'periodontics-softtissuegrafts')) $title = 'Periodontics: Soft Tissue Grafts';
if(strstr($url, 'periodontics-stroke')) $title = 'New Evidence Finds an Association Between Periodontal Disease and Stroke';
if(strstr($url, 'periodontics-tobacco')) $title = 'Periodontcs: Tobacco Use and Periodontal Disease';
if(strstr($url, 'periodontics-women')) $title = 'Periodontics: Protecting Oral Health Throughout Your Life';
if(strstr($url, 'solutions-cosmetic')) $title = 'Cosmetic and Gum Enhancement Procedures, Crown Lengthening, Soft Tissue Grafting, Ridge Augmentation, Socket Preservation';
if(strstr($url, 'solutions-implants')) $title = 'Dental Implants to Replace Missing Teeth, Replacing a Single Tooth/All of Your Teeth, Sinus Augmentation, Ridge Augmentation/Expansion, Immediate Load Implants';
if(strstr($url, 'solutions-infections')) $title = 'Periodontal Therapy to Treat Infections';
if(strstr($url, 'solutions-nonsurgical')) $title = 'Non-Surgical Periodontal Therapy: Our Philosophy, Root Planning, Root Coverage';
if(strstr($url, 'solutions-pathology')) $title = 'Oral Pathology and Oral Medicine';
if(strstr($url, 'solutions-regrowing')) $title = 'Regrowing Your Lost Bone: Guided Tissue and Bone Regeneration';
if(strstr($url, 'solutions-sleep')) $title = 'Sleep Apnea and Snoring';
if(strstr($url, 'solutions-teeth-in-a-day')) $title = 'Teeth in a Day&trade;';
if(strstr($url, 'solutions-toassist')) $title = 'Periodontal And Restorative Solutions To Assist the General Dentist, Regeneration, Crown Lengthening, Cosmetic Crown Lengthening, Soft Tissues Grafting';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><? print $title ?> : Art of Perio</title>
	<meta name="title" content="<? print $BrowserTitle ?>">
	<meta name="keywords" content="<? print $MetaKeywords ?>">
	<meta name="description" content="<? print $description ?>">
	<link rel="stylesheet" type="text/css" href="includes/css/artofperio.css" />
	<link rel="stylesheet" href="includes/js/colorbox/colorbox.css" type="text/css" media="screen" />
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
	<script type="text/javascript" src="includes/js/composite.php"></script>
	<script type="text/javascript">

$form_link = 0;
function toggleFixedForm(){
	var offsetX = ($form_link ? -313 : -10);
	$form_link = ($form_link ? 0 : 1);

	$("#fixed_form").animate({
		left: offsetX
	}, 500, function() {
		// Animation complete.
	});
}

$(function () {
	
	
	
	$(".form_link").click(function() {
		
		toggleFixedForm();
		return false;

	});

	// Submit AJAX FORMS
	$(".ajaxform").submit(function(e)
	{
		$(".form_submit").html('Please wait while your form is submitted...')
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		
//		alert('postData: ' + postData);
		// return false;

		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR) 
			{
				//data: return data from server
//				alert(data);
				// $('#results').html(data);
				$('#fixed_form form').html('<p>Thank you for your inquiry! We&rsquo;ll be in touch soon.</p><p>This will window will close automatically.</p>');
				window.setTimeout( toggleFixedForm, 2500 );
			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$('#fixed_form form').html('<p style="padding:5px;background:#F00;">FAILED!</p>').fadeIn();
			}
		});
		e.preventDefault(); //STOP default action
		e.unbind(); //unbind. to stop multiple form submit.
	});

});
	</script>
</head>
<body id="<? print $selectedMain ?>">
<div id="fixed_form_placer"><div id="fixed_form">
	<a class="form_link" style="" href="#"></a>
	<form id="contact_form" class="ajaxform" action="input-contact_us.php">
		<h3>Have a question or just want to set up an appointment?</h3>
		<p>Contact us and we'll reach out to you soon.</p>
		<label>Name</label>
			<input class="input" type="text" name="Name" />
		<label>Phone</label>
			<input class="input" type="text" name="Phone" />
		<label>Email</label>
			<input class="input" type="text" name="Email" />
		<label class="checkbox"><input type="checkbox" name="appointment" checked="checked" /> I'd like an appointment</label>
		<label>Comments/Questions</label>
			<textarea name="Comments"></textarea>
		<p class="form_submit"><input type="submit" value="SEND" /></p>
			<input type="hidden" name="Page" value="<?=$selectedMain ?> | <?=$title ?>" />
	</form>
</div></div>
<div id="swoosh"></div>
<div id="nav">
	<? include "includes/topnav.php" ?>
</div>
<div id="top">
	<a href="index.html"><img id="logo" src="images/logo.png" alt="Art of Perio | David Goteiner, DDS" title="Art of Perio | David Goteiner, DDS" /></a>
</div>
<div style="width:990px;margin:0 auto;position:relative;z-index:200;"><a id="gallery_popin" href="#" style="position:absolute;right:0px;display:block;width:180px;height:150px;"></a></div>
<div style="display:none;"><div id="gallerypopin" style="width:750px;Xheight:700px;">
	<h3 style="text-align:center">Reprinted from New Jersey Top Dentists Magazine</h3>
	<img src="images/goteiner-easel.jpg" style="float:right;margin:0 3em 1em 2em;" />
	<p><b>Local Periodontist To Display Drawings and Paintings at Morristown Medical Center</b></p>
	<p>MORRISTOWN, N.J. &mdash; Dr. David Goteiner, a Chester-based periodontist and artist, will display selected drawings and paintings at a solo art exhibit from Aug. 4 through Sept. 14 at Morristown Medical Center. The exhibit is the latest in a series sponsored by the Women&rsquo;s Association of Morristown Medical Center.</p>
	<p>Goteiner has selected 34 pieces that will be displayed in the main corridor of the Medical Center (Madison 1).   Part of the proceeds of the art show will go to the Woman&rsquo;s Association of Morristown Medical Center.</p>
	<p>Two of the pieces are Rendevous and Venezia.  Rendevous is a painting of a Norwegian three-masted training schooner plying the North Sea on its way to a meeting with mythical creatures. Venezia is a study in light and shadows on Ria de la Vesta, Canal of the Tailors.  It portrays a typical scene from Venice that disappears just as it captures your heart.</p>
	<p>Born in Mannheim, Germany, Goteiner came to this country as a baby and developed a love for the arts at an early age. In 1982, he met highly regarded painter Anatoly Ivanov, then a recent immigrant from Russia. From then on, he has pursued his passion to paint and has continued to study with Ivanov.</p>
	<p>Not all of Goteiner&rsquo;s art is on a canvas. He is a practicing periodontist who sees patients in Chester. He received his dental and specialty training at Columbia and Harvard universities. His work restoring teeth and gums is, itself, a form of artistry. He also teaches at the University of Medicine and Dentistry in Newark.  He lives in Sunset Lake with his wife, Carrie.</p>
	<p>More information about Goteiner&rsquo;s periodontal practice and samples of his artwork can be found at www.artofperio.com or by calling (908) 879-7709.</p>
</div></div>
<div id="btm"></div>
<div id="frame-outer">
	<div id="frame"><div style="font-size:1px;">&nbsp;</div>
		<div id="content">
 			<? include "includes/subnav.php" ?>
 			<? if($Title){ ?><h2><? print $Title ?></h2><? } ?>
 			<? if(!$thumb) getNextPic(); ?>
<?
	} 
	$includedTop = 1;
?>
