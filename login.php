<?php
include ('db/config.php');
$syk_id=$_GET["syk_id"];

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
	<h3>LOG MASUK</h3>
	</div>
  
  <!--content -->
  
	<div role="main" class="ui-content">
	<center>	 
	
	 <div role="main" class="ui-content">
			
			
		<div role="main" class="ui-content">
	
		<label>Nama Pengguna :</label>
		<input type="text" name="username" id="username"  placeholder="Sila masukkan username anda" autofocus/>
		
		<label>Kata Laluan :</label>
		<input type="password" name="password" id="password"  />	
		<input type="hidden" id="syk_id" value="<? echo $syk_id; ?>">
		<button id="log_masuk" class="ui-btn ui-corner-all ui-shadow">Log Masuk</button>
		
		<a href="http://www.ppsppa.gov.my/recycle/daftar_maklumat2.php?syk_id=<?php echo $syk_id; ?>">Bagi Pengguna Baru Sila Klik Disini</a>	
		
		<ul data-role="listview" id="lv1" data-inset="true"></ul>
		
		</div>
		
		
	  
		<script>
		$( document ).ready(function() {
		  // Pengiraan menggunakan ajax
		  $('#log_masuk').click(function(){
				username=$('#username').val();
				password=$('#password').val();
				
				if (username == "" || password == "" ){
					$('#error_ajax').popup('open');
				} else {	
					$.ajax({
					type: 'POST',
					url: 'http://www.ppsppa.gov.my/recycle/login_pengguna.php',
					data: {
					username : $("#username").val(), 
					password : $("#password").val(),
					syk_id : $("#syk_id").val()},
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
				}
			});	
		});
	
		</script>
	  </div>
	</center>
	</div>
	
	<!-- popup untuk promp maklumat staff -->
	<div data-role="popup" id="error_ajax" data-dismissible="false" style="max-width:400px;">
		<div data-role="header">
		<h1>Maklumat</h1>
		</div>
		<div role="main" class="ui-content" align="center">     
				Sila Masukkan Nama Pengguna dan Katalaluan Anda
			<a href="login.php" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Login Semula</a>
			<!-- <button id="daftar_staff" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Daftar Staff</button> -->
		</div>
	</div>	
  
  
  <!--footer -->
  <div data-role="footer" data-position="fixed">
	  <div data-role="navbar">
	  <ul>
	  <li><a href="index.php" data-icon="home">UTAMA</a></li>
	  <li><a href="lokasi.php" data-icon="grid" class="ui-btn-active ui-state-persist">LOKASI</a></li>
	  <li><a href="hargasemasa.php" data-icon="star">HARGA</a></li>
	  <li><a href="logmasuk.php" data-icon="home">SEMAKAN</a></li>
	  </ul>
	  </div>
  </div>
</div>

</body>
</html>

