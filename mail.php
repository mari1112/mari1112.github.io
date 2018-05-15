<meta charset="utf-8">
<?php 
$message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
$message .= "Email: {$_POST['email']}<br>";
$message .= "Сообщение: {$_POST['comment']}<br>";

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'divina_marinka';
$mail->Password = '111296061196m';
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';
$mail->CharSet = 'UTF-8';
$mail->From = 'divina_marinka@mail.ru';
$mail->FromName = 'Сообщение на сайте';
$mail->addAddress('');
$mail->isHTML(true);
$mail->Subject = 'Новое сообщение с сайта';
$mail->Body = $message;

if( $mail->send() ){
echo '<h1 style="color: green; text-align: center;">Ваша заявка принята. Наш менеджер свяжется с Вами в ближайшее время!</h1>';
}else{
echo '<p style="color: red;">Ошибка!</p>';
}
 ?>