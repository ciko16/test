<?php
include '../model/database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="images/icons/logo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="uts.css">
	<title>メンバーのリスト</title>
</head>
<body  >

<div class="lima">
<center>
<a href="input.php">Input Data</a>
<table width="600" cellspacing="5" cellpadding="5" border="3">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jabatan</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['NamaAnggota']; ?></td>
		<td><?php echo $x['Jabatan']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="../controller/proses.php?id=<?php echo $x['id']?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	<?php
}
?>
</table>
	</center>
	</div>
	<center>
	<h5><a href="/projectUTS/home.html">kembali ke beranda</h5></center>
</body>
</html>