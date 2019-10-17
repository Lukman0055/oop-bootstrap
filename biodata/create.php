<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
        <div class="countainer">
            <div class="row" style="padding:20px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><b>Input Biodata</b></div>
                            <div class="card-body" >
        <form action="proses.php?aksi=tambah" method="post">
            <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alm" class="form-control" rows="5" required></textarea>
                    <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for"">Jenis Kelamin</label><br>
                    <input type="radio" name="jk" value="Laki-laki" >Laki-laki<br>
                    <input type="radio" name="jk" value="Perempaun" >Perempaun<br>    
                    </div>
                    <div class="form-group">
                    <label for="">Agama</label>
                    <select class="form-control" name="agm">
                    <option>ISLAM</option>
                    <option>KRISTEN</option>
                    <option>BUDHA</option>
                    <option>HINDU</option>
                    </select>
                    </div>
                    <button type="submit" name="prs" class="btn btn-outline-primary">Proses</button>
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
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