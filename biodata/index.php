<?php 
// menambah / memanggil file database.php
include '../database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Latihan CRUD - Read Data</title>
</head>
<body>
    <!-- <legend><marquee>DATA SISWA</marquee></legend> -->
    <div class="container-fluid">
    <div class="row row-md-4 ">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                <h3>DATA SISWA</h3>
                    </div>
                    <div class="card-body">
                    <!-- data diri -->
                    <table class="table table-hover">
                    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Umur</th>            
            <th colspan="3">Aksi</th>
        </tr>
                    </thead>
        <?php
            $siswa = new Biodata();
            $no = 1;
            foreach($siswa->index() as $data) {
        ?>
        <thead>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['jns_kelamin']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['umur']; ?></td>
            <td><a class="btn btn-primary" href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
            <td><a class="btn btn-warning" href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
            <td><a class="btn btn-danger" href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('apakah anda akan menghapusnya?');">Delete</a></td>
        </tr>
        <?php }?>
        </thead>
    </table>
    <form action="create.php" method="POST">
                        <div class="form-group">
                                <input type="submit" value="INPUT" class="btn btn-primary" name="bayar">
                        </div>

<script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

