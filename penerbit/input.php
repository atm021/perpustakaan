<?php
session_start();
    
    if($_SESSION['login']==0)
    {
    header("location:http://localhost/PPI/Project_1/login.php");
    }
if (isset($_POST['id'])) {
include "../include/conn.php";

$Nama = $_POST ['nama'];
$Alamat = $_POST ['alamat'];
$Telepon = $_POST ['telepon'];
 
$error = 0;

if (trim($Nama)=="") {
	echo "Masih Kosong,ulangi kembali";
	$error = 1;
}
elseif (trim($Alamat)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;

}
elseif (trim($Telepon)=="") {
	echo "Masih Kosong,Ulangi Kembali";
	$error = 1;
}
if($error==0)
{

	$sql = "INSERT INTO penerbit SET
			nama = '$Nama',
			alamat = '$Alamat',
			telepon = '$Telepon'
			";
	
	mysql_query($sql, $koneksi) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$Nama</b>";
	include "index.php";
}
}

?>
<?php include "../layout/header.php" ?>
<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<h2>TAMBAH PENERBIT</h2>
				<div id="input-penerbit">
					<form action="input.php" method="post" name="form1" target="_self" id="form1">
					<div class="form-group">
    					<label>NAMA PENERBIT</label>
    					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penulis">
					</div>
					<div class="form-group">
    					<label>ALAMAT PENERBIT</label>
    					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Penulis">
					</div>
					<div class="form-group">
    					<label>TELEPON</label>
    					<input type="text" class="form-control" id="telepon" name="telepon" placeholder="Alamat Penulis">
					</div>
					<input type="hidden" name="id" id="id" value="1">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
				</div>
			</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>
	<?php include "../layout/footer.php"; ?>
