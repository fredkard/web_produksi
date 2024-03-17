<?php
$dbhost = 'localhost';
$dbuser = 'udo';
$dbpass = 'udapedi123';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) { die('Could not connect: ' . mysql_error()); }
$sql = 'SELECT * from Produksi';
mysqli_select_db($conn,'Produksi');
$retval = mysqli_query($conn,$sql );
if(! $retval ) { die('Could not get data: ' . mysql_error()); }

$hasil = [];
	while($row = mysqli_fetch_array($retval)){
		$hasil[] = $row["Hasil"];
	}
print_r(json_encode($hasil));

?>

