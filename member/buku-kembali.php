<?php

//error_reporting(E_ALL);
if(isset($_POST['id'])){
include "../include/conn.php";
	$id = $_POST ['id'];
	$id_buku = $_POST ['id_buku'];
	$id_user = $_POST ['id_user'];
	$tanggal_pinjam = $_POST ['tanggal_pinjam'];
	$lama = $_POST ['lama'];
	$tanggal_kembali = $_POST ['tanggal_kembali'];
	$status_peminjaman = $_POST ['status_peminjaman'];
	$sql = mysql_query("UPDATE peminjaman SET
				id_buku = '".$id_buku."',
				id_user = '".$id_user."',
				tanggal_pinjam = '".$tanggal_pinjam."',
				lama = '".$lama."',
				tanggal_kembali = '$tanggal_kembali',
				status_peminjaman = '".$status_peminjaman."'
				WHERE id ='".$id."';") or die(mysql_error());
	header("location: index.php?id=".$id);
}
	
?>
<?php 					$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$id = $_GET['id'];
						$sql="select * from peminjaman WHERE id =$id"; 
						$hasil=mysql_query($sql,$conn);  
						while($data = mysql_fetch_array($hasil)) {
							$id_buku = $data['id_buku'];
							$id_user = $data['id_user'];
							$tanggal_pinjam = $data['tanggal_pinjam']; 
							$lama = $data['lama'];
							$tanggal_kembali = $data['tanggal_kembali'];
							$status_peminjaman = $data['status_peminjaman'];
						}
					?>
<?php include "../layout/header.php";
$sql1= "select * from buku WHERE id =$id_buku";
$hasil2=mysql_query($sql1,$conn);
 ?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-md-6 col-md-offset-2">
				<div id="update-buku">
					<form action="" method="post">
						<?php while($data1 = mysql_fetch_array($hasil2)) { 
							$asal = $data1['judul'];
							?>
						
				
				<?php } ?>

					<div class="form-group">
    					<input type="hidden" id="id_buku" name="id_buku" value="<?php print $id_buku; ?>">
    					<input type="hidden" id="id_user" name="id_user" value="<?php print $id_user; ?>">
    					<input type="hidden" id="tanggal_pinjam" name="tanggal_pinjam" value="<?php print $tanggal_pinjam; ?>">
    					<input type="hidden" id="lama" name="lama" value="<?php print $lama; ?>">
    					<input type="hidden" id="tanggal_kembali" name="tanggal_kembali" value="<?php print $tanggal_kembali; ?>">
    					<h2>Anda Ingin Menembalikan Buku <b><?php print $asal; ?></b></h2>
    					<label>Checklist Untuk Mengembalikan Buku</label>
    					<input type="checkbox" id="status_peminjaman" name="status_peminjaman" value="0">
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
