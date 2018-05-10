<?php 
require "otpravka.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Мини чат</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<script type="text/javascript" src="/script/script.js"></script>
</head>
<body>
<h1 align="center">Заполните необходимые поля и нажмите отправить.</h1>
<div class="gl_block">
	<div class="pole">
			<form name="forms" class="forms" action="otpravka.php" method="post">
				<p align="center">Введите логин</p>
				<input type="text" name="login" class="login" id="login" size="45"> 
				<p align="center">Введите текст сообщения</p>
				<textarea rows="10" cols="64" class="text" id="text" name="text"></textarea><br>
				<button class="post" id="post" name="post">Отправить</button>
			</form>
	</div>
	<h3 align="center">Сообщения чата:</h3>
	<?php while ($myarray = mysqli_fetch_assoc($result)) { ?>
	<div class="kommentarii">
	<div class="info">
		<p>№ <?php echo $myarray['id']; ?></p>
		<p>Пользователь: <?php echo $myarray['login'];?></p>
		<p>Дата: <?php echo $myarray['date'];?></p>
	</div>
	<div class="komm_text">
		<p><?php echo $myarray['text']; ?></p>
	</div>
	</div>
	<?php }?>
</div>
</body>
</html>