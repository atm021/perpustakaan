<?php session_start();
    
    if($_SESSION['login']==0)
    {
    header("location:http://localhost/PPI/Project_1/login.php");
    }
include "../layout/header.php";


?>
<?php
if (isset($_POST['id'])){
include "../include/conn.php";

$Nama = $_POST ['nama'];
 
$error = 0;

if (trim($Nama)=="") {
	echo "Masih Kosong,ulangi kembali";
	$error = 1;
}

{

	$sql = "INSERT INTO kategori SET
			nama = '$Nama'
			";
	
	mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$Nama</b>";
	include "index.php";
}
}
?>
<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
			<center><h2>TAMBAH KATEGORI</h2></center>
			<div id="input-kategori">
					<form action="" method="post" name="form1" target="_self" id="form1">
					<div class="form-group">
    					<label>NAMA KATEGORI</label>
    					<input type="text" class="form-control" id="nama" name="nama" placeholder="nama kategori">
					</div>
					<input type="hidden" name="id" id="id" value="1">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
				</div>
</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>
<?php include "../layout/footer.php"
?>