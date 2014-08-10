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

<div data-role="page" id="page_semakan">


<!--panel -->
<div data-role="panel" id="panel1" data-display="overlay">
<h2>Sila Pilih</h2>
</br>
<ul data-role="listview">
  <li><a href="#page_utama">UTAMA</a></li>
  <li><a href="lokasi.php" >LOKASI</a></li>
  <li><a href="hargasemasa.php">HARGA</a></li>
  <li><a href="logmasuk.php" data-icon="home">LOGMASUK</a></li>
</ul>
</div>


<!--header -->
  <div data-role="header" data-position="fixed">
	<h3>SEMAKAN</h3>
	
  </div>
  
  <!--content -->
  
<div role="main" class="ui-content">
<h3>Status Permohonan </h3>
<center>	 

 	 <?php
		$username = $_GET['username'];	
		$password = $_GET["password"];

		$sql1 = "SELECT * FROM login WHERE username='$username' and password='$password'";
		$result1 = mysql_query($sql1);
		
		while($row1 = mysql_fetch_array($result1)) 
		{
			$id_pengguna = $row1["id_pengguna"];
		}

		?>   
    <table id="table-custom-2" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive" >
     <thead>
       <tr bgcolor="#99FF00" align="center">
         <td>Bil</td>
		 <td>Syarikat</td>
         <td>Alamat</td>
         <td >Jenis barang</td>
		 <td >Tarikh Mohon</td>
		 <td >Status</td>
       </tr>
     </thead>
	 <tbody>
	<?php
		$bil=0;
		$sql2="SELECT * FROM permohonan where pmh_logid = '$id_pengguna' order by pmh_datemhn";
		$result2 = mysql_query($sql2);
		
		while($row2 = mysql_fetch_array($result2)) 
		{
			$bil++;
			$pmh_sykid = $row2["pmh_sykid"];
			$pmh_alamat1 = $row2["pmh_alamat1"];
			$pmh_jenisbrng = $row2["pmh_jenisbrng"];		
			$pmh_datemhn = $row2["pmh_datemhn"];
			$pmh_status = $row2["pmh_status"];	
			
			$sql="SELECT * FROM syarikat WHERE syk_id = '$pmh_sykid'";
			$result = mysql_query($sql);
			
			while( $row = mysql_fetch_array($result)) 
			{
				$syk_nama=$row["syk_nama"];
			}
				?>
			
				   <tr>
					 <td><center><? echo $bil; ?></center></td>
					 <td><center><? echo $syk_nama; ?></td>
					 <td><center><? echo $pmh_alamat1; ?> </center></td>
					 <td><center><? echo $pmh_jenisbrng; ?></center></td>
					 <td><center><? echo $pmh_datemhn; ?></center></td>
					 <td><center><? echo $pmh_status; ?></center></td>
				   </tr>
				<?
				
		}	
		?>
     </tbody>
	 
   </table>
   
   <form id="form2">
		<div data-role="fieldcontain">
		<input type="hidden" id="id_pengguna" value="<? echo $id_pengguna; ?>">
	   </div>
   </form>
   
</center>
</div>
 
  
  <!--footer -->
  <div data-role="footer" data-position="fixed">
  <div data-role="navbar">
  <ul>
  <li><a href="#page_utama" data-icon="home">UTAMA</a></li>
  <li><a href="lokasi.php" data-icon="grid">LOKASI</a></li>
  <li><a href="hargasemasa.php" data-icon="star">HARGA</a></li>
  <li><a href="logmasuk.php" data-icon="home" class="ui-btn-active ui-state-persist">SEMAKAN</a></li>
  </ul>
  
  
  </div>
  </div>
</div>

</body>
</html>

