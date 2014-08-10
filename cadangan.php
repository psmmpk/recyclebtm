<?php
include("db/config.php"); 
?>
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

<div data-role="page" id="page_direktori">


<!--panel -->
<div data-role="panel" id="panel1" data-display="overlay">
<h2>Sila Pilih</h2>
</br>
<ul data-role="listview">
  <li><a href="#page_utama">UTAMA</a></li>
  <li><a href="lokasi.php" >LOKASI</a></li>
  <li><a href="hargasemasa.php">HARGA</a></li>
  <li><a href="logmasuk.php">SEMAKAN</a></li>
</ul>
</div>


<!--header -->
  <div data-role="header" data-position="fixed" data-add-back-btn="true" data-back-btn-text="Utama">
	<a href="#panel1" data-icon="bars" data-iconpos="notext">Menu</a>
	<h3>KOMEN & CADANGAN</h3>
	
  </div>
  
  <!--content -->
  
<div role="main" class="ui-content">
	<center>
		<form action ="insert.php" id="form1" method="post">
             <label for="text-3">Nama:</label>
             <input type="text" data-clear-btn="true" name="nama" id="nama" value="">
              <label for="text-3">Email:</label>
             <input type="text" data-clear-btn="true" name="email" id="email" value="">
              <label for="text-3">No. Telefon:</label>
             <input type="text" data-clear-btn="true" name="notel" id="notel" value="">
             <label for="textarea-1">Komen & Cadangan:</label>
   			 <textarea name="komen" id="komen" rows="8"></textarea>
            
             <input type="button" id="hantar" class="ui-btn ui-btn-inline" value="HANTAR">
        </form>
	</center>
</div>
  
  <script>
		$('#hantar').click(function(){
			
			$.ajax({
			type: 'POST',
			url: 'http://www.ppsppa.gov.my/recycle/insertkomen.php',
			data: $("#form1").serialize(),
			success: function(data){
				$('#ubah').html(data);
				$('#try_ajax').popup('open');
				
				}
			});	
		 });
	</script>	
  
  <!-- popup untuk promp maklumat staff -->
	<div data-role="popup" id="try_ajax" data-dismissible="false" style="max-width:400px;">
		<div data-role="header">
		<h1>Maklumat</h1>
		</div>
		<div role="main" class="ui-content">     
			<div id="ubah">		
			html(data) di sini		
			</div>   
			<a href="index.php" id="kembali" class="ui-btn ui-corner-all ui-shadow">Tutup</a>
			<!--<button id="daftar_staff" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Tutup</button>-->
		</div>
	</div>
    
  <!--footer -->
  <div data-role="footer" data-position="fixed">
  <div data-role="navbar">
  <ul>
  <li><a href="#page_utama" data-icon="home">UTAMA</a></li>
  <li><a href="lokasi.php" data-icon="grid">LOKASI</a></li>
  <li><a href="hargasemasa.php" data-icon="star">HARGA</a></li>
  <li><a href="logmasuk.php" data-icon="home">SEMAKAN</a></li>
  </ul>
  
  
  </div>
  </div>
</div>

</body>
</html>

