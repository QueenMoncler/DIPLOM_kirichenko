<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" />
  <title>Автосервис</title>
  <link rel="icon" href="../../../content/img/logo.png">
  <link rel="icon" href="favicon.ico">
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
            <polygon points="925.79 318.48 830.56 0 183.51 1384.12 510.41 1178.46 925.79 318.48" />
            <polygon points="1438.88 1663.28 1126.35 948.08 111.98 1586.26 0 1819.54 1020.91 1250.57 1123.78 1471.02 783.64 1663.28 1438.88 1663.28" />
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
      <div class=" thirdcolumn">
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


    <div class="container">
      <!-- action="../php/checkPriem.php" -->
      <form action="../php/checkPriem.php" id="msform" class="form" method="post">
        <!-- progressbar -->

        <!-- fieldsets -->
        <fieldset>
          <h2 class="fs-title">Карточка записи клиента</h2>
          <h3 class="fs-subtitle">Укажите ваши данные и автомобиля</h3>
          <div class="input-box"><input type="text" name="fname" id="inputInfo" placeholder="Имя" required pattern="[а-яА-Я]+" title="Имя может содержать только русские буквы"> </div>
          <div class="input-box"><input type="text" name="phone" id="inputInfo" placeholder="Номер телефона (79995558080)" required minlength="11" maxlength="11"></div>
          <div class="input-box"><input type="text" name="email" id="inputInfo" placeholder="Почта" required></div>
          <div class="input-box"> <input type="text" name="mark" id="inputInfo" placeholder="Марка автомобиля" required></div>
          <div class="input-box"><input type="text" name="model" id="inputInfo" placeholder="Модель и год" required></div>
          <div class="cardsSelect"><select name="pets" id="pet-select">
              <option value="">Выберите категорию</option>
              <option value="Общие работы">Общие работы</option>
              <option value="Передняя подвеска">Передняя подвеска</option>
              <option value="Задняя подвеска">Задняя подвеска</option>
              <option value="Рулевое управление">Рулевое управление</option>
              <option value="Тормозная система">Тормозная система</option>
              <option value="Трансмиссия">Трансмиссия</option>
              <option value="Система отопления и охлаждения">Система отопления и охлаждения</option>
              <option value="Двигатель">Двигатель</option>
              <option value="Электрика">Электрика</option>
              <option value="Топливная система">Топливная система</option>
              <option value="Кузовной ремонт">Кузовной ремонт</option>
            </select></div>


          <label for="pet-select">Или</label>
          <div class="input-box">
            <input type="text" name="problem" id="inputInfo" placeholder="Опишите проблему">
          </div>
          <input type="submit" name="submit" class="submit action-button" value="Submit" />
        </fieldset>
      </form>

      <br><br><br>
      <!-- link to designify.me code snippets -->
      <!-- <div class="dme_link">
          <p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p>
        </div> -->
      <!-- /.link to designify.me code snippets -->
    </div>
    <!-- <script defer src="../js/buttonDis.js"></script> -->
  </div>



</body>

</html>