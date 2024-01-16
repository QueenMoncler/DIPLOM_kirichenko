<?php
$new_url_good = "/register/mySite/php/signin.php";
session_start();
$urlGet = "/web/comment/php/comment.php";
$_SESSION["urlGetSession"] = $urlGet;
if (!isset($_SESSION["nickname"])) {
  header('Location: ' . $new_url_good);
  die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>Проверка</title>
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
        <p class="label">
          Автосервис<br>КИРИЧЕНКО
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
      <form action="../php/checkComment.php" method="post" class="form">
        <textarea type="text" name="comment" placeholder="Комментарий (от 8 до 1200 символов)" class="textareaComm"></textarea>
        <br>
        <label style="font-size: x-large;">Ваша оценка</label>
        <div class="rating-area">
          <input type="radio" id="star-5" name="rating" value="5"">
          <label for=" star-5" title="Оценка «5»">5</label>
          &nbsp;
          <input type="radio" id="star-4" name="rating" value="4">
          <label for="star-4" title="Оценка «4»">4</label>
          &nbsp;
          <input type="radio" id="star-3" name="rating" value="3">
          <label for="star-3" title="Оценка «3»">3</label>
          &nbsp;
          <input type="radio" id="star-2" name="rating" value="2">
          <label for="star-2" title="Оценка «2»">2</label>
          &nbsp;
          <input type="radio" id="star-1" name="rating" value="1">
          <label for="star-1" title="Оценка «1»">1</label>
        </div>
        <br>
        <input type="submit" class="inputSub">
      </form>
    </div>
    <!-- <script>
          inp = document.querySelector(".textareaComm")
          button = document.querySelector(".inputSub")
          button.setAttribute('disabled', true)
          inp.oninput = function(){
            if(inp.value.length < 5){
              button.setAttribute('disabled', true);
            }
            else{
              button.removeAttribute('disabled');
            }
          }
        </script> -->

    <script type="text/javascript" src="../js/buttonDis.js"></script>
    <div class="container2">
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
          <div class="thirdcolumn"
          
           <p style="text-align: right; font-size:large;"><?= $row['date'] ?></p></div>
          

        <br>
        </div>
        
      <?php } ?>

    </div>

  </div>

</body>

</html>