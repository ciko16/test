<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="uts.css">
    <link rel="icon" type="image/png" href="images/icons/logo.jpg"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">

    <title>会員登録</title>
    <style>
        .empat{
            width: 550px;
            height: 250px;
            top: 30%;
            right: 10%;
        }
    </style>
</head>

<body>

    <div class="dua">
        <h1>会員登録 </h1>
        <h4>東京卍会</h4>
        <img src="logo.jpg" alt="" height="150px" width="150px">
    </div>
    <div class="tiga"></div>

    <div class="container empat">
        <div>
            <form action="../controller/proses.php?aksi=tambah" method="post">
                <div class="mb-3 ">
                    <label for="Jabatan" class="form-label"></label>
                    <select name="Jabatan" id="Jabatan" class="btn btn-warning mt-3">
                        <option value="---pilih divisi yang diinginkan">Pilih Divisi</option>
                        <option value="Divisi Kesatu">Divisi Kesatu</option>
                        <option value="Divisi Kedua">Divisi Kedua</option>
                        <option value="Divisi Ketiga">Divisi Ketiga</option>
                        <option value="Divisi Keempat">Divisi Keempat</option>
                        <option value="Divisi Kelima">Divisi Kelima</option>
                        <option value="Divisi Keenam">Divisi Keenam</option>
                    </select>
                </div>
                <input type="text" name="NamaAnggota" placeholder="Nama Lengkap" class="form-control rounded-pill">
                <div>
                    <button class="btn btn-warning mt-3 pcr4">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>