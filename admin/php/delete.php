<?php
    $id = $_GET['id'];
    $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
    $query = ("DELETE FROM `comments` WHERE `comments`.`id` = '$id'");
    $results = $connection->query($query);
   
    header('Location: http://localhost/admin/php/selectUser.php');
?>