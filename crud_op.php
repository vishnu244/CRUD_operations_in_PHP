<?php
$host = "localhost";
$user = "root";
$password = "";
$DataBase = "crud1";

$con = mysqli_connect($host,$user,$password,$DataBase);

if ($con){
    echo "";

}
else{
    echo "Database not connected";
}
?>