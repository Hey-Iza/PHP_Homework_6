<?php
session_start();
if (!isset($_SESSION["pageThree"])) {
  $_SESSION["pageThree"] = 1;
} else {
  $_SESSION["pageThree"] = ++$_SESSION["pageThree"];
  if ($_SESSION["pageThree"] % 3 === 0) {
    header("Location: https://{$_SERVER["HTTP_HOST"]}/page4.php");
  }
}
echo 'Старт сессии';
echo "<br><a href='index.php'>Назад</a>";