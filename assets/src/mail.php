

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$EmailTo = "kachmarskaolha@gmail.com";
$Subject = "New Message Received";

// готовим тело электронного письма
$Body .= "Name: ";
$Body .= $name;
$Body .= "n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "n";

// отправляем электронную почту
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// перенаправляем на страницу сообщения об успешной отправке данных формы
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>