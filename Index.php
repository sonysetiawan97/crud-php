<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
		<?php include 'connection.php' ?>
	</head>
	<body>
		<form action="create.php" method="post">
			nik: <input required type="text" name="nik"><br>
			Nama: <input required type="text" name="nama"><br>
            Alamat: <input required type="text" name="alamat"><br>
            Email: <input required type="email" name="email"><br>
            Tempat Lahir: <input required type="text" name="tempatLahir"><br>
            Tanggal Lahir: <input required type="date" name="tanggalLahir"><br>
            <label>Gender</label>
            <select required name="gender">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select><br>
			<input type="submit" value="Submit">
		</form>
		<table>
			<tr>
				<td>NIK</td>
				<td>Nama</td>
				<td>Alamat</td>
                <td>Email</td>
				<td>Tempat Lahir</td>
				<td>Tanggal Lahir</td>
                <td>Gender</td>
				<td>Action</td>
			</tr>
			<?php
				$sql="SELECT * FROM tablekaryawan";
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
			?>
			<tr>
				<td><?php echo $temp_nik ?></td>
                <td><?php echo $temp_nama ?></td>
                <td><?php echo $temp_alamat ?></td>
                <td><?php echo $temp_email ?></td>
                <td><?php echo $temp_tempatLahir ?></td>
                <td><?php echo date_format($temp_tanggalLahir, "l,d F Y") ?></td>
                <td><?php echo $temp_gender ?></td>
				<td><a href="update.php?nik=<?php echo $temp_nik?>">Update</a></td>
				<td><a href="delete.php?nik=<?php echo $temp_nik?>">Delete</a></td>
			</tr>
			<?php
					}
				}
			?>
		</table>
	</body>
</html>