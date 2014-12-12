<? if ($topnav) { ?>
	<li><a id="link-<? print $targetLink[home] ?>" class="home" href="index.html">Home</a></li>
	<li><a id="link-<? print $targetLink[about] ?>" href="about.html">About Us</a><ul>
<? } ?>
	<? if ($topnav || $selectedMain == 'about') { ?>
		<? if(!$topnav) { ?><li><a href="#">General Information</a>
		<ul class="acitem"><? } ?>
			<li><a id="sub-<? print $targetSub[mission] ?>" href='about-mission.html' alt='Mission Statement'>Mission Statement</a></li>
			<li><a id="sub-<? print $targetSub[staff] ?>" href='about-staff.html' alt='Staff Information'>Staff Information</a></li>
			<li><a id="sub-<? print $targetSub[hours] ?>" href='about-hours.html' alt='Hours of Operation'>Hours of Operation</a></li>
			<li><a id="sub-<? print $targetSub[map] ?>" href='about-map.html' alt='Directions to Our Office'>Directions to Our Office</a></li>
			<li><a id="sub-<? print $targetSub[emergencies] ?>" href='about-emergencies.html' alt='Emergencies'>Emergencies</a></li>
			<li><a id="sub-<? print $targetSub[doctor] ?>" href='about-doctor.html' alt='Doctor/Practice History'>Doctor/Practice History</a></li>
			<li><a id="sub-<? print $targetSub[awards] ?>" href='about-awards.html' alt='Community Service Awards'>Community Service Awards</a></li>
			<li><a id="sub-<? print $targetSub[articles] ?>" href='about-articles.html' alt='News Articles'>News Articles</a></li>
			<li><a id="sub-<? print $targetSub[gallery] ?>" href='about-gallery.html' alt='Art Gallery'>Art Gallery</a></li>
		<? if(!$topnav) { ?><li><a href="#">General Information</a></ul></li>
	
		<li><a href="#">Qualifications</a>
		<ul class="acitem"><? } ?>
			<li><a href='pdf/cv.pdf' target='_new'>Dr. David Goteiner's Curriculum Vitae (PDF)</a></li>
		<? if(!$topnav) { ?><li></ul></li><? } ?>
	<? } ?>
<? if ($topnav) { ?></ul></li><? } ?>
<? if ($topnav) { ?><li><a id="link-<? print $targetLink[solutions] ?>" href="solutions.html">Solutions</a><ul><? } ?>
	<? if ($topnav || $selectedMain == 'solutions') { ?>
		<li><a href="#">LANAP</a>
		<ul class="acitem">
			<li><a <? navlink('solutions-lanap') ?>>Intro to LANAP</a></li>
			<li><a <? navlink('solutions-lanap_faq') ?>>LANAP FAQ</a></li>
			<li><a <? navlink('solutions-lapip') ?>>LAPIP</a></li>
		</ul></li>
	
		<li><a href="#">Non-Surgical Periodontal Therapy</a>
		<ul class="acitem">
			<li><a <? navlink('solutions') ?>>Philosophy</a></li>
			<li><a <? navlink('solutions-root_planing') ?>>Root Planing</a></li>
		</ul></li>
	
		<li><a href="#">Periodontal And Restorative Solutions</a>
		<ul class="acitem">
			<li><a <? navlink('solutions-regeneration') ?>>Regeneration</a></li>
			<li><a <? navlink('solutions-functional_crown') ?>>Functional Crown Lengthening</a></li>
			<li><a <? navlink('solutions-cosmetic_crown') ?>>Cosmetic Crown Lengthening</a></li>
			<li><a <? navlink('solutions-grafting_restorative') ?>>Soft Tissue Grafting</a></li>
			<li><a <? navlink('solutions-pocketreduction') ?>>Pocket Depth Reduction</a></li>
		</ul></li>
	
		<li><a href="#">Replacing Missing Teeth</a>
		<ul class="acitem">
			<li><a <? navlink('solutions-dental_implants') ?>>Dental Implants</a></li>
			<li><a <? navlink('solutions-teeth_in_a_day') ?>>Teeth in a Day&trade;</a></li>
			<li><a <? navlink('solutions-replacing_single') ?>>Replacing a Single Tooth</a></li>
			<li><a <? navlink('solutions-replacing_several') ?>>Replacing Several Teeth</a></li>
			<li><a <? navlink('solutions-replacing_all') ?>>Replacing All of Your Teeth</a></li>
			<li><a <? navlink('solutions-sinus_augmentation') ?>>Sinus Augmentation</a></li>
			<li><a <? navlink('solutions-ridge_expansion') ?>>Ridge Augmentation and Expansion</a></li>
		</ul></li>
	
		<li><a href="#">Cosmetic and Gum Enhancement Procedures</a>
		<ul class="acitem">
			<li><a <? navlink('solutions-lanap') ?>>LANAP</a></li>
			<li><a <? navlink('solutions-gum') ?>>Cosmetic and Gum Enhancement</a></li>
			<li><a <? navlink('solutions-root_coverage') ?>>Root Coverage</a></li>
			<li><a <? navlink('solutions-crown') ?>>Crown Lengthening</a></li>
			<li><a <? navlink('solutions-ridge_augmentation') ?>>Ridge Augmentation and Socket Preservation</a></li>
		</ul></li>
	
			<li><a <? navlink('solutions-infections') ?>>Periodontal Therapy to Treat Infections</a></li>
			<li><a <? navlink('solutions-regrowing') ?>>Regrowing Lost Bone</a></li>
			<li><a <? navlink('solutions-pathology') ?>>Oral Pathology and Oral Medicine</a></li>
			<li><a <? navlink('solutions-sleep') ?>>Sleep Apnea and Snoring</a></li>
	<? } ?>
