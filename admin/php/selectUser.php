<?php
//$new_url_good = "/register/mySite/test.html";
session_start();
// $urlGet = '/admin/php/selectUser.php';

$username = $_SESSION["nickname"];
// setcookie('urlGet', $urlGet);
$urlGet = $_SERVER['REQUEST_URI'];
$_SESSION["urlGetSession"] = $urlGet;
if ($username != "admin") {
  header('Location: /register/mySite/php/signin.php');
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
  <link href="../css/tableusers.css" rel="stylesheet" />
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
          <a href="../../web/home/php/home.php">
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
      <table class="tableusers">
        <thead>
          <tr class="stolbik">
            <td>Имя</td>
            <td>Никнейм</td>

          </tr>
        </thead>
        <tbody>
          <?php
          $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');

          $query = ("SELECT * FROM `user`");
          $results = $connection->query($query);
          while ($row = mysqli_fetch_array($results)) {
          ?>
            <tr>
              <td>
                <?php echo $row['name'] ?>
              </td>
              <td>
                <?php echo $row['login'] ?>
              </td>

            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>
    </div>

    <div class="container2">
      <?php
      $connection = new mysqli('localhost', 'root', '', 'kirichenkodiplomphp');

      $query = ("SELECT * FROM `comments` ORDER BY date DESC");
      $results = $connection->query($query);
      while ($row = mysqli_fetch_array($results)) {
      ?>
        <div class="containerComment">
          <div class="thirdcolumn"> <a style="text-align: center;" href="delete.php?id=<?= $row['id'] ?>" " onclick=" return confirm('Delete this?');" class="buttonDelete">Удалить комментарий</a></div>
          <div class="thirdcolumn"><p style="font-size:large;">Оценка<br><?= $row['rating'] ?>/5</p></div>
          <div class="thirdcolumn"></div>
       <br> <br> <br> <br>
          
         
          
          <div class="thirdcolumn">
            <p style="text-align: left; margin-left: 2%;"><span class="name"><?= $row['name'] ?></span></p>
          </div>
          <div class="thirdcolumn">
            <p style="text-align: center;"><?= $row['comment'] ?></p>
          </div>
          <div class="thirdcolumn">
            <p style="font-size: large; text-align: right;"><?= $row['date'] ?></p>
          </div>

        </div>

      <?php } ?>

    </div>



  </div>




  <!-- 
  
  <main id="main" class="flexbox-col">
    <center>

    </center>

  </main> -->


</body>

</html>