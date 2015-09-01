<?php session_start();
    
    if($_SESSION['login']==0)
    {
    header("location:http://localhost/PPI/Project_1/login.php");
    }
	include "../include/fungsi.php"; ?>
<?php include "../layout/header.php";
    
?>

	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
					<h2>Data Pinjam Buku</h2>

					<div>&nbsp;</div>

					<table class="table table-hover table-bordered"> 
					<tr>
						<th>No</th>
						<th>ID BUKU</th>
						<th>PEMINJAM</th>
						<th>TANGGAL PINJAM</th>
						<th>LAMA PINJAM</th>
						<th>TANGGAL KEMBALI</th>
						<th>STATUS BUKU</th>
						<th>OPSI</th>
					</tr>

					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$sql="select * from peminjaman"; 
						$hasil=mysql_query($sql,$conn); 
					?>
					<?php $no = 1; ?>
					<?php while($data = mysql_fetch_array($hasil)) { ?>

					<tr>
						<td><?php print $no; ?></td>
						<td><?php print /*getbukulist(*/$data['id_buku']/*)*/; ?></td>
						<td><?php print $data['id_user']; ?></td>
						<td><?php print $data['tanggal_pinjam']; ?></td>
						<td><?php print $data['lama']; ?></td>
						<td><?php print $data['tanggal_kembali']; ?></td>
						<td><?php 
						if ($data['status_peminjaman']==0) {
							echo "<b>Telah di Kembalikan</b>";
						}
						else{
							echo "<b>Masih di Pinjam</b>";
						}
						?></td>
						<td><?php if ($data['status_peminjaman']==1) {
						?>
						<a href="buku-kembali.php?id=<?php print $data['id']; ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-ok"></i>Restore</a>
						<?php
						}
						else{
							echo "restored";
						}
							?>
						</td>
					</tr>	
					<?php $no++; } ?>
				</table>
			</div><!-- #main_content -->
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div><!-- #content -->

<?php include "../layout/footer.php";	?>
