<?php
include '../model/database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="uts.css">
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/png" href="images/icons/logo.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">

    <title>Tokyo 卍 Kai</title>
    <style>
        .empat{
            width: 550px;
            height: 250px;
            top: 30%;
            right: 10%;
        }
    </style>
    
	<title>メンバー情報の変更</title>
</head>
<body>
<div class="dua">
        <h1>東京卍会</h1>
      <img src="logo.jpg" alt="" height="150px" width="150px">
    </div>
<div class="tiga"></div>
<div class="container empat">
	<h1>メンバー情報の変更</h1>
    <h3>東京卍会</h3>
<form action="../controller/proses.php?aksi=update" method="post">
<?php
foreach ($db->edit($_GET['id']) as $d) {
?>
<table>
      <tr>
      <td>Nama Anggota</td>
      <td>
         <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
         <input type="text" name="NamaAnggota" value="<?php echo $d['NamaAnggota'] ?>">
      </td>
      </tr>
      <tr>
          <td>Jabatan</td>
          <td><input type="text" name="Jabatan" value="<?php echo $d['Jabatan'] ?>"></td>
      </tr>
      <tr>
      <td></td>
      <td><input type="submit" value="Simpan"></td>
      </tr>
      </div>
</table>
<?php } ?>
</form>
</body>
</html>      