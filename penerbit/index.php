<?php include "../layout/header.php";
session_start();
    
    if($_SESSION['login']==0)
    {
    header("location:http://localhost/PPI/Project_1/login.php");
    } 
?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				
				<div id="output-penerbit">
					<h2>Data Penerbit</h2>
					<a href="input.php" class="btn btn-primary">
							<i class="glyphicon glyphicon-plus"></i>
							Tambah Penerbit
					</a>
					<table class="table table-hover table-bordered"> 
					<tr>
						<th>No</th>
						<th>NAMA</th>
						<th>ALAMAT</th>
						<th>TELEPON</th>
						<th>&nbsp;</th>
					</tr>

					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$sql="select * from penerbit"; 
						$hasil=mysql_query($sql,$conn); 
					?>
					<?php $no = 1; ?>
					<?php while($data = mysql_fetch_array($hasil)) { ?>
					<tr>
						<td><?php print $no; ?></td>
						<td><?php print $data['nama']; ?></td>
						<td><?php print $data['alamat']; ?></td>
						<td><?php print $data['telepon']; ?></td>
						<td>
							<a href="update.php?id=<?php print $data['id']; ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-pencil"></i> Update</a>
							<a href="delete.php?id=<?php print $data['id']; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
							<a href="view.php?id=<?php print $data['id']; ?>" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i> View</a>
						
						</td>
					</tr>	
					<?php $no++; } ?>
				</table>
				</div>
			</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>

<?php include "../layout/footer.php";	?>
