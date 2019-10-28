<?php
	
	function connBDD(){
		$server="localhost";
		$user="root";
		$password="root";

		$dbname="SGBDR";

		try
		{
			$conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$password);
			echo "BDD open";
			echo "<br/>";
			return $conn;
		}
		catch (Exception $e)
		{
			die("Erreur BDD : ".$e->getMessage());
		}
	}

	function getUserFormation(){
		$rep=connBDD()->query("SELECT * FROM user INNER JOIN formation ON user.id_formation = formation.id");
		return $rep;
	}

	function getUsers(){
		$rep=connBDD()->query("SELECT * FROM user");
		return $rep;
	}

	function getUserByName($nom){
		$q=connBDD()->prepare("SELECT * FROM user WHERE user.lastname = :nom");
		$q->bindParam(":nom",$nom);
		$q->execute();
		return $q;
	}
?>
