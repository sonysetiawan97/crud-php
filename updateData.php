<?php
	include 'connection.php';

	$nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $tempatLahir=$_POST['tempatLahir'];
    $tanggalLahir=date('Y-m-d', strtotime($_POST['tanggalLahir']));
    $gender=$_POST['gender'];

	$sql= "UPDATE tableKaryawan SET nama='$nama', alamat='$alamat', email='$email', tempatLahir='$tempatLahir', tanggalLahir='$tanggalLahir', gender='$gender', WHERE nik='$nik'";

	if($conn->query($sql)===TRUE){
		echo("Data telah diubah");
	}else{
		echo("Tidak masuk database");
	}
?>
<br>
<a href="Index.php">Back To Index</a>