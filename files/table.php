<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form method="POST">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type="submit" name="button" value='Создать'>
    </form>
    <!-- Таблица -->
    <?php
    $cols=$_POST['cols'];
    $rows=$_POST['rows'];
    $color=$_POST['color'];
    function drawTable($cols, $rows, $color){
      echo "<table border = '1' width='500' text-align:center>";
      for ($tr = 1; $tr <= $rows; $tr++) {
          echo "<tr>";
              for ($td = 1; $td <= $cols; $td++) { 
                  if ($tr == 1 || $td == 1) {
                     echo "<th style = 'background : {$color}'>" . $tr * $td . "</th>";
                  } else {
                  echo "<td style = 'background : {$color}'>" . $tr * $td . "</td>";
                  }
                }
              }
            }
      if (isset($_POST["button"])) {
        drawTable($cols, $rows, $color);
      }


?>

    
    <!-- Таблица -->
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>