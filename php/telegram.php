<?php

/* https://api.telegram.org/bot5332883006:AAHHE5ZsCNgGskcAxmJ1KKZHbs5Qn6u43LQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];
$token = "5332883006:AAHHE5ZsCNgGskcAxmJ1KKZHbs5Qn6u43LQ";
$chat_id = "-777059637";
$arr = array(
  'Company name ' => $name,
  'Phone number: ' => $phone,
  'Email: ' => $email,
  'Message: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>
