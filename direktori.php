<?php
include ('config.php');
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
	<h3>DIREKTORI</h3>
	
  </div>
  
  <!--content -->
  
	<div role="main" class="ui-content">
	<center>
</br>
<ul data-role="listview" data-filter="true" data-filter-placeholder="Taipkan Nama"><!-- class="ui-listview-outer" data-inset="true">-->
  <li data-role="collapsible" data-iconpos="right" data-shadow="false" data-corners="false">
    <h2>Ibu Pejabat PPSPPA</h2>
    <ul data-role="listview" data-shadow="false" data-inset="true" data-corners="false">
      <li>
     	<a href="#popdatuk" data-rel="popup" data-transition="slideup">
        <h2>Talian Bebas Tol</h2>
		</a>
        <div data-role="popup" id="popdatuk">
            <a href="tel:1800887472" class="ui-btn ui-icon-phone ui-btn-icon-notext ui-corner-all ui-btn-inline">Telefon</a>
        </div>
       </li>
     </ul>
     <ul data-role="listview" data-shadow="false" data-inset="true" data-corners="false">
       <li>
        <a href="#poppegkhas" data-rel="popup" data-transition="slidefade">
        <h2>Call Centre</h2>
        </a>
        <div data-role="popup" id="poppegkhas">
            <a href="tel:+60322459292" class="ui-btn ui-icon-phone ui-btn-icon-notext ui-corner-all ui-btn-inline">Telefon</a>
            <a href="mailto:swcorp@sisa.my" class="ui-btn ui-icon-mail ui-btn-icon-notext ui-corner-all ui-btn-inline">Email</a>  
        </div>
      </li>
    </ul>
  </li>
  
  <li data-role="collapsible" data-iconpos="right" data-shadow="false" data-corners="false">
    <h2>Teknikal</h2>
     <ul data-role="listview" data-shadow="false" data-inset="true" data-corners="false">
       <li>
        <a href="#poppegkhas" data-rel="popup" data-transition="slidefade">
        <h2>Pengarah BTM</h2>
        <p>Aznul Nizam Bin Nasir</p></a>
        <div data-role="popup" id="poppegkhas">
            <a href="tel:+6092806262" class="ui-btn ui-icon-phone ui-btn-icon-notext ui-corner-all ui-btn-inline">Telefon</a>
            <a href="sms://+6092806262" class="ui-btn ui-icon-comment ui-btn-icon-notext ui-corner-all ui-btn-inline">SMS</a>
            <a href="mailto:aznul@swcorp.my" class="ui-btn ui-icon-mail ui-btn-icon-notext ui-corner-all ui-btn-inline">Email</a>  
        </div>
      </li>
    </ul>
  </li>
  
</ul>

</center>
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

