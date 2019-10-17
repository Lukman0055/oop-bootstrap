<?php 
include '../database.php';
$siswa = new Biodata();


$aksi = $_GET['aksi'];
if(isset($_POST['prs']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alm'];
    $tgl_lahir = $_POST['tgl'];
    $jns_kelamin = $_POST['jk'];
    $agama = $_POST['agm'];

    $tgl = date('Y', strtotime($tgl_lahir)); 
    $umur = date('Y')-$tgl;
}

if($aksi == "tambah")
{
    $siswa->create($nama, $alamat, $tgl_lahir, $jns_kelamin, $agama, $umur);
    header("location:index.php");
}elseif($aksi == "update")
{
    $siswa->update($id, $nama, $alamat, $tgl_lahir, $jns_kelamin, $agama, $umur);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $siswa->delete($_GET['id']);
    header("location:index.php");
}
?>