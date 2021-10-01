<?php 
$nama ="Muhamad Agung Nurrasyid";
$kelas ="MI20 B";
$alamat ="Sukaratu, Tasikmalaya";
$no ="081572100045";
$bio = array(
	'nm' => "Muhamad Agung Nurrasyid",
	'kls' => "MI20 B",
	'alm' => "Sukaratu, Tasikmalaya",
	'no' => "081572100045"
);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 1 - M Agung N</title>
</head>
<body>
	<?php
	// MyBio
	echo "MY BIODATA";
	echo "<br>";
    echo "<br>";
	echo "Nama      : ".$nama;
	echo "<br>";
	echo "Kelas     : ".$kelas;
    echo "<br>";
	echo "Alamat    : ".$alamat;
    echo "<br>";
	echo "No. HP    : ".$no;
	echo "<br>";
	echo "<br>";

	//myarray
	echo "Nama : " .$bio['nm'];
	echo "<br>";
	echo "Kelas : " .$bio['kls'];
	echo "<br>";
	echo "Alamat : " .$bio['alm'];
	echo "<br>";
	echo "No. HP : " .$bio['no'];
	?>
</body>
</html>
