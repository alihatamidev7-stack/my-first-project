<?php

/*
	The Send Mail php Script for Contact Form
	Server-side data validation is also added for good data validation.
*/

// $name = $_POST['name'];
// $email = $_POST['email'];
// $note = $_POST['note'];

// if( $name == '' || $email == '' || filter_var($email, FILTER_VALIDATE_EMAIL) == false ){
// 	// Set a 400 (bad request) response code and exit.
// 	http_response_code(400);
// }
// else{

// 	$formcontent="نام: $name\nایمیل: $email\n\nپیام:\n$note";

// 	//Place your Email Here
// 	$recipient = "alihatamidev.7@gmail.com";

// 	$mailheader = "From:$email\r\n";

// 	if( mail($recipient, 'پیام جدید در وب‌سایت', $formcontent, $mailheader) ){
// 		// Set a 200 (okay) response code.
// 		http_response_code(200);
// 	}
// 	else{
// 		// Set a 500 (internal server error) response code.
// 		http_response_code(500);
// 	}
// }


	$a = 1;
	$b = 2;


	if($a == 1 & $b == 3){
		echo 'ok'
	}


?>