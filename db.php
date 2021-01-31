<?php 
	
	function createDB(){
		$server = "localhost";
		$user = "root";
		$password = "";
		$dbname = "skycastle";

		// create connection
		$con = mysqli_connect($server,$user,$password);
		if(!$con){
			die("connection error: ".mysqli_connect_error());
		}

		// create statement
		$sql = "create database if not exists $dbname";

		// process state
		if(mysqli_query($con,$sql)){ //table create
			$con = mysqli_connect($server,$user,$password,$dbname);
			$sql = "create table if not exists scuser(
				id int(3) not null auto_increment primary key,
				role varchar(25) not null,
				email varchar(25) not null,
				pass varchar(25) not null


		)";

		if(mysqli_query($con,$sql)){
			// echo "table created";
			return $con;
		}
		else{
			echo "cannot create table!";

		}

		}
		else{
			echo "error while creating database".mysqli_error($con);
		}
	}

 ?>