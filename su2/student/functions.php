<?php
session_start();

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
	
	function update($mod,$new,$old,$mysqli,$login){
		if($new!=$old){
			
			$q="UPDATE `studentusers` SET `$mod`='$new' WHERE `login`='$login';";
			$result=$mysqli->query($q);
			echo "$mod has changed on $new , $login";
		}
	}
	
	function updates($mod,$new,$old,$mysqli,$login){
		if($new!=$old){
			$q="SELECT `id` FROM `studentusers` WHERE `$mod`='$new'";
			$result=$mysqli->query($q);
			if($result->num_rows==0){			
				$q="UPDATE `studentusers` SET `$mod`='$new' WHERE `login`='$login';";
				$result=$mysqli->query($q);
				echo "$mod has changed on $new , $login";
				if($mod=="login"){
					$q="UPDATE `studentolympiads` SET `$mod`='$new' WHERE `login`='$login';";
					$result=$mysqli->query($q);
		unset($_SESSION["studentLogin"]);
		unset($_SESSION["studentPassword"]);
		exit();
				}
			} else{
				echo "Same $mod exists";
			}
		}
		
	}
?>