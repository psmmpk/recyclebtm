<?php	
include("db/config.php");
?>	
    <?php 	
		$cari=$_POST["cari"];
		
		$sql="SELECT * FROM syarikat WHERE syk_bandar like '%$cari%' ORDER BY `syk_nama` ASC";
		$result = mysql_query($sql);
		$rowcheckroute = mysql_num_rows($result);
		
		if ($rowcheckroute == 0){
			echo"<li><h3>Data Tidak Dijumpai</h3></li>";
		} else {
			while( $row = mysql_fetch_array($result)) 
			{
				$syk_id=$row["syk_id"];
				$syk_nama=$row["syk_nama"];
				$syk_alamat1=$row["syk_alamat1"];
				$syk_alamat2=$row["syk_alamat2"];
				$syk_poskod=$row["syk_poskod"];
				$syk_bandar=$row["syk_bandar"];
				echo"<li><a href ='http://www.ppsppa.gov.my/recycle/hargabarang.php?syk_id=$syk_id' data-rel='external' data-ajax='false'><h3>$syk_nama</h3><p>$syk_alamat1</p><p>$syk_alamat2</p><p>$syk_poskod</p><p>$syk_bandar</p></a></li>";
			}		
		}
	?>
