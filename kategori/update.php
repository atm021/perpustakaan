<?php

//error_reporting(E_ALL);
if(isset($_POST['id'])){
include "../include/conn.php";
	$id = $_POST ['id'];
	$nama = $_POST ['nama'];
	$sql = mysql_query("UPDATE kategori SET
				nama = '".$nama."'
				WHERE id ='".$id."';") or die(mysql_error());
	header("location: index.php?id=".$id);
}
?>
<?php include "../layout/header.php" ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<h2>UPDATE KATEGORI</h2>
				<div id="update-buku">
					<form action="" method="post">
					<?php
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$id = $_GET['id'];
						$sql="select * from kategori WHERE id = ".$_GET['id']; 
						$hasil=mysql_query($sql,$conn); 

					?>

					<?php 
						$judul = "";
						while($data = mysql_fetch_array($hasil)) {
							$nama = $data['nama'];
						}
					?>

					<div class="form-group">
    					<label>NAMA KATEGORI</label>
    					<input type="text" class="form-control" id="nama" name="nama" value="<?php print $nama; ?>">
					</div>
					<input type="hidden" name="id" id="id" value="<?php print $_GET['id']; ?>">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
				</div>
				<div></div>
			</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>

<?php include "../layout/footer.php";	?>
