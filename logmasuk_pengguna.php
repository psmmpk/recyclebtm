
	<?php	
	include("db/config.php");
	
	$username=$_POST["username"];
	$password=$_POST["password"];
			
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
	
		echo "<h3>Login Anda Salah</h3>";
	}	
	?>
	<!-- popup untuk promp maklumat staff -->
	<div data-role="popup" id="try_ajax" data-dismissible="false" style="max-width:400px;">
		<div data-role="header">
		</div>
		<div role="main" class="ui-content">     
			<div id="ubah">				
			</div>   
			<a href="http://www.ppsppa.gov.my/recycle/logmasuk.php" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Login Semula</a>
			<?php if ($row == 1) { ?><a href="http://www.ppsppa.gov.my/recycle/semakan.php?username=<?php echo $username; ?>&&password=<?php echo $password; ?>" class="ui-btn ui-corner-all ui-shadow" data-ajax="false">Ya, Teruskan</a><?php } ?>
		</div>
	</div>	
