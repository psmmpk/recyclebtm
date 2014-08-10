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

<div data-role="page" id="page_lokasi">


<!--panel -->
<div data-role="panel" id="panel1" data-display="overlay">
<h2>Sila Pilih</h2>
</br>
<ul data-role="listview">
  <li><a href="index.php">UTAMA</a></li>
  <li><a href="lokasi.php" >LOKASI</a></li>
  <li><a href="hargasemasa.php">HARGA</a></li>
  <li><a href="logmasuk.php">SEMAKAN</a></li>
</ul>
</div>


<!--header -->
  <div data-role="header" data-position="fixed">
	<h3>LOKASI</h3>
	
  </div>
  
  <!--content -->
  
<div role="main" class="ui-content">
<center>	 
<!-- 	<form>
    	<fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
            <legend></legend>
            <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2a" value="on" checked="checked">
            <label for="radio-choice-h-2a">5KM</label>
            <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2b" value="off">
            <label for="radio-choice-h-2b">10KM</label>
            <input type="radio" name="radio-choice-h-2" id="radio-choice-h-2c" value="other">
            <label for="radio-choice-h-2c">+20KM</label>
	    </fieldset>    
	</form>  --> 
	  <!--content -->
 <div role="main" class="ui-content">
	<div role="main" class="ui-content">
	<h3>Tawaran Harga Semasa</h3>
	
	<div data-role="ui-fieldcontain">
		<label>Jenis Barangan</label>
		<select name="j_barang" id="j_barang"/>			
		<option value="">Sila Pilih</option>
		
		<?php /*----PHP code for select-----*/
		$sql = "SELECT * FROM jenisbarang order by jen_keter ASC";				
		$result = mysql_query($sql);
		while( $row = mysql_fetch_array($result)) {
		?>
		 <option value="<?php echo $row['jen_id'] ?>" ><?php echo $row['jen_keter'] ?></option>
		
		<?php
		}
		?>			
		</select>
	</div>

	<button id="cari_harga" class="ui-btn ui-corner-all ui-shadow">Cari</button>
	
	<h3>Hasil Carian Dibawah:</h3>
	<ul data-role="listview" id="lv1" data-inset="true"></ul>
	
	</div>
  
	<script>
	$( document ).ready(function() {
	  // Pengiraan menggunakan ajax
	  $('#cari_harga').click(function(){
			$.ajax({
			type: 'POST',
			url: 'carian_harga.php',
			data: {j_barang : $("#j_barang").val()},
			success: function(data){
				$('#lv1').html(data);
				$('#lv1').listview( "refresh" );
				//$('#ubah2').show();
				}
			});	
			
			
		//disable button daftar dan kosongkan input
			$('input').not('[type="button"]').val(''); // clear inputs except buttons, setting value to blank
			$('ul').val(''); // clear select
			$('#ul').listview('refresh');
		
		});	
	});

	</script>
  </div>
</center>
</div>
  
  
  <!--footer -->
  <div data-role="footer" data-position="fixed">
  <div data-role="navbar">
  <ul>
  <li><a href="#page_utama" data-icon="home">UTAMA</a></li>
  <li><a href="lokasi.php" data-icon="grid">LOKASI</a></li>
  <li><a href="hargasemasa.php" data-icon="star" class="ui-btn-active ui-state-persist">HARGA</a></li>
  <li><a href="logmasuk.php" data-icon="home">SEMAKAN</a></li>
  </ul>
  
  
  </div>
  </div>
</div>

</body>
</html>

