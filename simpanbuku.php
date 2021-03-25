<?php include 'koneksibuku.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simpan Data Buku Tamu</title>
</head>
<body>
	<?php 

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat']; 
	$kota = $_POST['kota'];

	$query = mysqli_query($db, "INSERT INTO buku values('', '$nama','$email','$alamat','$kota')") or die (mysqli_error($koneksi,$query));

	if ($query) {
		echo "<font color=blue size=5>Buku Tamu Berhasil Diisi Silahkan Di Cek Kembali</font>";

	}

	 ?>

	<br>
	<a href="tampilanbuku.php"><h3>Melihat Isi Dari Daftar Buku Tamu</h3></a>	 
</body>
</html>
