<DOCTYPE html>
<html>
<head>
	<title>Faker</title>
</head>
<body>
	<form action="Nilai.php" method=post>
	Masukkan Nilai :
	<input type="text" name="x" />
	<input type="submit" value="submit" />
	</form>
<?php
$x=isset($_POST["x"]) ? $_POST["x"] : '';
if (!empty($x)){
	if ($x>=0 && $x<=30){
		echo "Anda Mendapatkan Nilai : E";
	}
	elseif ($x>=31 && $x<=60){
		echo "Anda Mendapatkan Nilai : D";
	}
	elseif ($x>=61 && $x<=70){
		echo "Anda Mendapatkan Nilai : C";
	}
	elseif ($x>=71 && $x<=80){
		
		echo "Anda Mendapatkan Nilai : B";
	}
	elseif ($x>=81 && $x<=100){
		echo "Anda Mendapatkan Nilai : A";
	}
	else {
		echo "Nilai Yang Anda Masukkan Tidak Valid";
	}
;} else {
	echo "Silahkan Masukkan Angka Antara 1 sampai 100";
}
?>
</body>
</html>