<? if ($topnav) { ?></ul></li><? } ?>
<? if ($topnav) { ?><li><a id="link-<? print $targetLink[patients] ?>" href="patients.html">For Patients</a><ul><? } ?>
	<? if ($topnav || $selectedMain == 'patients') { ?>
		<li><a href="#">Patient Information</a>
		<ul class="acitem">
			<li><a <? navlink('patients') ?>>Information for Patients</a></li>
			<li><a <? navlink('patients') ?>>Who is a Periodontist?</a></li>
			<li><a <? navlink('patients-assessment') ?>>Periodontal Risk Assessment</a></li>
			<li><a <? navlink('patients-signs') ?>>Warning Signs of Gum Disease</a></li>
			<li><a <? navlink('patients-dentist') ?>>Your Dentist</a></li>
			<li><a <? navlink('patients-role') ?>>Your Role</a></li>
			<li><a <? navlink('patients-infection') ?>>Infection Control</a></li>
			<li><a <? navlink('patients-financial') ?>>Financial Policy</a></li>
			<li><a <? navlink('patients-insurance') ?>>Insurance FAQ</a></li>
		</ul></li>
	
		<li><a href="#">Appointments</a>
		<ul class="acitem">
			<li><a <? navlink('patients-appointments') ?>>General Information</a></li>
			<li><a <? navlink('patients-first') ?>>Your First Appointment</a></li>
			<li><a <? navlink('patients-second') ?>>Your Second Appointment</a></li>
		</ul></li>
	
		<li><a href="#">Forms</a>
		<ul class="acitem">
			<li><a href='pdf/patienthealthrecord.pdf' target='_new'>Medical History Form (PDF)</a></li>
		</ul></li>
	
		<li><a href="#">Qualifications</a>
		<ul class="acitem">
			<li><a href='pdf/cv.pdf' target='_new'>Dr. David Goteiner's Curriculum Vitae (PDF)</a></li>
		</ul></li>
	<? } ?>
