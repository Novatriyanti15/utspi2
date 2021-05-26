<!doctype html>
<html lang="en">
<head>
	<title>Tambah Absensi</title>
</head>

<body>
	<h1>Tambah Absensi</h1>
	<a href="absensi.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Id absen</label>
		<br>
		<input type="int" name="id_absen">
		<br>
		<label>Tgl absen</label>
		<br>
		<input type="date" name="tgl_absen">
		<br>
		<label>Masuk</label>
		<br>
		<input type="time" name="masuk">
		<br>
		<label>keluar</label>
		<br>
		<input type="time" name="keluar">
		<br>
		<label>kode dosen</label>
		<br>
		<input type="text" name="kode_dosen">
		<br>
		<label>Sesi</label>
		<br>
		<input type="char" name="sesi">
		<br>
		<label>Kelas sesi</label>
		<br>
		<input type="text" name="kelas_sesi">
		<br>
		<br><br>
		<button type="submit" name="submit_simpan_absen">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html> 