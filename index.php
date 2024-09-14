<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "database";

$connection = mysqli_connect($host,$username,$password,$db);
$query="select * from users ";
$result= mysqli_query($connection,$query);
while(rowmysqli_fetch_array($result))
{
    echo "<pre>";
    print_r($result);
    echo "</pre>";

}
