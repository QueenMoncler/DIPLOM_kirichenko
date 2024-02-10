<?php
$new_url_good = "/register/mySite/php/signin.php";
session_start();
$urlGet = "/web/account/php/account.php";
$_SESSION["urlGetSession"] = $urlGet;
if (!isset($_SESSION["nickname"])) {
  header('Location: ' . $new_url_good);
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" />

  <meta charset="UTF-8">

 <title>Автосервис</title>
 
  <link rel="icon" href="../../../content/img/logo.png">
  <link href="../css/menu.css" rel="stylesheet" />
  <link href="../css/label.css" rel="stylesheet" />
  <link href="../css/containerConfig.css" rel="stylesheet" />
  <link href="../css/formComment.css" rel="stylesheet" />
  <link href="../css/cardsmypriem.css" rel="stylesheet" />
</head>

<body>

  <!-- Navbar -->
  <nav id="navbar">
    <ul class="navbar-items flexbox-col">
      <li class="navbar-logo flexbox-left">
        <a class="navbar-item-inner flexbox">
          <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 1438.88 1819.54">
            <polygon points="925.79 318.48 830.56 0 183.51 1384.12 510.41 1178.46 925.79 318.48" />
            <polygon points="1438.88 1663.28 1126.35 948.08 111.98 1586.26 0 1819.54 1020.91 1250.57 1123.78 1471.02 783.64 1663.28 1438.88 1663.28" />
          </svg>
          <!-- <img src="../../../content/img/logo.png" style="width: 100%;"> -->
        </a>

      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="/">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <ion-icon name="home-outline"></ion-icon>
          </div>
          <span class="link-text">Домой</span>
        </a>

      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="../../priem/php/priem.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <ion-icon name="folder-open-outline"></ion-icon>
          </div>
          <span class="link-text">Записаться</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="../../mypriem/php/mypriem.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <ion-icon name="pie-chart-outline"></ion-icon>
          </div>
          <span class="link-text">Мои записи</span>

        </a>
      </li>

      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="../../price/php/price.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <ion-icon name="pie-chart-outline"></ion-icon>
          </div>
          <span class="link-text">Прайс-лист</span>
        </a>
      </li>
      
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="../../comment/php/comment.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <ion-icon name="chatbubbles-outline"></ion-icon>
          </div>
          <span class="link-text">Отзывы</span>
        </a>
      </li>
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="../../account/php/account.php">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <ion-icon name="chatbubbles-outline"></ion-icon>
          </div>
          <span class="link-text">Личный кабинет</span>
        </a>
      </li>
      

      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <ion-icon name="settings-outline"></ion-icon>
          </div>
          <span class="link-text">
            <?php
            session_start();
            $nickname =  $_SESSION["nickname"];
            ?>
            <?= $nickname ?>
          </span>
        </a>
      </li>
    </ul>
  </nav>
  <div class="mainContainer">
   <div class="rowcontainer">
      <div class="thirdcolumn">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://google.com" id="Layer_1" data-name="Layer 1" viewBox="0 0 1438.88 1819.54" class="testSvg">
          <polygon points="925.79 318.48 830.56 0 183.51 1384.12 510.41 1178.46 925.79 318.48" />
          <polygon points="1438.88 1663.28 1126.35 948.08 111.98 1586.26 0 1819.54 1020.91
             1250.57 1123.78 1471.02 783.64 1663.28 1438.88 1663.28" />
        </svg> -->
        <p class="testSvg">
          <a href="/">
            <!-- <img src="../img/favicpng.png"> -->
            <img src="../../../content/img/logo.png"">
          </a>
        </p>

      </div>
      <div class="thirdcolumn">
        <p class="label">
          АВТОСЕРВИС<br>Кириченко
        </p>
      </div>
      <div class="thirdcolumn">
        <center>
          <a href="https://rkt.mai.ru/" target="_blank" class="adres">
            Ул.Репина 3<br>Филиал РКТ МАИ
          </a>
        </center>
      </div>
    </div>

    <div class="container2">
        <div class="cardUserMenu">
            <p>Настройки</p>
            <p class="LiInf">Личная информация</p>
            <hr>
        </div>
        <div class="cardUser">
      
            <div class="labelCardsUser"><p>Информация о пользователе</p></div>
            
            <?php
             session_start();
             $nickname =  $_SESSION["nickname"];
             
             $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
             $query = ("SELECT * FROM `user_info` where `login` = '$nickname'");
             $results = $connection->query($query);
             $row = mysqli_fetch_array($results);
             $_SESSION["email"] = $row['email'];
            ?>
            <form action="../php/checkAccount.php" class="cardUserForm" >
                <div class="input-box"><p>Имя</p><input type="text" name="name" placeholder="Имя" value="<?= $row['name']?>"></div>
                <div class="input-box"><p>Фамилия</p><input type="text" name="surname" placeholder="Фамилия" value="<?= $row['surname']?>"></div>
                <div class="input-box"><p>Отчество</p><input type="text" name="lastname" placeholder="Отчество" value="<?= $row['lastname']?>"></div>
                <div class="input-box"><p>Почта</p><input type="email" name="email" placeholder="Почта" value="<?= $row['email']?>" disabled></div>
                <div class="input-box"><p>Дата рождения</p><input type="date" name="birthday" placeholder="Дата рождения" value="<?= $row['birthday']?>"></div>
                <div class="input-box"><p>Номер телефона</p><input type="text" name="phonenumber" placeholder="Номер телефона" value="<?= $row['phonenumber']?>"></div>
                <div class="input-box"><p>Пол</p>
                    <select name="gender">
                    <option value="<?= $row['gender']?>"><?= $row['gender']?></option>
                    <option value="Мужской">Мужской</option>
                    <option value="Женский">Женский</option> 
                    </select>
                </div>
                <div class="input-submit"><input type="submit" placeholder="Сохранить" value="Сохранить" ></div>
                
            </form>
            
        </div>
    </div>
    
    
    <div class="container2">
    <div class="cardUserMenu">
            
            <p class="LiInf">История записей</p>
            <hr>
        </div>
    <div class="cardUser">
    <div class="labelCardsUser"><p>История</p></div>
<?php 
    session_start();
    $email = $_SESSION['email'];
    
  
    $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');
    $query = ("Select * from `priem` where `email` = '$email'");
    $results = $connection->query($query);
    while($row = mysqli_fetch_array($results)){
    ?>
    
    <div class="ag-format-container">
        <div class="ag-courses_box">
          <div class="ag-courses_item">
            <a href="#" class="ag-courses-item_link">
              <div class="ag-courses-item_bg"></div>
              <div class="ag-courses-item_title">
              <?= $row['problem']?>
              </div>
              <div class="ag-courses-item_date-box">
                Дата записи:
                <span class="ag-courses-item_date">
                  <?=$row['date']?>
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <?php } ?>
   </div>
    </div>

  </div>

 
</body>

</html>