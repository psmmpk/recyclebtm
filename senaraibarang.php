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

<div data-role="page" id="page_barang">


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
  <div data-role="header" data-position="fixed">
	<h3>BARANGAN</h3>
	
  </div>
  
  <!--content -->
  
<div role="main" class="ui-content">
<center>	 
	<form>
        
		<input type="search" name="password" id="search" value="" placeholder="Jenis barang..." data-mini="true">
	</form>  
    
    <table data-role="table" id="table-custom-2" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-btn-text="Pilihan Paparan Maklumat" data-column-popup-theme="a">
     <thead>
       <tr>
         <th data-priority="2">Bil</th>
         <th>Barangan</th>
         <th data-priority="5">Detail</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <th>1</th>
         <td><a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external">Kotak</a></td>
         <td><a href="#">Klik</a></td>
       </tr>
       <tr>
         <th>2</th>
         <td><a href="http://en.wikipedia.org/wiki/Casablanca_(film)" data-rel="external">Surat Khabar</a></td>
         <td><a href="#">Klik</a></td>
       </tr>
       <tr>
         <th>3</th>
         <td><a href="http://en.wikipedia.org/wiki/The_Godfather" data-rel="external">Plastik Mineral</a></td>
         <td><a href="#">Klik</a></td>
       </tr>
              <tr>
         <th>4</th>
         <td><a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external">Tin Aliminium</a></td>
         <td><a href="#">Klik</a></td>
       </tr>

       <tr>
         <th>5</th>
         <td><a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external">Besi Premium</a></td>
         <td><a href="#">Klik</a></td>
       </tr>

       <tr>
         <th>6</th>
         <td><a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external">Beg Plastik</a></td>
         <td><a href="#">Klik</a></td>
       </tr>

       <tr>
         <th>7</th>
         <td><a href="http://en.wikipedia.org/wiki/Citizen_Kane" data-rel="external">Kertas Berwarna</a></td>
         <td><a href="#">Klik</a></td>
       </tr>


     </tbody>
   </table>
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

