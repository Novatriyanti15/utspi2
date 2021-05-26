<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    // tabel absen
     public function insert_absensi($id_absen, $tgl_absen, $masuk, $keluar, $kode_dosen, $sesi, $kelas_sesi)
    {
        $sql = "INSERT INTO tbl_absen (id_absen, tgl_absen, masuk, keluar, kode_dosen, sesi, kelas_sesi)
        VALUES ('$id_absen', '$tgl_absen', '$masuk', '$keluar', '$kode_dosen', '$sesi', '$kelas_sesi')";
        $this->conn->query($sql);
    }
    public function tampil_data_absensi()
    {
         $sql = "SELECT * FROM tbl_absen";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) { $baris[] = $obj;
     }
     if(!empty($baris)){
         return $baris;
     }
    }
    public function edit_absensi($id)
    {
         $sql = "SELECT * FROM tbl_absen WHERE id='$id_absen'";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris = $obj;
     }
         return $baris;
    }
    public function update_absensi($id_absen, $tgl_absen, $masuk, $keluar, $kode_dosen, $sesi, $kelas_sesi)
    {
         $sql = "UPDATE tbl_absen SET 'id_absen'='$id_absen', 'tgl_absen'='$tgl_absen', 'masuk'='$masuk', 'keluar'='$keluar', 'kode_dosen'='$kode_dosen', 'sesi'='$sesi', 'kelas_sesi'='$kelas_sesi' WHERE id_absen='$id_absen'";
         $this->conn->query($sql);
    }
    public function delete_absensi($id)
    {
        $sql = "DELETE FROM tbl_absen WHERE id_absen='$id_absen'";
        $this->conn->query($sql);
    }



