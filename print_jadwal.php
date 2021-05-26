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
	<h1>Laporan Data Jadwal</h1>
	<table>
		<thead>
			<tr>
				<th>Id</th>
                <th>Id_Jadwal</th>
                <th>Kode Dosen</th>
                <th>Hari</th>
                <th>Thn Akademik</th>
                <th>Semester</th>
                <th>Kode MK</th>
                <th>Sesi</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
                <th>Kelas</th>
                <th>Ruang</th>
                <th>Status</th>
                <th>kelas Sesi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model->tampil_data_Jadwal();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr>
                    <td><?=$index++ ?></td>
                    <td><?=$data->id ?></td>
                    <td><?=$data->id_jadwal ?></td>
                    <td><?=$data->kode_dosen?></td>
                    <td><?=$data->hari?></td>
                    <td><?=$data->thn_akademik?></td>
                    <td><?=$data->semester?></td>
                    <td><?=$data->kode_mk?></td>
                    <td><?=$data->sesi?></td>
                    <td><?=$data->jam_masuk?></td>
                    <td><?=$data->jam_keluar?></td>
                    <td><?=$data->kelas?></td>
                    <td><?=$data->ruang?></td>
                    <td><?=$data->status?></td>
                    <td><?=$data->kelas_sesi?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel jadwal</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
	window.print();
	</script>
</body>
</html>