<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data Dosen</title>
	<style>
	h1 {
	text-align: center;
	}
	table,
	td,
	th {
	border: 1px solid #ddd;
	text-align: left;
	}
	table {
	border-collapse: collapse;
	width: 100%;
	}
	th,
	td {
	padding: 15px;
	}
	</style>
</head>

<body>
	<h1>Laporan Data Dosen</h1>
	<table>
		<thead>
			<tr>

				<th>Kode dosen</th>
				<th>Nids</th>
				<th>Nipy</th>
				<th>Nama dosen</th>
				<th>Kode prodi</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$result = $model->tampil_data_mahasiswa();
		if ( !empty($result) ) {
			foreach ($result as $data): ?>
				<tr>
					<td><?=$index++ ?></td>
					<td><?=$data->kode_dosen ?></td>
					<td><?=$data->nids ?></td>
					<td><?=$data->nipy ?></td>
					<td><?=$data->nama_dosen ?></td>
					<td><?=$data->kode_prodi ?></td>
				</tr>
			<?php endforeach;
		} else{ ?>
			<tr>
				<td colspan="9">Belum ada data pada tabel dosen.</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>
</html>
