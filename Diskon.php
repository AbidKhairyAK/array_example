<DOCTYPE html>
<html>
<head>
	<title>Diskon</title>
</head>
<body>
<form action="Diskon.php" method="post">
	Masukkan Harga Barang : 
	<input type="text" name="diskon">
	 = 
<?php
$d=isset($_POST["diskon"]) ? $_POST["diskon"] : "";
if (!empty($d)){
	if ($d >= 50000 && $d > 0){
		echo $d - $d * 50 / 100;
	} else {
	echo "Anda Tidak Memenuhi Persyaratan Diskon";
	}
} else {
	echo "Silahkan Masukkan Harga";
}
?>
	<br>
	<input type="submit" value="submit">
</form>
</body>
</html>