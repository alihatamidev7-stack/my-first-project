<?php

/*
 * Send Mail PHP Script for Contact Form
 * Server-side validation is included for safer form handling.
 */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$note = trim($_POST['note'] ?? '');

if ($name === '' || mb_strlen($name) < 2 || $email === '' || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    http_response_code(400);
    exit('Invalid form data');
}

$formcontent = "نام: {$name}\nایمیل: {$email}\n\nپیام:\n{$note}";
$recipient = 'alihatamidev.7@gmail.com';
$subject = 'پیام جدید در وب‌سایت';

$headers = "From: {$recipient}\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($recipient, $subject, $formcontent, $headers)) {
    http_response_code(200);
    echo 'ok';
} else {
    http_response_code(500);
    echo 'Mail could not be sent';
}

?>