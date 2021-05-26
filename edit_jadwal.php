<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_Jadwal($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Jadwal</title>
</head>

<body>
	<h1>Edit Jadwal</h1>
	<a href="jadwal.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Id</label>
		<br>
		<input type="int" name="id" value="<?php echo $data->id ?>">
		<br>
		<label>Id Jadwal</label>
		<br>
		<input type="int" name="id_jadwal" value="<?php echo $data->id_jadwal ?>">
		<br>
		<label>Kode Dosen</label>
		<br>
		<input type="text" name="kode_dosen" value="<?php echo $data->kode_dosen ?>">
		<br>
        <label>Hari</label>
		<br>
		<input type="text" name="hari" value="<?php echo $data->hari ?>">
		<br>
		<label>Thn Akademik</label>
		<br>
		<input type="text" name="thn_akademik" value="<?php echo $data->thn_akademik ?>">
        <br>
        <label>Semester</label>
		<br>
		<input type="text" name="semester" value="<?php echo $data->semester ?>">
		<br>
        <label>Kode MK</label>
		<br>
		<input type="text" name="kode_mk" value="<?php echo $data->kode_mk ?>">
		<br>
        <label>Sesi</label>
		<br>
		<input type="char" name="sesi" value="<?php echo $data->sesi ?>">
		<br>
        <label>Jam Masuk</label>
		<br>
		<input type="time" name="jam_masuk" value="<?php echo $data->jam_masuk ?>">
		<br>
        <label>Jam Keluar</label>
		<br>
		<input type="time" name="jam_keluar" value="<?php echo $data->jam_keluar ?>">
		<br>
        <label>Kelas</label>
		<br>
		<input type="text" name="kelas" value="<?php echo $data->kelas ?>">
		<br>
        <label>Ruang</label>
		<br>
		<input type="text" name="ruang" value="<?php echo $data->ruang ?>">
		<br>
        <label>Status</label>
		<br>
		<input type="int" name="status" value="<?php echo $data->status ?>">
		<br>
        <label>Kelas Sesi</label>
		<br>
		<input type="text" name="kelas_sesi" value="<?php echo $data->kelas_sesi ?>">
		<br><br>
		<button type="submit" name="submit_edit_jadwal">Submit</button>
	</form>
</body>
</html>