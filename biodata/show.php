<?php 
include '../database.php';
$siswa = new Biodata();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <title>Latihan CRUD - Show Data</title>
</head>
<body>
<div class="countainer">
            <div class="row" style="padding:20px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><b>Tampilan Biodata</b></div>
                            <div class="card-body" >
    <?php 
        foreach($siswa->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tgl_lahir'];
            $jns_kelamin = $data['jns_kelamin'];
            $agama = $data['agama'];
        }
    ?>
    <!-- <fieldset> -->
        <!-- <legend>Show Data Siswa</legend> -->
        <table>
            <!-- <tr>
                <th>Nama Siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alm" cols="20" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><input type="date" name="tgl" value="<?php echo $tgl_lahir; ?>" readonly></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <?php
                if ($data['jns_kelamin']== "Laki-laki") {
                ?>
                <td><input type="radio" name="jk" id="inlineRadio1" value="Laki-laki" checked>
                <label class="form-check-label" for="inlineRadio1">Laki-Laki</label></<label>
                <?php }else {  ?>
                <td><input type="radio" name="jk" id="inlineRadio2" value="Perempuan" checked>
                <label class="form-check-label" for="inlineRadio2">Perempuan</label></label></<label>
                <?php } ?>
            </tr>
            <tr>
                <th>Agama</th>
                <td><input type="text" name="agm" value="<?php echo $agama; ?>" readonly></td>
            </tr> -->
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alm" class="form-control" rows="5" readonly><?php echo $alamat; ?></textarea>
                    <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl" class="form-control" value="<?php echo $tgl_lahir; ?>" readonly>
                    </div>
                    <div class="form-group">
                    <label for"">Jenis Kelamin</label><br>
                    <?php
                    if ($data['jns_kelamin']== "Laki-laki") {
                    ?>
                    <label><input type="radio" name="jk" id="inlineRadio1" value="Laki-laki" checked>
                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label></<label>
                    <?php }else {  ?>
                    <label><input type="radio" name="jk" id="inlineRadio2" value="Perempuan" checked>
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label></label>
                    <?php } ?>    
                    </div>
                    <div class="form-group">
                    <label>Agama</label><br>
                    <label><input type="text" name="agm" value="<?php echo $agama; ?>" readonly></label>
                    </div>
            <tr>
                <td><a class="btn btn-primary" href="index.php?id=<?php echo $data['id']; ?>&aksi=show">KEMBALI  </a></td>
            </tr>
        </table>
    <!-- </fieldset>
     -->                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>