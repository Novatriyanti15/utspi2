<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


<title>Tabel Jadwal</title>
</head>
<body>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>NOVA TRIYANTI</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <a class="nav-link" href="absensi.php">Absensi</a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prodi.php">Prodi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="matakuliah.php">Matakuliah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal.php">Jadwal</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1>Tabel Jadwal</h1>
<a href="create_jadwal.php">Tambah Data</a>
<br>
<a href="print_jadwal.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
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
$result = $model->tampil_data_jadwal();
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
      <td><a name="edit" id="edit" href="edit_jadwal.php?id=<?=$data->id ?>">Edit</a>
      <a name="hapus_jadwal" id="hapus_jadwal" href="process.php?id=<?=$data->id ?>">Delete</a>
      </td>
    </tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel jadwal.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>
