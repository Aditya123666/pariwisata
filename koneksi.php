<?php
$con = mysqli_connect("localhost", "root", "", "bandung"); 

if (!$con){
	die("Koneksi Error : ".mysqli_error()." - ".mysqli_connect_error());
}
?>