<?php 
include '../database.php';
$siswa = new Biodata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <title>Latihan CRUD - Edit Data</title>
</head>
<body>
    <?php 
        foreach($siswa->edit($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tgl_lahir'];
            $jns_kelamin = $data['jns_kelamin'];
            $agama = $data['agama'];
        }
    ?>
        <div class="countainer">    
            <div class="row" style="padding:20px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><b>Edit Biodata</b></div>
                            <div class="card-body" >
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="<?php echo $nama; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alm" class="form-control" rows="5" required><?php echo $alamat; ?></textarea>
                    <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl" class="form-control" value="<?php echo $tgl_lahir; ?>" required>
                    </div>
                    <div class="form-group">
                    <label for"">Jenis Kelamin</label><br>
                    <input type="radio" name="jk" value="Laki-laki" value="<?php echo $jns_kelamin; ?>" checked>Laki-laki<br>
                    <input type="radio" name="jk" value="Perempaun" value="<?php echo $jns_kelamin; ?>">Perempaun<br>    
                    </div>
                    <div class="form-group">
                    <label for="">Agama</label>
                    <select class="form-control" value="<?php echo $agama; ?>" name="agm">
                    <option <?php if ($data['agama']=="ISLAM") {?>
                            selected
                            <?php } ?>>ISLAM</option>
                    <option <?php if ($data['agama']=="KRISTEN") {?>
                            selected
                            <?php } ?>>KRISTEN</option>
                    <option <?php if ($data['agama']=="BUDHA") {?>
                            selected
                            <?php } ?>>BUDHA</option>
                    <option <?php if ($data['agama']=="HINDU") {?>
                            selected
                            <?php } ?>>HINDU</option>
                    </select>
                    </div>
                    <button type="submit" name="prs" class="btn btn-outline-primary">Proses</button>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootsrtap.bundle.js"></script>
    <script src="/assets/js/bootsrtap.bundle.min.js"></script>
</body>
</html>