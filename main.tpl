<!DOCTYPE html>
<html>
<head>
	<title><?php echo($title); ?></title>
    <link rel="stylesheet" type="text/css" href="/core/styles.css">
   	<link rel="stylesheet" type="text/css" href="/core/chvllib.min.css">
	<meta name="description" content="<?php echo($description); ?>">
	<meta name="keywards" content="<?php echo($keywards); ?>">
</head>
<body>
	<menu><menuheader>Меню</menuheader><puncts><p1><a href="index.php">Главная страница</a></p1><p2><a href="contacts.php">Наши контакты</a></p2></puncts></menu><br>
    <content><?php echo($content); ?></content>
    <footer>&copy; 2020<br><hr><br>Разработка сайта - <a href="chelovekolud.php">Человеколюдь</a></footer>
</body>
</html>