<?php
// catatan,
//jika perlu, sesuaikan nama user dengan pass

$host = 'localhost';
$user = 'root';
$pass = '12345';
$db = 'mysql';

$cnn= mysql_connect($host,$user,$pass);
if(!cnn){
	exit('Koneksi Gagal');
}
$db = mysql_select_db($db);
if(!$db){
	exit('Gagal Memilih Database');
}


?>