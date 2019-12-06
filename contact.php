<?php
$response = array('error_message' => '', 'success_message' => '', 'element' => '');

$c_name = "";
$c_email = "";
$c_message = "";

if(isset($_POST['action']) && $_POST['action'] == "contact") {

	$c_name = $_POST['contactName'];
	$c_email = $_POST['contactEmail'];
	$c_message = $_POST['contactMessage'];

	if(isset($_POST['contactName']) && trim($_POST['contactName']) != '' && isset($_POST['contactEmail']) && trim($_POST['contactEmail']) != '' && isset($_POST['contactMessage']) && trim($_POST['contactMessage']) != '') {

		$string_exp = "/^[A-Za-z .'-]+$/";
		if(!preg_match($string_exp,$_POST['contactName'])) {
			$response['element'] = 'contactName';
			$response['error_message'] = 'The Name you entered does not appear to be valid.<br />';
		}

		$email_exp = "/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/";
		if(!preg_match($email_exp, $_POST['contactEmail'])) {
			$response['element'] = 'contactEmail';
			$response['error_message'] = 'The Email Address you entered does not appear to be valid.<br />';
		}

		if($response['error_message'] == "") {
			$to = "alinutza.ms@gmail.com";
			$subject = 'Emails from alinab.info';
			$message = 'Name: '. $_POST['contactName'] ."\n" . 'Message: ' . $_POST['contactMessage'] . "\n\n" . '*Contact form at alinab.info*';
			$headers = 'From: ' . $_POST['contactEmail'] . "\r\n" . 'Reply-To: '. $_POST['contactEmail'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
			$mail = mail($to, $subject, $message, $headers);
			if($mail) {
				$c_message = "";
				$response['success_message'] = 'Your email was sent.';
			} else {
				$response['error_message'] = 'Your email could not be sent.';
			}
		}
	} else {
		if(trim($_POST['contactName']) == "") {
			$response['element'] = 'contactName';
			$response['error_message'] = "Please enter your name.";
		} elseif(trim($_POST['contactEmail']) == "") {
			$response['element'] = 'contactEmail';
			$response['error_message'] = "Please enter your email";
		} elseif(trim($_POST['contactMessage']) == "") {
			$response['element'] = 'contactMessage';
			$response['error_message'] = "Please enter your message";
		}
	}
}
echo json_encode($response);
?>