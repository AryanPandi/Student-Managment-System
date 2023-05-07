<?php 
$localhost='localhost';
$username='root';
$pass='';
$database='student';
$conn=mysqli_connect($localhost,$username,$pass,$database);

if(!$conn){
    echo "Connection Error:". mysqli_connect_error() ."<br>";
}

?>