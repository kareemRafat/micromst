<?php

include "connect.php";

if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$select_user = "SELECT * FROM admin WHERE username= ? AND password= ? ";
		$prepare = $connect->prepare($select_user);
		$prepare->bind_param('ss', $username, $password);
		$prepare->execute();
		$result_user  = $prepare->get_result();
		$row_user  = $result_user->fetch_assoc();

		$count = $result_user->num_rows;


			if($count > 0 ){

			session_start();

							if(($_POST['Remember']) == 1){ // Remember me radio WHEN login value 1

							$_SESSION['id'] = $username;

							header ("Location:../index.php");

							}else{

								$_SESSION['id'] = $username;

								$time = time();

								$_SESSION['timez'] = $time;

								header ("Location:../index.php");
							}



					}else{

						header ("Location:../login.php");
					}

}else{

	header ("Location:../login.php");
}
