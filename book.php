<?php
include_once 'func.php';
if (!empty($_POST)) {
	save_mess();
	header('Location: /book.php');
	exit;
}
$message = get_mess();
$message = array_mess($message);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/main.css">
	<title>Гостевая книга</title>

	<style>
		.message {
	border: 2px solid #C2C2C2;
	padding: 8px;
	margin-bottom: 20px; 
}
	</style>
</head>
<body>
	<form action="book.php" method="post">
		<label for="">Типа гостевая книга</label>
		<input type="text" placeholder="Введите ваше имя" name="name">
		<textarea placeholder="Введите ваше сообщение" name="mess"></textarea>
		<button type="submit">Отправить</button>
	</form>

	<? if(!empty($message)): ?>
		<? foreach ($message as $mess): ?>
			<? $mess = get_format_message($mess);?>
			<div class="message">
				<p>Автор: <?=$mess[0]?> | Дата: <?=$mess[2]?> </p>
				<div> <?=nl2br(htmlspecialchars($mess[1]))?> </div>
			</div>
		<? endforeach; ?>
	<? endif; ?>

</body>
</html>