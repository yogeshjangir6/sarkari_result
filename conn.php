<?php
//Constant name generally in Uppercase
//No $ dollar sign required before constant name
//Constant are globally access within the PHP script
const HOSTNAME = "localhost";
define("DBNAME","sarkari_result.php");
const USERNAME = "root";
const PASSWORD = "";

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);
if($conn){
    //echo "DB connected";
}else{
    echo "Something wrong";  
}
?>