<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
		<?php include 'connection.php' ?>
	</head>
	<body>
		<form action="updateData.php" method="post">
			<?php
			$nik=$_GET['nik'];

			$sql="SELECT * FROM siswa WHERE nik='$nik'";
			$result=$conn->query($sql);

			if($result->num_rows>0){
				while ($row=$result->fetch_assoc()) {
					$temp_nik=$row['nik'];
                    $temp_nama=$row['nama'];
                    $temp_alamat=$row['alamat'];
                    $temp_email=$row['email'];
                    $temp_tempatLahir=$row['tempatLahir'];
                    $temp_tanggalLahir=date_create($row['temp_tanggalLahir']);
                    $temp_gender=$row['gender'];
				}
			}
			?>
            nik: <input value="<?php echo $temp_nik ?>" type="text" name="nik"><br>
			Nama: <input value="<?php echo $temp_nama ?>" type="text" name="nama"><br>
            Alamat: <input value="<?php echo $temp_alamat ?>" type="text" name="alamat"><br>
            Email: <input value="<?php echo $temp_email ?>" type="email" name="email"><br>
            Tempat Lahir: <input value="<?php echo $temp_tempatLahir ?>" type="text" name="tempatLahir"><br>
            Tanggal Lahir: <input value="<?php echo $temp_tanggalLahir ?>" type="date" name="tanggalLahir"><br>
            Gender: <input value="<?php echo $temp_gender ?>" type="text" name="gender"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
<br>
<a href="Index.php">Back To Index</a>