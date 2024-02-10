<?php
$login = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    session_start();
    // setcookie('url', '/register/mySite/test.html');
    $new_url_good = $_SESSION["urlGetSession"];
    // $new_url_good = '/web/home/php/home.php';
    $new_url_negood = '/register/mySite/test.html';

$passMd = md5($pass);
$conn = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
$result = $conn->query("SELECT * FROM user WHERE login = '$login' AND password = '$passMd'");
$resultNAME = $conn->query("SELECT name FROM user WHERE login = '$login' AND password = '$passMd'");

if ($result == 1) {
    
        while ($row = mysqli_fetch_assoc($resultNAME)) {
            session_start();
            $_SESSION["nickname"] = $login;
            $_SESSION["name"] = $row['name'];
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