<?php
class Biodata extends Database {
    // Menampilkan Semua Data
    public function index()
    {
        
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata");
        // var_dump($datasiswa);
        return $datasiswa;
    }

    // Menambah Data
    public function create($nama, $alamat, $tgl_lahir, $jns_kelamin, $agama, $umur)
    {
        
        mysqli_query($this->koneksi,"insert into biodata values('','$nama', '$alamat', '$tgl_lahir', '$jns_kelamin', '$agama', '$umur')");
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $datasiswa;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $datasiswa;
    }

    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $tgl_lahir, $jns_kelamin, $agama, $umur)
    {
        mysqli_query($this->koneksi,"update biodata set nama='$nama', alamat='$alamat',  tgl_lahir='$tgl_lahir',
        jns_kelamin='$jns_kelamin', agama='$agama', umur='$umur' where id='$id'");
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from biodata where id='$id'");
    }
}
?>