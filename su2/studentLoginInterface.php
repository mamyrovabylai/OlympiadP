<html>
<head>
	<title>
	Вход
	</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/loginMain.css"/>
</head>

<body>
	<div class="header">
		<div id="firstHeadElem">
		<a href="index.php">OlympiadP</a>
		</div>
	</div>
	<div class="underHead">
	
	</div>
<div class="form">
	<div class="formHead">
		Вход в Студента
		<hr/>
	</div>
	<div class="formMain" >
	<form action="checkLoginStudent.php" method="POST">
	<input type="text" name="login" placeholder="Login" size="45%"/><br/>
	<input type="password" name="password" placeholder="Password" size="45%"/>
	<br/><br/>
	<input type="submit" name="loginButton" value="Войти" id="button"/>
	<a href=""> Забыли пароль?</a>
	</form>
	<?php
	if($_GET["q"]=="0") echo "<i style=\"color:red;\">Неправильный пароль или логин</i>";
	else if($_GET["q"]=="1") echo "<i style=\"color:red;\">Укажите все данные входа!</i>";
	?>
	</div>
	
</div>
<?php include("footer.html"); ?>
<div class="bottom">

</div>
</body>


</html>