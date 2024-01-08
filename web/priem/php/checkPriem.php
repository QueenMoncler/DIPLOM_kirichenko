<?php
    $name = filter_var(trim($_POST['fname']),
        FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['sname']),
        FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']),
        FILTER_SANITIZE_STRING);
    $mark = filter_var(trim($_POST['mark']),
        FILTER_SANITIZE_STRING);
    $model = filter_var(trim($_POST['model']),
        FILTER_SANITIZE_STRING);
    $problem = filter_var(trim($_POST['problem']),
        FILTER_SANITIZE_STRING);

    $new_url_good = 'http://localhost/web/home/php/home.php';
    $new_url_negood = 'http://localhost/test.html';
    

    $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
    $query = ("INSERT INTO `priem`(`name`, `surname`, `phone`, `mark`, `model`, `problem`) VALUES ('$name', '$surname', '$phone', '$mark', '$model', '$problem')");
    
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
