<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$attachment = $_FILES['attachment'];

$to = 'r.grin.444@gmail.com';
$subject = 'Сообщение от ' . $name;

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n";

$message = "--boundary\r\n";
$message .= "Content-Type: text/plain; charset=\"utf-8\"\r\n\n";
$message .= "Имя: $name\r\n";
$message .= "Email: $email\r\n";
$message .= "Сообщение: $message\r\n";
$message .= "--boundary\r\n";

if ($attachment['error'] === UPLOAD_ERR_OK) {
  $filename = basename($attachment['name']);
  $filetype = $attachment['type'];
  $filesize = $attachment['size'];
  $filedata = file_get_contents($attachment['tmp_name']);
  
  $message .= "Content-Type: $filetype; name=\"$filename\"\r\n";
  $message .= "Content-Transfer-Encoding: base64\r\n";
  $message .= "Content-Disposition: attachment; filename=\"$filename\"\r\n\n";
  $message .= chunk_split(base64_encode($filedata)) . "\r\n";
  $message .= "--boundary--\r\n";
}

if (mail($to, $subject, $message, $headers)) {
  http_response_code(200);
  echo "Сообщение отправлено!";
} else {
  http_response_code(500);
  echo "Произошла ошибка при отправке сообщения.";
}