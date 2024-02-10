<?php
    
    $name = filter_var(trim($_POST['fname']),
        FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']),
        FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
        FILTER_SANITIZE_STRING);
    $mark = filter_var(trim($_POST['mark']),
        FILTER_SANITIZE_STRING);
    $model = filter_var(trim($_POST['model']),
        FILTER_SANITIZE_STRING);
    $problemSelect = $_POST['pets'];
    $problem = filter_var(trim($_POST['problem']),
        FILTER_SANITIZE_STRING);
 

    $new_url_good = 'emailMessage.php';
    $new_url_negood = 'priem.html';
    
  
    $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
    $query = ("INSERT INTO `priem`(`name`, `phone`, `email`, `mark`, `model`, `problem`, `date`) VALUES ('$name', '$phone', '$email', '$mark', '$model', '$problemSelect', NOW())");
    
    //$results = mysql_query($query, $connection);
    $results = $connection->query($query);
    
    if ($results == 1) {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['problem'] = $problemSelect;
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
