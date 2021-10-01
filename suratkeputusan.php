<?php 
//error_reporting(0);
$con = new mysqli("localhost", "root", "", "db_surat_agung");

$tgl = date('d F Y');
$kota = 'Tasikmalaya';
$barang = array('Komputer','Projector','Router','Wi-Fi');
$ttd = 'Muhamad Agung Nurrasyid';
$instansi = array('LP3I','Kota Tasikmalaya','082-345-455');
?>

<!DOCTYPE html>
<html>
<head>
	<title> Surat</title>
	<style>
        .container {
            border: 1px solid #000;
            width: 50%;
        }
        .margin {
            margin: 10px 10px 10px 10px;
        }
         .padding{
         	padding: 0px 5px 0px 5px;
         }
        }
    </style>
</head>
<body>
	<?php
    
    $sql = "SELECT * FROM tbl_surat where id='2'";
    //$query = mysqli_query($con, 'SELECT * FROM tbl_surat');
    $result = $con->query($sql);
    
    $isi = $result->fetch_assoc();
    //$isi2 = mysqli_fetch_array($query);
    
    echo $isi["jenis_surat"];

    if($isi[jenis_surat]="1"){
        $js = "Surat Keputusan";
    }
    else if($isi[jenis_surat]="2"){
        $js = "Surat Pernyataan";
    }

			echo "<div class='container'>";
			echo "<div class='margin'>";
			echo "<div class='padding'>";

			echo "<h2><center>.$js.</h2><br><hr>";

			echo "</b><br><br>Nomor : ".$isi["no_surat"];
			echo "<br>";
			echo " Perihal : Hal ".$js;
			echo "<br>";
			echo " Kepada : <br>";
			echo "<p style='text-align: justify; text-indent: 0.5in;'>";
			echo $instansi[0];
			echo "<br>";
			echo "<p style='text-align: justify; text-indent: 0.5in;'>";
			echo $instansi[1]." (".$instansi[2].")";

			echo "<br>"; echo "<br>";
			echo "<p style='text-align: justify; text-indent: 0.5in;'>";
			echo "Dengan surat ini Kami beritahu bahwa ada beberapa barang yang ingin kami pinjam. Semoga dengan ditulisnya surat ini Bapak/Ibu dapat memberikan beberapa barang yang Kami butuhkan untuk menunjang kegiatan yang akan dilakukan.<br>";

			echo "<br>";

				$n=1;
				echo "Berikut ini daftar barang yang akan kami pinjam :<br>";
				for($x=0;$x<count($barang);$x++){

				echo $n.". ".$barang[$x]."<br/>";
				$n++;
				}

            echo "<br>";
            echo "Sekian surat ini Kami sampaikan. Kami ucapkan terimakasih, semoga kita selalu sehat selalu dan dilindungi oleh Allah SWT.";
            echo "<br>";
            echo "<br>";
            echo "<br>";
			echo "<br>";
			echo "<br>";
			echo "<p style='text-align: justify; text-indent: 4.5in;'>";
			echo "$tgl,";
			echo "<br><br><br>";
			echo "<p style='text-align: justify; text-indent: 4.5in;'>";
			echo "<u>$ttd</u>";
			echo "</div></div></div>";

			//Muhamad Agung Nurrasyid

	?>

</body>
</html>
