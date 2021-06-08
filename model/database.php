<?php

class database{
	
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "uts";
	var $con;

	function __construct(){
		$this->con=mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		mysqli_select_db($this->con,$this->db);
	}

	function tampil_data(){
		$data = mysqli_query($this->con,"select * from touman");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input($NamaAnggota,$Jabatan){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into touman values('','$NamaAnggota','$Jabatan')");
	}
	function hapus($id){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from touman where id= '$id'");
	}
	function edit($id){
		$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from touman where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update($id,$NamaAnggota,$Jabatan){
		mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update touman set NamaAnggota='$NamaAnggota', Jabatan='$Jabatan' where id= '$id'");
	}
}
?>