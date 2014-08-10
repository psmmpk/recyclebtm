<?php
include ('db/config.php');
?>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/jquery.mobile.min.css" rel="stylesheet" type="text/css">

<script src="js/jquery.min.js"></script>
<script src="js/jquery.mobile.min.js"></script>

<link rel="stylesheet" href="css/themes/cuti3.css" />
<link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />

</head>

<body>

<!--Page direktori -->

<div data-role="page" id="page_hargabarang">


<!--panel -->
<div data-role="panel" id="panel1" data-display="overlay">
<h2>Sila Pilih</h2>
</br>
<ul data-role="listview">
  <li><a href="#page_utama">UTAMA</a></li>
  <li><a href="lokasi.php" >LOKASI</a></li>
  <li><a href="hargasemasa.php">HARGA</a></li>
  <li><a href="logmasuk.php" data-icon="home">SEMAKAN</a></li>
</ul>
</div>


<!--header -->
  <div data-role="header" data-position="fixed">
	<h3>HARGA BARANG</h3>
	
  </div>
  
  <!--content -->
  
<div role="main" class="ui-content">
<center>	 
<!-- 	<form>
        
		<input type="search" name="password" id="search" value="" placeholder="Jenis barang..." data-mini="true">
	</form>  --> 
 	 <?php
		$syk_id = $_GET["syk_id"];
		
		$sql="SELECT * FROM syarikat WHERE syk_id = '$syk_id'";
		$result = mysql_query($sql);
		
		while( $row = mysql_fetch_array($result)) 
		{
			$syk_nama=$row["syk_nama"];
			$syk_alamat1=$row["syk_alamat1"];
			$syk_alamat2=$row["syk_alamat2"];
			$syk_poskod=$row["syk_poskod"];
			$syk_bandar=$row["syk_bandar"];
		}
		echo "<h3>$syk_nama</h3><p>$syk_alamat1</p><p>$syk_alamat2</p><p>$syk_poskod</p><p>$syk_bandar</p>";
		?>   
    <table id="table-custom-2" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive" >
     <thead>
       <tr bgcolor="#99FF00" align="center">
         <td>Bil</td>
         <td>Barangan</td>
         <td >Harga</td>
		 <td >Tarikh</td>
       </tr>
     </thead>
	 <tbody>
<?php
		$bil=0;
		$sql2="SELECT * FROM harga a, jenisbarang b WHERE a.hrg_brgid=b.jen_id AND a.hrg_sykid='$syk_id' AND a.hrg_status='A'";
		$result2 = mysql_query($sql2);
		
		while($row2 = mysql_fetch_array($result2)) 
		{
			$bil++;
			$jen_id = $row2["jen_id"];
			$jen_keter = $row2["jen_keter"];
			$jen_ukur = $row2["jen_ukur"];		
			$hrg_id = $row2["hrg_id"];
			$hrg_harga = $row2["hrg_harga"];		
			$hrg_datesah = $row2["hrg_datesah"];	
				?>
			
				   <tr>
					 <td><center><? echo $bil; ?></center></td>
					 <td><? echo $jen_keter; ?></td>
					 <td><center>RM <? echo $hrg_harga; ?> /<? echo $jen_ukur;?></center></td>
					 <td><center><? echo $hrg_datesah; ?></center></td>
				   </tr>
				<?
				
		}	
		?>
     </tbody>
	 
   </table>
   
   <form id="form2">
		<div data-role="fieldcontain">
		<input type="hidden" id="syk_id" value="<? echo $syk_id; ?>">
	   </div>
   </form>
   
 <?php echo" <a href ='http://www.ppsppa.gov.my/recycle/login.php?syk_id=$syk_id' data-rel='external' data-ajax='false' style='text-decoration: none'><input type='button' id='mohon' value='Mohon'></a>"; ?>
 <?php echo"  <a href ='http://www.ppsppa.gov.my/recycle/lokasi.php' data-rel='external' data-ajax='false' style='text-decoration: none'><input type='button' id='kembali' value='Kembali'></a>"; ?>


</center>
</div>
 
  
  <!--footer -->
  <div data-role="footer" data-position="fixed">
  <div data-role="navbar">
  <ul>
  <li><a href="#page_utama" data-icon="home">UTAMA</a></li>
  <li><a href="lokasi.php" data-icon="grid" class="ui-btn-active ui-state-persist">LOKASI</a></li>
  <li><a href="hargasemasa.php" data-icon="star">HARGA</a></li>
  <li><a href="logmasuk.php" data-icon="home">SEMAKAN</a></li>
  </ul>
  
  
  </div>
  </div>
</div>

</body>
</html>

