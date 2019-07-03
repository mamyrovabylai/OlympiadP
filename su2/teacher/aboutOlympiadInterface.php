<html>
<head>
<title> Олимпиада</title>
<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/main.css" type="text/css"/>
</head>

<body>
<?php 
$now=date("Y-m-d H:i:s");
		$name=trim(stripslashes(htmlspecialchars($_GET["q"])));
	   require_once("functions.php");
		$mysqli=connect();
		if ($mysqli){
			$q="SELECT `subject`,`teacher`,`time_start`,`time_end`,`description`,`first_place`,`second_place`,`third_place` FROM `olympiads` WHERE `name`='".$name."';";
			$result=$mysqli->query($q);
			if($result->num_rows==1){
			$rows=$result->fetch_assoc();
			echo $name."<br/>";
			echo $rows["subject"]."<br/>";
			echo $rows["teacher"]."<br/>";
			echo $rows["description"]."<br/>";
			echo $rows["time_start"]."<br/>";
			echo $rows["time_end"]."<br/>";
			if($now>$rows["time_end"]){
			echo $rows["first_place"]."<br/>";
			echo $rows["second_place"]."<br/>";
			echo $rows["third_place"];
			
			}
			} else { echo "Такой олимпиады нет!";}
		}
	?>

</body>

</html>