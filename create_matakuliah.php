<!doctype html>
<html lang="en">
<head>
	<title>Tambah Matakuliah</title>
</head>

<body>
	<h1>Tambah Matakuliah</h1>
	<a href="matakuliah.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>kode MK</label>
		<br>
		<input type="text" name="kode_mk">
		<br>
		<label>Nama Matakuliah</label>
		<br>
		<input type="text" name="nama_mk">
		<br>
		<label>sks</label>
		<br>
		<input type="int" name="sks">
		<br>
		<label>smt</label>
		<br>
		<input type="int" name="smt">
		<br>
		<label>kode prodi</label>
		<br>
		<input type="text" name="kode_prodi">
		<br><br>
		<button type="submit" name="submit_simpan_absen">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html> 