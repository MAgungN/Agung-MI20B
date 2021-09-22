<?php 
    $kota = "Tasikmalaya";
    $nomor = "202002079";
    $barang = array('kulkas', 'TV', 'Buku', 'Radio', 'Laptop');

?>
<!DOCTYPE html>
<html>
<head>
    <title>SURAT PEMINJAMAN</title>
</head>
<body>
    <?php
        // Surat Peminjaman
        echo "<center>SURAT PINJAMAN</center>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo $kota;
        echo date(', d-M-Y');
        echo "<br>";
        echo "<br>";
        echo "Nomor : ".$nomor;
        echo "<br>";
        echo "Perihal : Peminjaman ";
        echo "<br>";
        echo "Kepada : PT. INYEUM";

        // Array
        echo "<br>";
        echo "<br>";
        echo "Yth Bapak/Ibu/Saudara";
        echo "<br>";
        echo "PT. INYEUM";
        echo "<br>";
        echo "<br>";
        echo "Saya ucapkan terimakasih kepada bapak atau ibu yang sudah memberikan waktunya untuk membaca sebuah surat yang saya tulis.";
        echo "<br>";
        echo "Pada hari kemarin saya telah meminjam beberapa barang dari PT. INYEUM saya meminjam tanpa memberikan izin resmi terlebih dahulu.";
        echo "<br>";
        echo "Saya mengucapkan mohon maaf atas perlakuan saya yang tidak menyenangkan ini.";
		echo "<br>";
        echo "Saya meminjam beberapa barang di tempat anda berikut beberapa barang yang saya pinjam :";
        echo "<br>";
        echo "<br>";

        $a = 1;
        for($x=0;$x<count($barang);$x++){
        
        echo $a." ".$barang[$x]."<br/>";
        $a++;
        }

        echo "<br>";
        echo "Saya ucapkan terimakasih, semoga kita selalu sehat selalu dan dilindungi oleh Allah SWT.";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo $kota;
        echo date(', d-M-Y');
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Muhamad Agung Nurrasyid"
    ?>
</body>
</html>