<? if ($topnav) { ?></ul></li><? } ?>
<? if ($topnav) { ?><li><a id="link-<? print $targetLink[periodontics] ?>" href="periodontics.html">Periodontics</a><ul><? } ?>
	<? if ($topnav || $selectedMain == 'dentists') { ?>
<? /*
		<li><a href="#">Continuing Education Courses</a>
		<ul class="acitem">
			<li><a <? navlink('periodontics-dentists') ?>>Upcoming C. E. Courses</a></li>
			<li><a <? navlink('periodontics-dentists-past') ?>>Past C. E. Courses</a></li>
		</ul></li>
*/ ?>	
		<li><a href="#">Qualifications</a>
		<ul class="acitem">
			<li><a href='pdf/cv.pdf' target='_new'>Dr. David Goteiner's Curriculum Vitae (PDF)</a></li>
		</ul></li>
	<? } ?>
	
	<? if ($topnav || $selectedMain == 'periodontics') { ?>
		<li><a href="#">General information</a>
		<ul class="acitem">
			<li><a <? navlink('periodontics') ?>>Frequently Asked Questions (FAQ)</a></li>
			<li><a href="pdf/c-reactive.pdf" target="_new">C-Reactive Protein (PDF)</a></li>
			<li><a <? navlink('periodontics-health') ?>>General Health (FAQ)</a></li>
			<li><a <? navlink('periodontics-guminflammation') ?>>Gum Inflammation May Affect the Body</a></li>
			<li><a <? navlink('periodontics-medications') ?>>How Medications Can Affect Your Oral Health</a></li>
			<li><a href="pdf/transmittal.pdf" target="_new">How Periodontal Disease Can Be Transmitted (PDF)</a></li>
			<li><a <? navlink('periodontics-seniors') ?>>How to Keep a Healthy Smile for Life</a></li>
			<li><a <? navlink('periodontics-connection') ?>>Mouth Body Connection</a></li>
			<li><a <? navlink('periodontics-diseases') ?>>Periodontal (Gum) Diseases</a></li>
			<li><a <? navlink('periodontics-procedures') ?>>Periodontal Procedures</a></li>
			<li><a <? navlink('periodontics-plastic') ?>>Periodontal Plastic Procedures</a></li>
			<li><a <? navlink('periodontics-selfevaluation') ?>>Self-Evaluation Quiz</a></li>
			<li><a <? navlink('periodontics-scalingrootplaning') ?>>What is Scaling and Root Planing?</a></li>
			<li><a <? navlink('periodontics-bloodtest') ?>>Your Routine Blood Test May One Day Send You to a Periodontist</a></li>
		</ul></li>
	
		<li><a href="#">Brushing &amp; flossing</a>
		<ul class="acitem">
			<li><a <? navlink('periodontics-brush_up') ?>>&quot;Brush-Up&quot; on Brushing Your Teeth and Gums</a></li>
			<li><a <? navlink('periodontics-excuses') ?>>Brushing and Flossing &quot;Excuse Busters&quot; to the Rescue</a></li>
			<li><a <? navlink('periodontics-brushfloss') ?>>How to Brush and Floss</a></li>
			<li><a <? navlink('periodontics-equipment') ?>>Maintaining and Protecting Your Oral Hygiene Equipment</a></li>
		</ul></li>
	
		<li><a href="#">Children</a>
		<ul class="acitem">
			<li><a <? navlink('periodontics-children') ?>>Children's Oral Health</a></li>
		</ul></li>
	
		<li><a href="#">Dental implants</a>
		<ul class="acitem">
			<li><a href="pdf/implants.pdf" target="_new">Dental Implants Can Help You Avoid Glasses Later in Life (PDF)</a></li>
			<li><a <? navlink('periodontics-implants') ?>>Dental Implants: Teeth That Look and Feel Like Your Own</a></li>
		</ul></li>
	
		<li><a href="#">Diabetes</a>
		<ul class="acitem">
			<li><a <? navlink('periodontics-diabetes') ?>>Periodontal Therapy Helps Patients With Type 2 Diabetes</a></li>
		</ul></li>
	
		<li><a href="#">Heart disease</a>
		<ul class="acitem">
			<li><a href="pdf/jop2008b.pdf" target="_new">Endotoxin Levels Are Associated With High-Density Lipoprotein, Triglycerides, and Troponin in Patients With Acute Coronary Syndrome and Angina: Possible Contributions From Periodontal Sources (PDF)</a></li>
			<li><a <? navlink('periodontics-healthyheart') ?>>Don't Let a Dirty Mouth Pollute Your Clean Heart</a></li>
			<li><a href="pdf/heartdisease.pdf" target="_new">Heart Disease &amp; Stroke (PDF)</a></li>
			<li><a href="pdf/Heart_Attacks.pdf" target="_new">Oral Health of Patients Entering Morristown Memorial Hospital with Acute Coronary Syndrome and Angina (PDF)</a></li>
			<li><a <? navlink('periodontics-heartdisease') ?>>New Study Finds Positive Association Between Periodontal Disease and Coronary Heart Disease</a></li>
			<li><a href="pdf/jop2008.pdf" target="_new">Presence and Significance of Interleukin-1 Polymorphism in Patients Who Present With Acute Coronary Syndrome, Angina, and Chronic Periodontitis: An Epidemiologic Pilot Study (PDF)</a></li>
			<li><a href="http://www.dailyrecord.com/apps/pbcs.dll/article?AID=2008802040328" target="_new">Chester dentist&rsquo;s study links oral and heart health</a></li>
		</ul></li>
	
		<li><a href="#">Obesity</a>
		<ul class="acitem">
			<li><a href="pdf/obesity.pdf" target="_new">Obesity &amp; Periodontal Disease (PDF)</a></li>
		</ul></li>
	
		<li><a href="#">Stroke</a>
		<ul class="acitem">
			<li><a href="pdf/heartdisease.pdf" target="_new">Heart Disease &amp; Stroke (PDF)</a></li>
			<li><a <? navlink('periodontics-stroke') ?>>New Evidence Finds an Association Between Periodontal Disease and Stroke</a></li>
		</ul></li>
	
		<li><a href="#">Tobacco use</a>
		<ul class="acitem">
			<li><a <? navlink('periodontics-tobacco') ?>>Tobacco Use and Periodontal Disease</a></li>
		</ul></li>
	
		<li><a href="#">Women</a>
		<ul class="acitem">
			<li><a <? navlink('periodontics-calcium') ?>>Listen Up Ladies: Calcium May Reduce the Risk of Periodontitis</a></li>
			<li><a <? navlink('periodontics-birth') ?>>Mom's Dental Health Could Affect Baby's Birth</a></li>
			<li><a <? navlink('periodontics-birthweight') ?>>Periodontal Disease and Preterm Low Birthweight</a></li>
			<li><a <? navlink('periodontics-menopause') ?>>Postmenopause and Periodontal Disease: What Women Need to Know</a></li>
			<li><a <? navlink('periodontics-hormones') ?>>Women's Hormones Could Affect Their Oral Health</a></li>
			<li><a <? navlink('periodontics-women') ?>>Women's Oral Health</a></li>
		</ul></li>
	
		<li><a href="#">Other information</a>
		<ul class="acitem">
			<li><a <? navlink('periodontics-associations') ?>>Periodontal and Dental Associations</a></li>
			<li><a <? navlink('periodontics-links') ?>>Periodontal Links</a></li>
		</ul></li>
	<? } ?>
<? if ($topnav) { ?></ul></li><? } ?>
