<?php
$hostName = "localhost";
$db_name = "sarkari_result.php";
$username = "root";
$password = "";

$conn = mysqli_connect($hostName,$username,$password,$db_name);
if($conn){
    //echo "DB connected";
}else{
    echo "Something wrong";  
}
?>