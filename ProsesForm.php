<?php
$nama=$_POST["nama"];

if (empty($nama) || trim($nama) == ""){
	echo "Silahkan Masukkan Nama ";
}
else {
	echo "Selamat Datang Mba ".$nama; 
}
var_dump(trim("bu di"))

?>