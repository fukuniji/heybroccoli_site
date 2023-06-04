<?php 
var_dump($name);
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

!empty($_POST['NAME']) ? $name=strip_tags($_POST['NAME']):$result['status']='Обнаружена ошибка. Повторите отправку еще раз';
!empty($_POST['EMAIL']) ? $email=strip_tags($_POST['EMAIL']):$result['status']='Обнаружена ошибка. Повторите отправку еще раз';
!empty($_POST['PHONE']) ? $phone=strip_tags($_POST['PHONE']):$result['status']='Обнаружена ошибка. Повторите отправку еще раз';

// $mail=strip_tags($_POST['EMAIL']);
// $mes=strip_tags($_POST['MESSAGE']);




if(empty($result['status'])){
    $to  = "_____________@_____.com"; //Сюда емейл, на который отправлять
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $subject = "Сообщение с сайта nutrition.fm";
    $headers .= "From: nutrition.fm <мэйл@сайт>\r\n";
    $message = "Имя: $name <br> E-mail: $email <br> Сообщение: $phone";
    mail($to, $subject, $message, $headers);
    
    $result['status']='success';
}
else{
    $result['status']='Не заполнены обязательные поля.';
}

echo json_encode($result);
}
else{
//  header('Location: http://localhost/redirec2t.php ');
}
?>