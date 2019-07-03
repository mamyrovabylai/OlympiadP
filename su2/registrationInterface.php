<html>
<head>
	<title>
	Регистрация
	</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/registrateMain.css"/>
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
		Регистрация Ученика
		<hr/>
	</div>
	<div class="formMain" >
	<form action="registrateStudent.php" method="POST">
		<input class="edits" type="text" placeholder="Имя" name="signupName" size="45%" /> 
		<input class="edits" type="text" placeholder="Фамилия" name="signupSecondName" size="45%" /></br>
		<input class="edits" type="text" placeholder="E-mail" name="email" size="45%" />
		<input class="edits" type="text" placeholder="Логин" name="signupLogin" size="45%" /> </br>
		<input class="edits" type="Password" placeholder="Пароль" name="signupPassword" size="45%" /> 
		<input class="edits" type="password" placeholder="Пароль повторно" name="signupPasswordAgain" size="45%" /> </br>
		<input class="edits" id="button" type="submit" name="signupSubmit" value="Зарегистрироваться" />
	
	</form>
	</div>
	
</div>
<?php include("footer.html"); ?>
<div class="bottom">

</div>
</body>


</html>
