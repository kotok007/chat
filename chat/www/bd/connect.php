<?php
require './config.php';

$connect = mysqli_connect("$host", "$user", "$pass", "$base");
mysqli_query($connect, "SET CHARACTER SET 'utf8'");
if (!$connect) {
	echo "Произошла ошибка подключения к БД. База данных <b>".$base."</b> не существует!";
}

?>