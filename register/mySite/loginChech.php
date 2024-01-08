<?php
$login = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $new_url_good = 'http://localhost/web/home/php/home.php';
    $new_url_negood = 'http://localhost/register/mySite/test.html';

$conn = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
$result = $conn->query("SELECT * FROM user WHERE login = '$login' AND password = '$pass'");
$resultNAME = $conn->query("SELECT name FROM user WHERE login = '$login' AND password = '$pass'");

if ($result == 1) {
    
        while ($row = mysqli_fetch_assoc($resultNAME)) {
            session_start();
            $_SESSION["nickname"] = $login;
            $_SESSION["name"] = $row['name'];
            setcookie("nickname", $login);
        }
    
   
    echo "Данные сохранены в сессии";
    header('Location: '.$new_url_good);



}
else{
    header('Location: '.$new_url_negood);
}
$mysql->close();
//header('Location: /');
?>