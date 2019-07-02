<?php
		$data = json_decode(file_get_contents('php://input'), true);

		function validata($data){
			$data = stripcslashes($data);
			$data = trim($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		if (isset($data['firstName'])) $firstName = validata($data['firstName']);
		else $firstName = "";
		if (isset($data['lastName'])) $lastName = validata($data['lastName']);
		else $lastName = "";
		if (isset($data['email'])) $email = validata($data['email']);
		else $email = "";
		if (isset($data['google'])) $google = validata($data['google']);
		if (isset($data['lang'])) $lang = validata($data['lang']);
		else $leng = "";
		if (isset($data['message'])) $message = validata($data['message']);
		else $message = "";
		if (isset($data['subject'])) $subject = validata($data['subject']);
		else $subject = "";
		if (isset($data['phone'])) $phone = validata($data['phone']);
		else $phone = "";

		if (isset($google)) {

			// Set the recipient email address.
	        // Type here your email id for receive email.
	        $email_to = "agustin.gervasio.martinez@gmail.com";

	        // Set the email subject.
	        $email_subject = "$firstName en Esquemas Creativos";

	        // Build the email content.
	        $email_body = "Nombre: $firstName $lastName\n";
					if (isset($phone)) $email_body .= "Telefono: $phone\n";
	        $email_body .= "Email: $email\n";
		$email_body .= "Idioma: $lang\n";
		$email_body .= "Asunto: $subject\n\n";
	        $email_body .= "Message:\n$message\n";

	        // Build the email headers.
	        $email_headers = "From: $firstName $lastName <$email>";

	        // Send the email.
	        $sent = mail($email_to, $email_subject, $email_body, $email_headers);
	        if ($sent){
			   		echo json_encode(array("message" => "success"));
				 	} else{
			   		echo json_encode(array("message" => "failed"));
					}
		} else {echo json_encode(array("message" => "failed", "reason" => "no captcha"));}

?>
