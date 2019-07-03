<html>
<head>
<title>Главная</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
</head>
<body>
		<?php
		include("header.html");
		include("underhead.html");
			
			include("olympUnderHead.html");
			if($_GET["a"]=="1"){
				include("olympiads/old.php");
			}else if($_GET["a"]=="3") {
				include("olympiads/create.php");
			} else {
				include("olympiads/futureOlympiads.php");
			}
		
		
		?>
</body>
</html>