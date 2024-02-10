<?php
$name = filter_var(trim($_GET['name']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_GET['surname']),FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_GET['lastname']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_GET['email']),FILTER_SANITIZE_STRING);
$birthday = filter_var(trim($_GET['birthday']),FILTER_SANITIZE_STRING);
$phonenumber = filter_var(trim($_GET['phonenumber']),FILTER_SANITIZE_STRING);
$gender = filter_var(trim($_GET['gender']),FILTER_SANITIZE_STRING);

session_start();
             $nickname =  $_SESSION["nickname"];

$connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
$query = ("UPDATE `user_info` SET `name` = '$name', `surname` = '$surname', `lastname` = '$lastname', `phonenumber` = '$phonenumber', `gender` = '$gender', `birthday` = '$birthday' WHERE `user_info`.`login` = '$nickname'");
$results = $connection->query($query);

$new_url_good = "account.php";
if ($results == 1) {
    
    header('Location: '.$new_url_good);

}
else{
    echo $_GET['email'];
}
?>