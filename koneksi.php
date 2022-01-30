<?php
$server="localhost";
$user="root";
$database="market";
$password="";

$koneksi=mysqli_connect($server,$user,$password,$database);

if($koneksi){
    echo "";
}else{
    echo "koneksi gagal";
}
 ?>