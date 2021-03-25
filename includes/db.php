<?php
//    dbname,username,password,server

//    1- db connection
//    mysql -u root -p 
//    mysql> use dbname

$server="localhost";
$user="root";
$pass="";
$dbname="bbdms";
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','bbdms');

$conn=mysqli_connect($server,$user,$pass,$dbname);

if(!$conn)
{
    die( "connection failed".mysqli_connect_error());
   
}



 
 // mysqli_close($conn);


?>