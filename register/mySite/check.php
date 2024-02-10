<?php
    $name = filter_var(trim($_POST['name']),
        FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
        FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);

    $new_url_good = '/register/mySite/test.html';
    $new_url_negood = '/web/home/php/home.php';
    
    $passMd = md5($pass);

    $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');

    $insertUserInfo = ("INSERT INTO `user_info`(`login`,`email`,`name`) VALUES('$login','$email','$name')");

    $query = ("INSERT INTO `user`(`name`, `email`, `login`, `password`) VALUES ('$name','$email', '$login', '$passMd')");
    $resultNAME = $connection->query("SELECT name FROM `user` WHERE login = '$login' AND password = '$passMd'");
    //$results = mysql_query($query, $connection);
  
    $results = $connection->query($query);
    
    if ($results == 0) {
        echo $resultsIUnst;
      
      //  header('Location: '.$new_url_negood);
        
    // there are some results, retrieve them normally (e.g. with mysql_fetch_assoc())
    } else {
        while ($row = mysqli_fetch_assoc($resultNAME)) {
            session_start();
            $_SESSION["nickname"] = $login;
            $_SESSION["name"] = $name;
            
        }
        $resultsIUnst = $connection->query($insertUserInfo);
               echo "Данные сохранены в сессии";
    // no data from query, react accordingly
    header('Location: '.$new_url_good);
    }

    /*$mysql->query("INSERT INTO `user`(`name`, `login`, `password`)
                   VALUES ('$name', '$login', '$pass')");
*/
    $mysql->close();
?>
