<?php 

	
	
	function createDB(){
		$server = "den1.mysql1.gear.host";
		$user = "account7";
		$password = "Ha3N95q0?!5i";
		$dbname = "account7";

		
		// $server = "localhost";
		// $user = "root";
		// $password = "";
		// $dbname = "account7";


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
			$sql = "create table if not exists account7(
					id int(3) not null auto_increment primary key,
					role varchar(25) not null,
					name varchar(25) not null,
					email varchar(25) not null unique,
					pass varchar(25) not null,
					phone varchar(25) not null,
					address varchar(25),
					dob varchar(30),
					photo varbinary(500000)


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