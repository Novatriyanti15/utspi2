<!doctype html>
<html lang="en">
<head>
	<title>Tambah Dosen</title>
</head>

<body>
	<h1>Tambah Dosen</h1>
	<a href="dosen.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Kode dosen</label>
		<br>
		<input type="text" name="kode_dosen">
		<br>
		<label>Nids</label>
		<br>
		<input type="text" name="nids"><br>
		<br>
		<label>Nipy</label>
		<br>
		<input type="text" name="nipy"><br>
		<br>
		<label>Nama dosen</label>
		<br>
		<input type="text" name="nama_dosen"><br>
		<br>
		<label>Kode prodi</label>
		<br>
		<input type="text" name="kode_prodi"><br>
		<br><br>
		<button type="submit" name="submit_simpan_dosen">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html> 