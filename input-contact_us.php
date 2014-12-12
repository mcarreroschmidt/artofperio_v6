<?
$Company = "Art of Perio";
$Email_Label = "Info Request on " . $Company;
$SendToRecipient = "info@mcswebsolutions.com";
$SendToRecipient2 = "mcarreroschmidt@gmail.com";

// EMAIL FUNCTION:
function send_mail($recipient,$from,$subject,$body,$html) {
	global $Email_Label;
	//add FROM:
	$headers = 'From: '. $from;
	$headers .= '
Return-path:'. $from; 

	if($html){// if HTML email:
        //specify MIME version 1.0 for HTML Email
        $headers .= "\nMIME-Version: 1.0\n"; 
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\n";//
        $headers .= "Content-Transfer-Encoding: base64\n"; 
        $headers .= chunk_split(base64_encode($body)); 
		$sentOk = mail($recipient, $subject, "", $headers); // Send HTML EMAIL
	}else{// if NOT HTML email:
        //specify plain text for PLAIN Email
		$headers .= "Content-Type: text/plain; charset=ISO-8859-1\n"; 
		$sentOk = mail($recipient, $subject, $body, $headers);  // Send Non-HTML EMAIL
	}
	echo "sentOk=" . $sentOk; // VERIFY OK
}

// If vars are posted to this page, send email
print "<pre>";
print_r($_POST);
print "</pre>";
if($_POST){
	
	// SET VARIABLES from POST
	foreach($_POST as $key => $value){
		$$key = htmlspecialchars(trim($value));
	}
	$thisEmail = "";
	$thisEmail .= $Name . "<br>";
	$thisEmail .= $Phone . "<br>";
	$thisEmail .= $Email . "<br><br>";
	$thisEmail .= "Contact came from this page: " . ucwords($Page) . "<br><br>";
	if($appointment) $thisEmail .= "<b>This patient wishes to be contacted to set up an appointment.</b><br><br>";
	$thisEmail .= " Details: <b>" . $Comments . "</b><br>";
print $thisEmail;
	if($Page) send_mail($SendToRecipient,$Email,$Email_Label,$thisEmail,1);
	if($Page) send_mail($SendToRecipient2,$Email,$Email_Label,$thisEmail,1);
}

?>