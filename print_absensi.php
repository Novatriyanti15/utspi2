<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data</title>
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
	<h1>Laporan Data Absensi</h1>
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Id absen</th>
				<th>tgl absen</th>
				<th>Masuk</th>
				<th>Keluar/th>
				<th>Kode dosen</th>
				<th>Sesi</th>
				<th>Kelas Sesi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_data_absensi();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
						<td><?=$index++ ?></td>
						<td><?=$data->id_absen ?></td>
						<td><?=$data->tgl_absen ?></td>
						<td><?=$data->masuk ?></td>
						<td><?=$data->keluar ?></td>
						<td><?=$data->kode_dosen ?></td>
						<td><?=$data->sesi ?></td>
						<td><?=$data->kelas_sesi ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel Absensi.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>