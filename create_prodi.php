<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Prodi</title>
</head>

<body>
	<h1>Tambah Data Prodi</h1>
	<a href="prodi.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Kode prodi</label>
		<br>
		<input type="text" name="kode_prodi">
		<br>
		<label>Nama prodi</label>
		<br>
		<input type="text" name="nama_prodi">
		<br><br>
		<button type="submit" name="submit_simpan_prodi">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>