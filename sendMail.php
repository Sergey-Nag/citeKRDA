<?php

$msg_box = ""; // в этой переменной будем хранить сообщения формы
$errors = array(); // контейнер для ошибок
// проверяем корректность полей
if($_GET['name'] == "")  $errors[] = "name=";
if($_GET['country'] == "") $errors[] = "&country=";
if($_GET['email'] == "") $errors[] = "&e-mail=";

// если форма без ошибок
if(empty($errors)) {
    // собираем данные из формы
    $message  = "Имя: " . $_GET['name'] . "\n";
    $message .= "Страна: " . $_GET['country'] . "\n";
    $message .= "E-mail: " . $_GET['email'] . "\n";
//    send_mail($message); // отправим письмо
    // выведем сообщение об успехе
    $msg_box = $message;
} else {
    // если были ошибки, то выводим их
    $msg_box = "";
    foreach($errors as $one_error){
        $msg_box .= $one_error;
    }
}
sleep(1);
// делаем ответ на клиентскую часть в формате JSON
echo json_encode(array(
    'result' => $msg_box
));

?>
