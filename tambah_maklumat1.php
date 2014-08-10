<?php
include("db/config.php");
	
	$syk_id = $_POST["syk_id"];
	$id_pengguna = $_GET["id_pengguna"];
	$nama = $_POST["nama"];
	$alamat_kutipan = $_POST["alamat_kutipan"];
	$no_tel = $_POST["no_tel"];
	$email = $_POST["email"];
	$j_barang = $_POST["j_barang"];

// Connection to DB Server

    $insert = "INSERT INTO permohonan (pmh_sykid, pmh_logid, pmh_nama, pmh_alamat1, pmh_notel, pmh_email , pmh_jenisbrng, pmh_status) VALUES ('$syk_id', '$id_pengguna', '$nama', '$alamat_kutipan','$no_tel', '$email','$j_barang','A')";
    mysql_query($insert);
?>
<p><h3>Maklumat telah berjaya didaftar</h3></p>
<?php

	/*$sql_nama_negeri = "select negeri from negeri where neg_negri = '$negeri'";	
	$result = mysql_query($sql_nama_negeri);
    $row = mysql_fetch_array($result); 
	$nama_negeri = $row["negeri"];*/

	echo"Nama: $nama<br/>
		No. Telefon: $no_tel<br/>
		email: $email<br/>	
		Alamat: $alamat_kutipan<br/>
		syarikat: $syk_id<br/>
		id_pengguna: $id_pengguna<br/>
		";	
?>
	