<?php
session_start();

echo 'Количество посещений: ' . $_SESSION['pageThree']; 
echo "<br><a href='index.php'>Назад</a>";