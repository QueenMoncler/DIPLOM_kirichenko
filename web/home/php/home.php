<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" />

 <title>Автосервис</title>
 
  <link rel="icon" href="../../../content/img/logo.png">
  <link href="../css/menu.css" rel="stylesheet" />
  <link href="../css/label.css" rel="stylesheet" />
  <link href="../css/containerConfig.css" rel="stylesheet" />
  <link href="../css/formComment.css" rel="stylesheet" />
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
        </a>

      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="home.php">
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
            <img src="../../../content/img/logo.png">
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

    <div class="container3">
      <p class="price-list-label">
        <br>
        О местоположении
        <br> <br>
      </p>
      <center><img src="../img/mai1.png"></center>
      <div class="omestohome">
        <p>
          Сайт оригинал: <a href="rkt.mai.ru" style="font-size: x-large; color:#454545;"> rkt.mai.ru</a>

        </p>
        <p>
          Режим работы: пн-сб 09:00–17:00
        </p>
      </div>
      <br>
      <div class="omestohome">
        <p>
          Телефон: +7 (495) 571-24-47
        </p>
        <p>
          Адрес: ул. Репина, 3
        </p>
      </div>
      <br> <br>
    </div>

    <div class="CCcontainer2Test">
      <marquee behaviator="altentane" direction="" >
        <img src="../img/alfa-romeo-logo-145x100.png" width="100px">
        <img src="../img/amg-logo-145x100.png" width="100px">
        <img src="../img/audi-logo-145x100.png" width="100px">
        <img src="../img/bmw-logo-1-145x100.png" width="100px">
        <img src="../img/dodge-logo-145x100.png" width="100px">
        <img src="../img/ferrari-logo-145x100.png" width="100px">
        <img src="../img/geely-logo-145x100.png" width="100px">
        <img src="../img/kia-logo-2021-145x100.png" width="100px">
        <img src="../img/lada-logo-145x100.png" width="100px">
        <img src="../img/lamborghini-logo-145x100.png" width="100px">
        <img src="../img/maserati-logo-145x100.png" width="100px">
        <img src="../img/mercedes-benz-logo-145x100.png" width="100px">
        <img src="../img/porsche-logo-145x100.png" width="100px">
        <img src="../img/renault-logo-145x100.png" width="100px">
        <img src="../img/rolls-royce-logo-145x100.png" width="100px">
        <img src="../img/skoda-logo-145x100.png" width="100px">
        <img src="../img/tesla-logo-145x100.png" width="100px">
        <img src="../img/toyota-logo-1-145x100.png" width="100px">
        <img src="../img/volkswagen-logo-1-145x100.png" width="100px">
        <img src="../img/volvo-logo-145x100.png" width="100px">
      </marquee>
    </div>

    <div class="container2">
      <p class="price-list-label">
        <br>
        АВТОПИЛОТ ПРАЙС-ЛИСТ
        <br> <br>
      </p>
      <center>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/2.png" height="200px" width="200px" class="fivecolumnImage">
          </a>
        </div>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/3.png" height="200px" width="200px">
        </div>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/4.png" height="200px" width="200px">
          </a>
        </div>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/5.png" height="200px" width="200px">
          </a>
        </div>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/6.png" height="200px" width="200px">
          </a>
        </div>
      </center>
      <br>
      <center>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/7.png" height="200px" width="200px" class="fivecolumnImage">
          </a>
        </div>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/8.png" height="200px" width="200px">
          </a>
        </div>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/9.png" height="200px" width="200px">
          </a>
        </div>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/10.png" height="200px" width="200px">
          </a>
        </div>
        <div class="fivecolumn">
          <a href="../../price/php/price.php">
            <img src="../img/11.png" height="200px" width="200px">
          </a>
        </div>
      </center>
      <p class="price-list-label2">
        <br>
        Подберём интересующий вас ремонт автомобиля по адекватной стоимости
        <br>
      </p>
      <div class="button-priem">
        <p class="button-priem-label">
          <a href="../../priem/php/priem.php" style="text-decoration: none; ">ЗАПИСАТЬСЯ НА РЕМОНТ</a>
        </p>
      </div>
      <br><br>
    </div>

    <div class="container2">
      <label>
        <center>Комментарии и отзывы</center>
      </label>
      <?php
      $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');

      $query = ("SELECT * FROM `comments` ORDER BY date DESC");
      $results = $connection->query($query);
      while ($row = mysqli_fetch_array($results)) {
      ?>
        <div class="containerComment">

          <p style="font-size:large;">Оценка<br><?= $row['rating'] ?>/5</p>
          <div class="thirdcolumn">
            <p><span class="name"><?= $row['name'] ?></span></p>
          </div>
          <div class="thirdcolumn">
            <p><?= $row['comment'] ?></p>
          </div>
          <div class="thirdcolumn" <p style="text-align: right; font-size:large;"><?= $row['date'] ?></p>
          </div>


          <br>
        </div>

      <?php } ?>

      <div class="container2">
      <div class="thirdcolumn"><a>&nbsp;</a></div>
      <div class="thirdcolumn"><a href="../../../admin/php/selectUser.php">Для МОДЕРАТОРОВ</a></div>
      <div class="thirdcolumn"><a href="../../../admin/php/selectUser.php">Для АДМИНИСТРАТОРОВ</a></div>

      </div>

    </div>


  </div>

  <!-- 
  
  <main id="main" class="flexbox-col">
    <center>

    </center>

  </main> -->


</body>

</html>