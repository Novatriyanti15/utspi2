<?php
$id = $_GET['kode_prodi'];
include 'model.php';
$model = new Model();
$data = $model->edit_prodi($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Prodi</title>
</head>

<body>
	<h1>Edit Prodi</h1>
	<a href="prodi.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>kode prodi</label>
		<br>
		<input type="text" name="kode_prodi" value="<?php echo $data->kode-prodi ?>">
		<br>
		<label>Nama Prodi</label>
		<br>
		<input type="text" name="nama_prodi" value="<?php echo $data->nama_prodi ?>">
		<br><br>
		<button type="submit" name="submit_edit_prodi">Submit</button>
	</form>
</body>
</html>