<?php
session_start();

$count = $_SESSION["pageThree"];
echo "Количество посещений: " . $count;
echo "<br><a href='index.php'>Назад</a>";