<?php



if($_POST){
    if($_POST['on_name']==''){ echo '<span class="error">Заполните имя</span>'; exit; }
    if($_POST['on_tel']==''){ echo '<span class="error">Заполните телефон</span>'; exit; }
    
    $to      = 'aai15@bk.ru';  // куда должны приходить заявки
    $subject = 'Заявка';
    $message = $_POST['on_name'].'<br>'.$_POST['on_tel'];
    $headers = 'From: info@z1.web73.ru' . "\r\n" .          //  От кого должно отправить письмо. Почта обязательно должна быть на домене сайта.
    'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $message, $headers)) {
        echo '<span class="good">Ваша заявка принята</span>'; exit;
    }
    else {
        echo '<span class="error">Ошибка отправки письма.</span>'; exit;    
    };
}