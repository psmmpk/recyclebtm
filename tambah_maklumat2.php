<?php
include("db/config.php");
	
	$syk_id = $_GET["syk_id"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$nama = $_POST["nama"];
	$alamat_kutipan = $_POST["alamat_kutipan"];
	$no_tel = $_POST["no_tel"];
	$email = $_POST["email"];
	$j_barang = $_POST["j_barang"];
	
    $insert_login = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
    mysql_query($insert_login);

	$sql = "SELECT * FROM login WHERE username='$username' and password='$password'";
	$result = mysql_query($sql);

	while($row = mysql_fetch_array($result)) 
	{
		$id_pengguna=$row["id_pengguna"];
	}

    $insert = "INSERT INTO permohonan (pmh_sykid, pmh_logid, pmh_nama, pmh_alamat1, pmh_notel, pmh_email , pmh_jenisbrng, pmh_status) VALUES ('$syk_id', '$id_pengguna', '$nama', '$alamat_kutipan','$no_tel', '$email','$j_barang','A')";
    mysql_query($insert);
?>
<p><h3>Maklumat telah berjaya didaftar</h3></p>
<?php


	echo"Nama: $nama<br/>
		No. Telefon: $no_tel<br/>
		email: $email<br/>	
		Alamat: $alamat_kutipan<br/>
		syarikat: $syk_id<br/>
		id_pengguna: $id_pengguna<br/>
		";	
?>
	