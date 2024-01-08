<?php 
$comment = filter_var(trim($_POST['comment']),
FILTER_SANITIZE_STRING);
$rating = intval($_POST['rating']);
session_start();
$nickname = $_SESSION["nickname"];
$name = $_SESSION["name"];
$connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
$query = ("INSERT INTO comments(`nickname`, `name`, `comment`, `rating`, `date`)
            VALUES('$nickname', '$name', '$comment', '$rating', NOW())");
$results = $connection->query($query);
$new_url_good = 'http://localhost/web/comment/php/comment.php';
    if($results == 1){
        header('Location: '.$new_url_good);
    }
    else{
        echo "ОШИБКА!!!!!!!!!!";
    }
?>