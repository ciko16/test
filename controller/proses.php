<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['NamaAnggota'],$_POST['Jabatan']);
	header("location:../view/tampil.php");
}elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header("location:../view/tampil.php");
}elseif ($aksi == "update"){
	$db->update($_POST['id'],$_POST['NamaAnggota'],$_POST['Jabatan']);
    header("location:../view/tampil.php");
}
else if($aksi=="login"){
	if($_POST['NamaAnggota']=="admin"){
	header("location:../view/tampil.php");
	}else{
	header("location:../home.html");
	}
	
	
}
?>