​<?php

	// get the posted data
	$name = $_POST['contact_name'];
	$email_address = $_POST['contact_email'];
	$message = $_POST['contact_message'];
	// check that a name was entered

	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: Tadeo Pedro Ricasoli <ricasolit@gmail.com>"."\r\n";
	$headers .= "Reply-To: ricasolit@gmail.com\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion();
	//$headers .= "Reply-To: $email_address\r\n";


	// write the email content
	$email_content  = "Nombre   : $name <br>\r\n";
	$email_content .= "Email   : $email_address<br>\r\n";
	$email_content .= "Mensaje : $message\r\n\n";

	// send the email
	if(mail('ricasolit@gmail.com','www.tadeoricasoli.com' , $email_content, $headers)) {
	    /*echo 'mensaje desde el site'.$email_content. $headers;*/
	// send the user back to the form
	    $ok_message = 'Gracias por contactarte';
	    /*header('Location: contacto.php?e='.urlencode($ok_message));*/
	    echo $ok_message;
	} else{
	    echo $ok_message='Inténtelo de nuevo por favor';
	}/*exit;*/

?>​