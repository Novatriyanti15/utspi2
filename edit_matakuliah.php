<?php
$id = $_GET['kode_mk'];
include 'model.php';
$model = new Model();
$data = $model->edit_matakuliah($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Matakuliah</title>
</head>

<body>
	<h1>Edit Matakuliah</h1>
	<a href="matakuliah.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>kode mk</label>
		<br>
		<input type="text" name="kode_mk" value="<?php echo $data->kode_mk ?>">
		<br>
		<label>Nama mk</label>
		<br>
		<input type="text" name="nama_mk" value="<?php echo $data->nama_mk ?>">
		<br>
		<label>sks</label>
		<br>
		<input type="int" name="sks" value="<?php echo $data->sks ?>">
		<br>
		<label>smt</label>
		<br>
		<input type="int" name="smt" value="<?php echo $data->smt ?>">
		<br>
		<label>kode prodi</label>
		<br>
		<input type="text" name="kode_prodi" value="<?php echo $data->kode_prodi ?>">
		<br><br>
		<button type="submit" name="submit_edit_matakuliah">Submit</button>
	</form>
</body>
</html>