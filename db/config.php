<?php

$link = mysql_connect('www.sisa.my:3306', 'root', '');
//$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('3r4life', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
//semak session id

/*session_start();
$sesi = $_SESSION['sessionid'];
$username = $_SESSION['username'];
$password = $_SESSION['password'];

$q = "select * from pengguna where username='$username' and password='$password'";
$r = mysql_query($q);
$row = mysql_num_rows($r);

if($row==0){
session_start();
$_SESSION=array();
session_destroy();
header("Location: login.php"); 
}
*/
?> 
