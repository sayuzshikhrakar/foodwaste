<?php
$host = "localhost";//Host ip address 127.0.0.1
$user ="root"; //mysql username
$password ="root";//mysql password
$database= "foodwaste";

$con = mysqli_connect($host, $user, $password);

/*if ($con) {
    echo "MySql database connected successfully.";
}else{
      echo "Unable to connect MySql database";
    }*/
mysqli_select_db($con, $database);

?>
