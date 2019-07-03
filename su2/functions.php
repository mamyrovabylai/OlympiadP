<?php
function connect(){
		$mysqli= new mysqli(
	"localhost",
	"mamyrov.abylai",
	"4588hkE",
	"id840574_zakaz"
	);
		if($mysqli->errno!=0){
			return false;
		} else return $mysqli;
	}
	function loginT($login,$password){
		$mysqli=connect();
		if(!$mysqli){ return false;} 
		else{
			$q="SELECT `passwords` FROM `teacherusers` WHERE `login`='$login';";
			$result=$mysqli->query($q);
			$rows=$result->fetch_assoc();
			if($rows["passwords"]==$password){ return true;} else {return false;}
		}
	}
	function loginS($login,$password){
		$mysqli=connect();
		if(!$mysqli){ return false;} 
		else{
			$q="SELECT `passwords` FROM `studentusers` WHERE `login`='$login';";
			$result=$mysqli->query($q);
			$rows=$result->fetch_assoc();
			if($rows["passwords"]==$password){ return true;} else {return false;}
		}
	}
?>