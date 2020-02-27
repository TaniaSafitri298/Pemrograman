<?php
$user="root";
$server="localhost";
$password="";
$database= "db_ujian" ;

$input=mysql_connect($server,$user,$password);
if($input) {
	echo'ok';
}else{
	echo 'cek lagi';
}
$db=mysql_select_db($database);
if(db){
	echo 'database berhasil';
}else {
	echo 'cek lagi';
}

?> 
