<?php
//https://api.telegram.org/bot1467266061:AAHC0jrW-M_ywnLWR2Q1qHzb8tVOoAI3b14/getUpdates

$name = $_POST["name"];
$email = $_POST["email"];
$message=$_POST["message"];
$token = '1467266061:AAHC0jrW-M_ywnLWR2Q1qHzb8tVOoAI3b14';
$chat_id = '-423616188';
$arr=array (
    'Имя пользователя'=>$name,
    'Email'=>$email,
    'Message'=>$message,

);

foreach ($arr as $key => $value){
    $txt .='<b>'.$key.'</b>'.$value.'%0A';
};

// отправляем электронную почту
$success = fopen('https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}$parse_mode=html$text={$txt}','г');

// перенаправляем на страницу сообщения об успешной отправке данных формы
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>