<form method="POST" class="formselect"/>
<select name="subject" size="1">
<option disabled selected>Выберите предмет </option>
<option value="geography">География</option>
<option value="rights">Право</option>
<option value="ict">Информатика</option>
<option value="historykz">История Казахстана</option>
</select>
<input class="buttonSelect" type="submit" value="Выбрать" name="button"/>
</form>
<?php
$mysqli=connect();
$now=date("Y-m-d H:i:s");
if(isset($_POST["subject"]) && isset($_POST["button"]) ){
	$subject=$_POST["subject"];
	$q="SELECT `name` FROM `olympiads` WHERE `time_start`>'$now' AND `subject`='$subject';";
	}else {
	$q="SELECT `name` FROM `olympiads` WHERE `time_start`>'$now';"; 
	}
$result=$mysqli->query($q);
if($result->num_rows==0){ echo "<span>Таких олимпиад нет!</span>";} else{
$rows=$result->fetch_assoc();

 echo "<ul class=\"list\" />";
do{
	
				$elem=$rows["name"];
					
				
					echo "<li class=\"listElem\"> <a href=\"aboutOlympiad.php?q=".$elem."\"> $elem </a></li><br/>";
					
					
				
}while ($rows=$result->fetch_assoc());
echo "</ul>";
}
?>