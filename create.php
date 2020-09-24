<?php
	include 'connection.php';

	$nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $tempatLahir=$_POST['tempatLahir'];
    $tanggalLahir=date('Y-m-d', strtotime($_POST['tanggalLahir']));
    $gender=$_POST['gender'];

	$sql= "INSERT INTO tableKaryawan VALUES ('$nik','$nama','$alamat','$email','$tempatLahir','$tanggalLahir','$gender')";

	if($conn->query($sql)===TRUE){
		echo("Data telah ditambahakan");
	}else{
		echo("Tidak masuk database");
	}
?>
<br>
<a href="Index.php">Back To Index</a>