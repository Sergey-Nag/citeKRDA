<?php

$msg_box = ""; // в этой переменной будем хранить сообщения формы
$errors = array(); // контейнер для ошибок
// проверяем корректность полей
if($_GET['name'] == "" || empty($_GET['name']))  $errors[] = "name=";
if($_GET['country'] == "" || empty($_GET['country'])) $errors[] = "&country=";
if($_GET['page-lang'] == "" || empty($_GET['page-lang'])) $errors[] = "&page-lang=";
if($_GET['email'] == "" || empty($_GET['email'])) $errors[] = "&email=";

$ip = $_SERVER['REMOTE_ADDR']; //Ip – клиента 
$result_ip = (array)json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

//$is_bot = preg_match(
// "~(Google|Yahoo|Rambler|Bot|Yandex|Spider|Snoopy|Crawler|Finder|Mail|curl)~i", 
// $_SERVER['HTTP_USER_AGENT']
//);
//$geo = !$is_bot ? json_decode(file_get_contents("http://api.sypexgeo.net/json/{$ip}"), true) : [];
//$result_geo = var_dump($geo);

// если форма не пустая
if(empty($errors)) {
    // собираем данные из формы
    $message = "Форма с сайта: " . $_GET['page-lang'] . "\n";
    $message .= "Имя: " . $_GET['name'] . "\n";
    $message .= "Страна: " . $_GET['country'] . "\n";
    $message .= "E-mail: " . $_GET['email'] . "\n";
    foreach($result_ip as $res) {
      $message .= " - ".$res."\n";
    }
    mail("info@kreyda.net", "Обратная связь с KREYDA-".$_GET['page-lang'], $message); // отправим письмо
    // выведем сообщение об успехе
    
    $msg_box = $message;
} else {
    // если были ошибки, то выводим их
    $msg_box = "";
    foreach($errors as $one_error){
        $msg_box .= $one_error;
    }
}
sleep(0.5);
// делаем ответ на клиентскую часть в формате JSON
echo json_encode(array(
    'result' => $msg_box
));

?>
