<?php 
// $koneksi = mysqli_connect('localhost','root','','db_spine');
$koneksi = mysqli_connect('us-cdbr-iron-east-05.cleardb.net','b205d7b92eec82','1835684a','heroku_bd069ea2d8217ca');
if(!$koneksi){
    echo "koneksi gagal";
}
// CLEARDB_DATABASE_URL: mysql://:@/?reconnect=true
?>