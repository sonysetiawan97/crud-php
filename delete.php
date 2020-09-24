<?php
	include 'connection.php';

	$nik=$_GET['nik'];

	mysqli_query($conn, "DELETE FROM tableKaryawan WHERE nik='$nik'");

	echo ("NIK $nik Telah Terhapus");
?>
<br>
<a href="Index.php">Back To Index</a>