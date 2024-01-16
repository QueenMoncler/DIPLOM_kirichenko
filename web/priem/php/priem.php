<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Проверка</title>
  <link href="../css/menu.css" rel="stylesheet" />
  <!-- <link href="style/textHeader.css" rel="stylesheet" /> -->
  <link href="../css/priemForm.css" rel="stylesheet" />
  <link href="../css/label.css" rel="stylesheet" />
  <link href="../css/containerConfig.css" rel="stylesheet" />
</head>

<body>

  <!-- Navbar -->
  <nav id="navbar">
    <ul class="navbar-items flexbox-col">
      <li class="navbar-logo flexbox-left">
        <a class="navbar-item-inner flexbox">
          <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 1438.88 1819.54">
            <polygon points="925.79 318.48 830.56 0 183.51 1384.12 510.41 1178.46 925.79 318.48"/>
            <polygon points="1438.88 1663.28 1126.35 948.08 111.98 1586.26 0 1819.54 1020.91 1250.57 1123.78 1471.02 783.64 1663.28 1438.88 1663.28"/>
          </svg>
        </a>
      
      <li class="navbar-item flexbox-left">
        <a class="navbar-item-inner flexbox-left" href="../../home/php/home.php">
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
            <ion-icon name="people-outline"></ion-icon>
          </div>
          <span class="link-text">Контакты</span>
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
        <a class="navbar-item-inner flexbox-left">
          <div class="navbar-item-inner-icon-wrapper flexbox">
            <ion-icon name="settings-outline"></ion-icon>
          </div>
          <span class="link-text">Settings</span>
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
            <?=$nickname?>
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
          <a href="../../home/php/home.php">
            <img src="../img/favicpng.png">
          </a>
        </p>

      </div>
      <div class="thirdcolumn">
        <p>
          Автосервис<br>КИРИЧЕНКО
        </p>
      </div>
      <div class="thirdcolumn">
        <center>
          <a href="https://rkt.mai.ru/" target="_blank" class="adres">
            Ул.Репина 3 Филиал РКТ МАИ
          </a>
        </center>
      </div>
    </div>
  
    
      <div class="container">
        <form id="msform" action="../php/checkPriem.php" method="post">
          <!-- progressbar -->

          <!-- fieldsets -->
          <fieldset>
            <h2 class="fs-title">Карточка записи клиента</h2>
            <h3 class="fs-subtitle">Укажите ваши данные и автомобиля</h3>
            <input type="text" name="fname" placeholder="Имя" />
            <input type="text" name="sname" placeholder="Фамилия" />
            <input type="text" name="phone" placeholder="Номер телефона" />
            <input type="text" name="mark" placeholder="Марка автомобиля"/>
            <input type="text" name="model" placeholder="Модель и год" />
            <input type="text" name="problem" placeholder="Проблема" />
            <input type="submit" name="submit" class="submit action-button" value="Submit"/>
          </fieldset>
        </form>
        <br><br><br>
        <!-- link to designify.me code snippets -->
        <!-- <div class="dme_link">
          <p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p>
        </div> -->
        <!-- /.link to designify.me code snippets -->
      </div>
  </div>
  


</body>

</html>