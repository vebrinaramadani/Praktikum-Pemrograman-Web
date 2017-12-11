<?php
$hostname ="localhost";
$username ="root";
$password ="";
$connect=mysql_connect($hostname, $username, $password);
if(connect){
    echo "Berhasil";
}
else{
    echo "gagal";
}