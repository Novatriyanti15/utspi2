<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_dosen($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Dosen</title>
</head>

<body>
	<h1>Edit Dosen</h1>
	<a href="dosen.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Kode Dosen</label>
		<br>
		<input type="text" name="kode_dosen" value="<?php echo $data->kode_dosen ?>">
		<br>
		<label>Nids</label>
		<br>
		<input type="text" name="nids" value="<?php echo $data->nids ?>">
		<br>
		<label>Nipy</label>
		<br>
		<input type="text" name="nipy" value="<?php echo $data->nipy ?>">
		<br>
		<label>nama_dosen</label>
		<br>
		<input type="text" name="nama_dosen" value="<?php echo $data->nama_dosen ?>">
		<br>
		<label>kode Prodi</label>
		<br>
		<input type="text" name="kode_prodi" value="<?php echo $data->kode_prodi ?>">
		<br><br>
		<button type="submit" name="submit_edit_dosen">Submit</button>
	</form>
</body>
</html>