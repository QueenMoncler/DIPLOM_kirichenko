<?php
    $name = filter_var(trim($_POST['name']),
        FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);

    $new_url_good = '/register/mySite/test.html';
    $new_url_negood = '/web/home/php/home.php';
    

    $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
    $query = ("INSERT INTO `user`(`name`, `login`, `password`) VALUES ('$name', '$login', '$pass')");
    $resultNAME = $connection->query("SELECT name FROM user WHERE login = '$login' AND password = '$pass'");
    //$results = mysql_query($query, $connection);
    $results = $connection->query($query);
    
    if ($results == 0) {
       
        header('Location: '.$new_url_negood);
        
    // there are some results, retrieve them normally (e.g. with mysql_fetch_assoc())
    } else {
        while ($row = mysqli_fetch_assoc($resultNAME)) {
            session_start();
            $_SESSION["nickname"] = $login;
            $_SESSION["name"] = $name;
            
        }
          
               echo "Данные сохранены в сессии";
    // no data from query, react accordingly
    header('Location: '.$new_url_good);
    }

    /*$mysql->query("INSERT INTO `user`(`name`, `login`, `password`)
                   VALUES ('$name', '$login', '$pass')");
*/
    $mysql->close();
?>
