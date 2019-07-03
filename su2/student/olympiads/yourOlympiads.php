<?php
$mysqli=connect();
$q="SELECT `your_olympiads` FROM `studentolympiads` WHERE `login`='$login';";
$result=$mysqli->query($q);
$rows=$result->fetch_assoc();
$massol=explode(";",$rows["your_olympiads"]);
$massol1=array();
$masstime_start=array();
$masstime_end=array();
$l=( count($massol)-1);
$now=date("Y-m-d H:i:s");
	$k=0;
	for ($i=0 ;$i<$l ; $i++){
	$q="SELECT `time_start`,`time_end` FROM `olympiads` WHERE `time_end`>'$now' AND `name`='".$massol[$i]."';";
	$result=$mysqli->query($q);
	if($result->num_rows!=0){
	$rows=$result->fetch_assoc();
	$massol1[$k]=$massol[$i];
	$masstime_start[$k]=$rows["time_start"];
	$masstime_end[$k]=$rows["time_end"];
	$k=$k+1;
	}
}

for($i=0;$i<($k-1);$i++){
	for($j=($i+1);$j<$k;$j++){
		if($masstime_start[$i]>$masstime_start[$j]){
			$buff=$masstime_start[$i];
			$masstime_start[$i]=$masstime_start[$j];
			$masstime_start[$j]=$buff;
			$buff=$masstime_end[$i];
			$masstime_end[$i]=$masstime_end[$j];
			$masstime_end[$j]=$buff;
			$buff=$massol1[$i];
			$massol1[$i]=$massol1[$j];
			$massol1[$j]=$buff;
		}
	}
}
 echo "<ul class=\"list\" />";
for($i=0;$i<$k;$i++){
	$elem=$massol1[$i];
	echo "<div class=\"form\" >";
	echo "<li class=\"listElem\"> <a href=\"aboutOlympiad.php?q=".$elem."\"> $elem </a></li>";
	if (($now>$masstime_start[$i]) &&($now<$masstime_end[$i])){
		echo "<br/><form action=\"olympiad.php\" method=\"POST\">  <button class=\"submitB\" type=\"submit\" name=\"name\" value=\"$elem\" /> Перейти на олимпиаду</button></form>  ";
	} else if($now<$masstime_start[$i]) { echo "<br/><span class=\"date\">Состоится ".date('H:i d F',strtotime($masstime_end[$i]))."</span>";} else 
	if($now>$masstime_end[$i]){
		echo "<br/><span class=\"date\">Был проведен ".date('H:i d F',strtotime($masstime_end[$i]))."</span>";
	}
		
	echo "</div><br/>";
}
echo "</ul>";

?>