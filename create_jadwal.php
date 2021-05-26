<!doctype html>
<html lang="en">
<head>
	<title>Tambah Jadwal</title>
</head>

<body>
	<h1>Tambah Jadwal</h1>
	<a href="absensi.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Id</label>
		<br>
		<input type="int" name="id">
		<br>
		<label>Id Jadwal</label>
		<br>
		<input type="int" name="id_jadwal"><br>
		<label>Kode Dosen</label>
		<br>
		<input type="text" name="kode_dosen">
		<br>
		<label>Hari</label>
		<br>
		<input type="text" name="hari">
		<br>
		<label>Thn Akademik</label>
		<br>
		<input type="text" name="thn_akademik">
        <br>
        <label>Semester</label>
		<br>
		<input type="text" name="semester">
		<br>
        <label>Kode MK</label>
		<br>
		<input type="text" name="kode_mk">
		<br>
        <label>Sesi</label>
		<br>
		<input type="char" name="sesi">
		<br>
        <label>Jam Masuk</label>
		<br>
		<input type="time" name="jam_masuk">
		<br>
        <label>Jam Keluar</label>
		<br>
		<input type="time" name="jam_keluar">
		<br>
        <label>Kelas</label>
		<br>
		<input type="text" name="kelas">
		<br>
        <label>Ruang</label>
		<br>
		<input type="text" name="ruang">
		<br>
        <label>Status</label>
		<br>
		<input type="int" name="status">
		<br>
        <label>Kelas Sesi</label>
		<br>
		<input type="text" name="kelas_sesi">
		<br><br>
		<button type="submit" name="submit_simpan_jadwal">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html> 