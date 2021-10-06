<?php
/* https://api.telegram.org/bot1949041891:AAFbo0s6FibP-1UQqh4WZT-cT-eat31Dtbs/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$message = $_POST['user_text'];
$token = "1949041891:AAFbo0s6FibP-1UQqh4WZT-cT-eat31Dtbs";
$chat_id = "-547856900";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email:' => $email,
  'Сообщение:' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.php');
} else {
  echo "Error";
}
?>