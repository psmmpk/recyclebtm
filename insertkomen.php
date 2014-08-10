<?php
include("db/config.php");

	$nama=$_POST["nama"];
	$email=$_POST["email"];
	$notel=$_POST["notel"];
	$komen=$_POST["komen"];


// Connection to DB Server

     mysql_query("INSERT INTO cadangan (cdg_nama,cdg_email,cdg_notel,cdg_komen) VALUES ('$nama','$email','$notel','$komen')");
?>
<p>Terima kasih diatas komen dan cadangan anda.</p>
<?php

	//$sql_nama_negeri = "select negeri from negeri where id_negeri = '$negeri'";	
	//$result = mysql_query($sql_nama_negeri);
   // $row = mysql_fetch_array($result); 
	//$nama_negeri = $row["negeri"];
	echo"Nama: $nama<br/>
		Email: $email<br/>
		No.Tel: $notel<br/>
		Komen: $komen<br/>
		";
		
?>