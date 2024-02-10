<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = 'true';
    $mail->Username = 'melkiuafonua@gmail.com';
    $mail->Password = 'yfcuwxxzlrbstjxc';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    $mail->setFrom('melkiuafonua@gmail.com');

    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $problem = $_SESSION['problem'];
    $mail->addAddress($email);
    $mail->isHTML(true);
    
    $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
    $query = ("Select * from `price_problem` where `problem` = '$problem'");
    $results = $connection->query($query);
    $row = mysqli_fetch_array($results);
    $mail->Subject = 'Autoservice KIRICHENKO';
    $str = "Компания приветствует вас {$name}! \nЦена за работу по категории: '{$problem}' варьируется от {$row['priceMin']}руб. до {$row['priceMax']}руб. \nСпасибо, что выбираете нас!"; 

    // $mail->Body = 'Компания приветствует вас' + $name + '!'+ 'Цена за работу по категории: ' +$problem+' варьируется от '+$row['priceMin']+'руб. до '+$row['priceMax']+'руб. Спасибо, что выбираете нас!';
    $mail->Body = $str;

    $mail->send();
    echo
    "
    <script>
    alert('Сообщение отправлено');
    </script>
    ";
    $new_url_good = 'priem.php';
    header('Location: '.$new_url_good);
    

?>
