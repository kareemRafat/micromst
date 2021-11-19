<?php


session_start();

if(isset($_SESSION['timez'])){

					// time() define the time now  - the $_SESSION start time

					$count  = time() - $_SESSION['timez'];

					if($count > 500){

					session_unset();

					session_destroy();


					}



}
