<?php
echo "hello";
phpinfo();

$host="";

$user="avnadmin";
$port="26223";


$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"QUANLYSACH"); 
//To select the database

session_start(); //To start the session

$query=mysqli_query($con,"select * from Sach"); 

//$row = mysqli_fetch_array($query);

$rowcount=mysqli_num_rows($query);
//made query after establishing connection with database.

//echo "my result <a href='data/" . htmlentities($row['classtype'], ENT_QUOTES, 'UTF-8') . ".php'>sinh vien</a>";

printf($rowcount);
?>