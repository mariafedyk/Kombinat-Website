<?php 
date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailer-5.2-stable/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587; 
$mail->SMTPSecure = 'tls'; 
$mail->SMTPAuth = true; 
$mail->Username = "24.fedik.24@gmail.com"; // Your Gmail address.
$mail->Password = "wxjyslsazvstvual"; // Your Gmail login password or App Specific Password.

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$visit_email = $_POST['email'];
$phone_number = $_POST['number'];
$selectOption = $_POST['study'];
$selectOptionType = $_POST['studytype'];
if(empty($name)||empty($lastname)||empty($visit_email)||empty($phone_number)||empty($selectOption)||empty($selectOptionType)){
	echo "Всі поля необхідно заповнити!";
	exit;
}
$email_body = "$name $lastname хоче пройти навчання під назвою '$selectOption'. Тип навчання: '$selectOptionType'.\r\n Номер телефону : $phone_number.\r\n Пошта: $visit_email.";

$mail->setFrom("$visit_email"); // Set the sender of the message.
$mail->addAddress('kombinat.nkk@gmail.com'); // Set the recipient of the message.
$mail->Subject = "New student!"; // The subject of the message.

// Choose to send either a simple text email...
$mail->Body = "$email_body"; // Set a plain text body.

if ($mail->send()) {
    echo "Ваше повідомлення успішно надіслано!";
} else {
    echo "Помилка надсилання: " . $mail->ErrorInfo;
}

?>