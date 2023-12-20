<?php
    $name = filter_var(trim($_POST['name']),
        FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);

    $new_url_good = 'http://localhost/mySite/testSign.html';
    $new_url_negood = 'http://localhost/mySite/test.html';
    

    $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
    $query = ("INSERT INTO `user`(`name`, `login`, `password`) VALUES ('$name', '$login', '$pass')");
    
    //$results = mysql_query($query, $connection);
    $results = $connection->query($query);
    
    if ($results == 0) {
        header('Location: '.$new_url_good);
    // there are some results, retrieve them normally (e.g. with mysql_fetch_assoc())
    } else {
    // no data from query, react accordingly
    header('Location: '.$new_url_negood);
    }

    /*$mysql->query("INSERT INTO `user`(`name`, `login`, `password`)
                   VALUES ('$name', '$login', '$pass')");
*/
    $mysql->close();
?>
