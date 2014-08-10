<?php	
include("db/config.php");
?>
	<table data-role="table" id="table-custom-2" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-btn-text="Pilihan Paparan Maklumat" data-column-popup-theme="a">
     <thead>
       <tr>
         <th data-priority="2">Bil</th>
         <th>Syarikat</th>
         <th data-priority="3">Harga</th>
       </tr>
     </thead>
     <tbody>
	 <?
	 $bil=0;
$j_barang = $_POST["j_barang"];

$sql="SELECT * FROM harga WHERE hrg_brgid = '$j_barang' and hrg_status = 'A' ORDER BY `hrg_harga` ASC";
$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) 
{
	$bil++;
	$hrg_id = $row["hrg_id"];
	$hrg_sykid = $row["hrg_sykid"];
	$hrg_brgid = $row["hrg_brgid"];
	$hrg_harga = $row["hrg_harga"];
	$hrg_datesah = $row["hrg_datesah"];
	
	$sql1="SELECT * FROM syarikat WHERE syk_id = '$hrg_sykid'";
	$result1 = mysql_query($sql1);

	while($row1 = mysql_fetch_array($result1)){
		$syk_nama = $row1["syk_nama"];
		$syk_bandar = $row1["syk_bandar"];
	}
	
	?>

       <tr align="center">
         <th><? echo $bil; ?></th>
         <td><? echo $syk_nama; ?><br><? echo $syk_bandar; ?></br></td>
         <td><? echo $hrg_harga; ?></td>
       </tr>

	<?
	
	//echo"<li><h3>$syk_nama</h3><p>$hrg_harga</p><p>$hrg_datesah</p></a></li>";
}		
?>
       
     </tbody>
   </table>