//tabel dosen
        public function insert_dosen($kode_dosen, $nids, $nipy, $nama_dosen, $kode_prodi)
        {
            $sql = "INSERT INTO tbl_dosen (kode_dosen, nids, nipy, nama_dosen, kode_prodi)
            VALUES ('$kode_dosen', '$nids', '$nipy', '$nama_dosen', '$kode_prodi')";
            $this->conn->query($sql);
        }
        public function tampil_data_dosen()
        {
             $sql = "SELECT * FROM tbl_dosen";
             $bind = $this->conn->query($sql);
             while ($obj = $bind->fetch_object()) {
                 $baris[] = $obj;
             }
             if(!empty($baris)){
                 return $baris;
             }
        }
        
        public function edit_dosen($id)
        {
             $sql = "SELECT * FROM tbl_dosen WHERE kode_dosen='$kode_dosen'";
             $bind = $this->conn->query($sql);
             while ($obj = $bind->fetch_object()) 
             
             
             
             {
                 $baris = $obj;
             }
             return $baris;
        }
        public function update_dosen($kode_dosen, $nids, $nipy, $nama_dosen, $kode_prodi)
        {
             $sql = "UPDATE tbl_dosen SET kode_dosen='$kode_dosen', nids='$nids', nipy='$nipy', nama_dosen='$nama_dosen', kode_prodi='$kode_prodi' WHERE kode_dosen='$kode_dosen'";
             $this->conn->query($sql);
        }
        public function delete_dosen($id)
        {
            $sql = "DELETE FROM tbl|_dosen WHERE kode_dosen='$kode_dosen'";
            $this->conn->query($sql);
        }
    
    //tabel prodi
    public function insert_prodi($kode_prodi, $nama_prodi)
    {
        $sql = "INSERT INTO tbl_prodi (kode_prodi, nama_prodi)
        VALUES ('$kode_prodi', '$nama_prodi')";
        $this->conn->query($sql);
    }
    public function tampil_data_prodi()
    {
         $sql = "SELECT * FROM tbl_prodi";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris[] = $obj;
         }
         if(!empty($baris)){
             return $baris;
         }
    }
    
    public function edit_prodi($id)
    {
         $sql = "SELECT * FROM tbl_prodi WHERE kode_prodi='$kode_prodi'";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris = $obj;
         }
         return $baris;
    }
    public function update_prodi($kode_prodi, $nama_prodi)
    {
         $sql = "UPDATE tbl_prodi SET kode_prodi='$kode_prodi', nama|_prodi='$nama_prod'i WHERE kode_prodi='$kode_prodi'";
         $this->conn->query($sql);
    }
    public function delete_prodi($id)
    {
        $sql = "DELETE FROM tbl|_prodi WHERE kode_prodi='$kode_prodi'";
        $this->conn->query($sql);
    }


    //tabel matakuliah
    public function insert_matakuliah($kode_mk, $nama_mk, $sks, $smt, $Kode_prodi)
    {
        $sql = "INSERT INTO tbl_matakuliah (kode_mk, nama_mk, sks, smt, Kode_prodi)
        VALUES ('$kode_mk', '$nama_mk', '$sks', '$smt', '$Kode_prodi')";
        $this->conn->query($sql);
    }
    public function tampil_data_matakuliah()
    {
         $sql = "SELECT * FROM tbl_matakuliah";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris[] = $obj;
         }
         if(!empty($baris)){
             return $baris;
         }
    }
    public function edit_matakuliah($id)
    {
         $sql = "SELECT * FROM tbl_matakuliah WHERE kode_mk='$kode_mk'";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris = $obj;
         }
         return $baris;
    }
    public function update_matakuliah($kode_mk, $nama_mk, $sks, $smt, $Kode_prodi)
    {
         $sql = "UPDATE tbl_matakuliah SET kode_mk='$kode_mk', nama_mk='$nama_mk', sks='$sks', smt='$smt', kode_prodi='$Kode_prodi' WHERE kode_mk='$kode_mk'";
         $this->conn->query($sql);
    }
    public function delete_matakuliah($id)
    {
        $sql = "DELETE FROM tbl_matakuliah WHERE kode_mk='$kode_mk'";
        $this->conn->query($sql);
    }

    //tabel jadwal
    public function insert_jadwal($id, $id_jadwal, $kode_dosen, $hari, $thn_akademik, $semester, $kode_mk, $sesi, $jam_masuk, $jam_keluar, $kelas, $ruang, $status, $kelas_sesi)
    {
        $sql = "INSERT INTO tbl_jadwal (id, id_jadwal, kode_dosen, hari, thn_akademik, semester, kode_mk, sesi, jam_masuk, jam_keluar, kelas, ruang, status, kelas_sesi)
        VALUES ('$id', '$id_jadwal', '$kode_dosen', '$hari', '$thn_akademik', '$semester', '$kode_mk', '$sesi', '$jam_masuk', '$jam_keluar', '$kelas', '$ruang', '$status', '$kelas_sesi')";
        $this->conn->query($sql);
    }
    public function tampil_data_jadwal()
    {
         $sql = "SELECT * FROM tbl_jadwal";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris[] = $obj;
         }
         if(!empty($baris)){
             return $baris;
         }
    }
    public function edit_jadwal($id)
    {
         $sql = "SELECT * FROM tbl_jadwal WHERE id='$id'";
         $bind = $this->conn->query($sql);
         while ($obj = $bind->fetch_object()) {
             $baris = $obj;
         }
         return $baris;
    }
    public function update_jadwal($id, $id_jadwal, $kode_dosen, $hari, $thn_akademik, $semester, $kode_mk, $sesi, $jam_masuk, $jam_keluar, $kelas, $ruang, $status, $kelas_sesi)
    {
         $sql = "UPDATE tbl_jadwal SET (id='$id', id_jadwal='$id_jadwal', kode_dosen='$kode_dosen', hari='$hari', thn_akademik='$thn_akademik', semester='$semester', kode_mk='$kode_mk', sesi='$sesi', jam_masuk='$jam_masuk', jam_keluar='$jam_keluar', kelas='$kelas', ruang='$ruang', status='$status', kelas_sesi='$kelas_sesi' WHERE id='$id'";
         $this->conn->query($sql);
    }
    public function delete_jadwal($id)
    {
        $sql = "DELETE FROM tbl_jadwal WHERE id='$id'";
        $this->conn->query($sql);
    }
}
?>