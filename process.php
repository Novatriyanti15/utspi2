<?php

// tabel absen
include 'model.php';
if (isset($_POST['submit_simpan_absensi'])) {
    $id_absen = $_POST['id_absen'];
    $tgl_absen = $_POST['tgl_absen'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $kode_dosen = $_POST['kode_dosen'];
    $sesi = $_POST['sesi'];
    $kelas_sesi = $_POST['kelas_sesi'];
    $model = new Model();
    $model->insert_absensi($id_absen, $tgl_absen, $masuk, $keluar, $kode_dosen, $sesi, $kelas_sesi);
    header('location:absensi.php');
}
if (isset($_POST['submit_edit_absensi'])) {
    $id_absen = $_POST['id_absen'];
    $tgl_absen = $_POST['tgl_absen'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $kode_dosen = $_POST['kode_dosen'];
    $sesi = $_POST['sesi'];
    $kelas_sesi = $_POST['kelas_sesi'];
    $model = new Model();
    $model->update_absensi($id_absen, $tgl_absen, $masuk, $keluar, $kode_dosen, $sesi, $kelas_sesi);
    header('location:absensi.php');
}
if (isset($_GET['id_absen'])) {
    $id_absen = $_GET['id_absen'];
    $model = new Model();
    $model->delete_absensi($id);
    header('location:absensi.php');
}

// tabel dosen
include 'model.php';
if (isset($_POST['submit_simpan_dosen'])) {
    $kode_dosen = $_POST['kode_dosen'];
    $nids = $_POST['nids'];
    $nipy = $_POST['nipy'];
    $nama_dosen = $_POST['nama_dosen'];
    $kode_prodi = $_POST['kode_prodi'];
    $model = new Model();
    $model->insert_absensi($kode_dosen, $nids, $nipy, $nama_dosen, $kode_prodi);
    header('location:dosen.php');
}
if (isset($_POST['submit_edit_dosen'])) {
    $kode_dosen = $_POST['kode_dosen'];
    $nids = $_POST['nids'];
    $nipy = $_POST['nipy'];
    $nama_dosen = $_POST['nama_dosen'];
    $kode_prodi = $_POST['kode_prodi'];
    $model = new Model();
    $model->update_absensi($kode_dosen, $nids, $nipy, $nama_dosen, $kode_prodi);
    header('location:dosen.php');
}
if (isset($_GET['kode_dosen'])) {
    $kode_dosen = $_GET['kode_dosen'];
    $model = new Model();
    $model->delete_absensi($id);
    header('location:dosen.php');
}

// tabel prodi
include 'model.php';
if (isset($_POST['submit_simpan_prodi'])) {
   $kode_prodi = $_POST['kode_prodi'];
   $nama_prodi = $_POST['nama_prodi'];
   $model = new Model();
   $model->insert_prodi($kode_prodi, $nama_prodi);
   header('location:prodi.php');
}
if (isset($_POST['submit_edit_prodi'])) {
    $kode_prodi = $_POST['kode_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $model = new Model();
    $model->update_prodi($kode_prodi, $nama_prodi);
   header('location:prodi.php');
}
if (isset($_GET['kode_prodi'])) {
   $kode_prodi = $_GET['kode_prodi'];
   $model = new Model();
   $model->delete_prodi($id);
   header('location:prodi.php');
}

// tabel matakuliah
include 'model.php';
if (isset($_POST['submit_simpan_matakuliah'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kode_prodi = $_POST['kode_prodi'];
    $model = new Model();
    $model->insert_matakuliah($kode_mk, $nama_mk, $sks, $smt, $kode_prodi);
    header('location:matakuliah.php');
}
if (isset($_POST['submit_edit_matakuliah'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kode_prodi = $_POST['kode_prodi'];
    $model = new Model();
    $model->update_matakuliah($kode_mk, $nama_mk, $sks, $smt, $kode_prodi);
    header('location:matakuliah.php');
}
if (isset($_GET['kode_mk'])) {
    $kode_mk = $_GET['kode_mk'];
    $model = new Model();
    $model->delete_kontrak_mk($id);
    header('location:matakuliah.php');
}

// tabel jadwal
include 'model.php';
if (isset($_POST['submit_simpan_jadwal'])) {
    $id = $_POST['id'];
    $id_jadwal = $_POST['id_jadwal'];
    $kode_dosen = $_POST['kode_dosen'];
    $hari = $_POST['hari'];
    $thn_akademik = $_POST['thn_akademik'];
    $semester = $_POST['semester'];
    $kode_mk = $_POST['kode_mk'];
    $sesi = $_POST['sesi'];
    $jam_masuk = $_POST['jam_masuk'];
    $jam_keluar = $_POST['jam_keluar'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelas_sesi = $_POST['kelas_sesi'];
    $model = new Model();
    $model->insert_jadwal($id, $id_jadwal, $kode_dosen, $hari, $thn_akademik, $semester, $kode_mk, $sesi, $jam_masuk, $jam_keluar, $kelas, $ruang, $status, $kelas_sesi);
    header('location:jadwal.php');
}
if (isset($_POST['submit_edit_jadwal'])) {
    $id = $_POST['id'];
    $id_jadwal = $_POST['id_jadwal'];
    $kode_dosen = $_POST['kode_dosen'];
    $hari = $_POST['hari'];
    $thn_akademik = $_POST['thn_akademik'];
    $semester = $_POST['semester'];
    $kode_mk = $_POST['kode_mk'];
    $sesi = $_POST['sesi'];
    $jam_masuk = $_POST['jam_masuk'];
    $jam_keluar = $_POST['jam_keluar'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelas_sesi = $_POST['kelas_sesi'];
    $model = new Model();
    $model->update_jadwal($id, $id_jadwal, $kode_dosen, $hari, $thn_akademik, $semester, $kode_mk, $sesi, $jam_masuk, $jam_keluar, $kelas, $ruang, $status, $kelas_sesi);
    header('location:jadwal.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_jadwal($id);
    header('location:jadwal.php');
}

?>
