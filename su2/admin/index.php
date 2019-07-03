<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="mainAdminka.css" type="text/css"/>
<meta charset="utf-8"/>
</head>
<body>
<div class="leftSide">
		<div class="leftSideLinks"><a href="index.php?query=1">Add new teacher</a> </div>
	
<div class="leftSideLinks"><a href="index.php?query=2">Update the data</a> </div>
	
<div class="leftSideLinks"><a href="index.php?query=3">Delete teacher</a> </div>
	
<div class="leftSideLinks"><a href="index.php?query=4">Some option</a> </div>
	
<div class="leftSideLinks"><a href="index.php?query=5">Some option</a> </div>
	</div>
	
	<div class="rightSide">
<?php
$query=$_GET["query"];
switch($query){
	case "2":
	include("update.html");
	break;
	break;
	case "3":
	include("deleteTeacher.html");
	break;
	default:
	 $a=array(rand(48,57),rand(48,57),rand(48,57),rand(48,57),rand(97,122),rand(65,90),rand(65,90));
	$s="";
	foreach($a as $i){$s=$s.chr($i);}
	echo "<div class=\"passdiv\">
							<details><summary>Generated password </summary>
									<b> $s</b>
							</details>
			</div>";
	include("addNewTeacher.html");
	break;
	
}
?>

</div>
</body>
</html>