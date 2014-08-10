<?php include("db/config.php");?>
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
<!--Page 1 -->
<div data-role="page" id="page1">
	<!--header -->
  <div data-role="header" data-position="fixed">
	<h3>Kemasukan Maklumat</h3>
  </div>
  
  <!--content -->
  <div role="main" class="ui-content">
	
	<p>
	<?php
		$syk_id=$_GET["syk_id"];
		$username = $_GET['username'];	
		$password = $_GET["password"];
		
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
	<h3>Kemasukan Maklumat Jualan</h3>
	</p>
	<form id="form1">
<!-- 		<div data-role="fieldcontain">
			  <label>Nama Pengguna</label>
			<input type="text" name="username" id="username" value="<?php echo $username; ?>"/>
		</div>	
		<div data-role="fieldcontain">
			  <label>Katalaluan</label>
			<input type="password" name="password" id="password" value=""/>
		</div>	 -->	
		<div data-role="fieldcontain">
			  <label>Nama</label>
			<input type="text" name="nama" id="nama" value=""/>
		</div>
		
		<div data-role="fieldcontain">
			<label>No Telefon</label>
			<input type="text" name="no_tel" id="no_tel" value=""/>
		</div>

		<div data-role="fieldcontain">
			<label>Email</label>
			<input type="text" name="email" id="email" value=""/>
		</div>
				
		<div data-role="fieldcontain">
			<label>Alamat Kutipan</label>
			<textarea name="alamat_kutipan" id="alamat_kutipan" value=""></textarea>
		</div>
		
		<div data-role="fieldcontain">
			<label>Jenis Barangan</label>
			<input type="text" name="j_barang" id="j_barang" value=""/>
		</div>
	</form>
	<input type="button" id="hantar" value="Hantar">
	<input type="hidden" id="syk_id" value="<? echo $syk_id; ?>">
	

	<script>
	$( document ).ready(function() {
	  //Popup pengesahan
	  /*$('#hantar').click(function(){
			nama=$('#nama').val();
			if (nama == ""){
				alert ("Masukkan Nama");
				return false;
			}
			//alamat=$('#alamat').val();
			//negeri=$('#id_negeri').val();
			papar='Pinda '+nama+' dalam database.<br />';
			//papar+='Nama : '+nama+'<br />No KP : '+no_kp;
			$('#ubah').html(papar);
			$('#try_ajax').popup('open');
			$('#daftar_staff').prop('disabled', false);
	  });*/
	  
	  // Pengiraan menggunakan ajax
	  $('#hantar').click(function(){	
	  		nama=$('#nama').val();
			no_tel=$('#no_tel').val();
			alamat_kutipan=$('#alamat_kutipan').val();
			email=$('#email').val();
			j_barang=$('#j_barang').val();
			
			if (nama == "" || no_tel == "" ||  alamat_kutipan == "" ||  email == "" || j_barang == ""){
				$('#error_ajax').popup('open');
			} else {
				$.ajax({
				type: 'POST',
				url: 'http://www.ppsppa.gov.my/recycle/tambah_maklumat.php',
				data: $("#form1").serialize(),
				success: function(data){
					$('#ubah').html(data);
					$('#try_ajax').popup('open');
					}
				});	
				//disable button daftar dan kosongkan input
				//$('input').not('[type="button"]').val(''); // clear inputs except buttons, setting value to blank
				//$('select').val(''); // clear select
				//$('textarea').val(''); // set text area value to blank
				$('#daftar_staff').prop('disabled', true);
				//$('#try_ajax').popup('open');
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
			<a href="index.php" id="kembali" class="ui-btn ui-corner-all ui-shadow" data-rel="back">Kembali</a>
			<!-- <button id="daftar_staff" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Daftar Staff</button> -->
		</div>
	</div>
	
	<!-- popup untuk promp maklumat staff -->
	<div data-role="popup" id="error_ajax" data-dismissible="false" style="max-width:400px;">
		<div data-role="header">
		<h1>Maklumat</h1>
		</div>
		<div role="main" class="ui-content">     
			<div id="ubah">		
				Maklumat Tidak Lengkap	
			</div>   
			<a href="#" id="kembali" class="ui-btn ui-corner-all ui-shadow" data-rel="back">Kembali</a>
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
		  <li><a href="senaraibarang.php" data-icon="home">BARANG</a></li>
		  </ul>
	</div>	  
	</div>
</div>
</body>
</html>
