<html>
<head>
<title> 
Студент
</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>

<?php
	include("header.html");
	include("underhead.html"); 	
	include("olympUnderHead.html");
	echo "<div class=\"main\">";
			if($_GET["a"]=="1"){
				include("olympiads/old.php");
			}  else if($_GET["a"]=="0") {
				include("olympiads/futureOlympiads.php");
				
			} else {
				include("olympiads/yourOlympiads.php");
			}
	echo "</div>";	

?>
</body>
<?php include("footer.html"); ?>
<div class="bottom">

</div>
</html>