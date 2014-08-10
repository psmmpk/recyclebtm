
	<?php	
	include("db/config.php");
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$syk_id=$_POST["syk_id"];
			
	$q = "SELECT * FROM login WHERE username='$username' and password='$password'";
	$r = mysql_query($q);
	$row = mysql_num_rows($r);
			
		
	if($row==1){
		session_start();
		$_SESSION['sessionid']=session_id();
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		
		echo "<h3 align='center'>Login Berjaya</h3>";
	}
	else {
		session_start();
		$_SESSION=array();
		session_destroy();
	
		echo "<h3>Adakah Anda Pengguna kali Pertama?</h3>";
	}	
	?>
	<input type="hidden" id="syk_id" value="<? echo $syk_id; ?>">
	<!-- popup untuk promp maklumat staff -->
	<div data-role="popup" id="try_ajax" data-dismissible="false" style="max-width:400px;">
		<div data-role="header">
		</div>
		<div role="main" class="ui-content">     
			<div id="ubah">				
			</div>   
			<a href="http://www.ppsppa.gov.my/recycle/login.php?syk_id=<?php echo $syk_id; ?>" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Login Semula</a>
			<?php if ($row == 1) { ?><a href="http://www.ppsppa.gov.my/recycle/daftar_maklumat1.php?syk_id=<?php echo $syk_id; ?>&&username=<?php echo $username; ?>&&password=<?php echo $password; ?>" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Ya, Teruskan</a><?php } ?>
		</div>
	</div>	
