<?php
$id = $_GET['id_absen'];
include 'model.php';
$model = new Model();
$data = $model->edit_absensi($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Absensi</title>
</head>

<body>
	<h1>Edit Absensi</h1>
	<a href="absensi.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Id absen</label>
		<br>
		<input type="int" name="tbl_absen" value="<?php echo $data->id_absen ?>">
		<br>
		<label>Tgl absen</label>
		<br>
		<input type="date" name="tbl_absen" value="<?php echo $data->tgl_absen ?>">
		<br>
		<label>Masuk</label>
		<br>
		<input type="time" name="tbl_absen" value="<?php echo $data->masuk ?>">
		<br>
		<label>Keluar</label>
		<br>
		<input type="time" name="tbl_absen" value="<?php echo $data->keluar ?>">
		<br>
		<label>Kode dosen</label>
		<br>
		<input type="text" name="tbl_absen" value="<?php echo $data->kode_dosen ?>">
		<br>
		<label>Sesi</label>
		<br>
		<input type="char" name="tbl_absen" value="<?php echo $data->sesi ?>">
		<br>
		<label>Kelas sesi</label>
		<br>
		<input type="text" name="tbl_absen" value="<?php echo $data->kelas_sesi ?>">
		<br><br>
		<button type="submit" name="submit_edit_absen">Submit</button>
	</form>
</body>
</html>