<?php
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $new_url_good = 'http://localhost/mySite/testSign.html';
    $new_url_negood = 'http://localhost/mySite/test.html';

$mysql = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
$result = $mysql->query("SELECT * FROM `user` WHERE login = `$login` AND `password` = `$pass`");
if ($result == 1) {
    echo '<script>alert("Ошибка! Неправильный логин или пароль)</script>';
    exit();

}
else{
    header('Location: '.$new_url_good);
}
$mysql->close();
//header('Location: /');
?>