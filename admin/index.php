<?php

include "../layout/other.php";
	session_start();
    
    if($_SESSION['login']==0)
    {
    header("location:http://localhost/PPI/Project_1/login.php");
    }
?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<a href="input.php" class="btn btn-primary">
							<i class="glyphicon glyphicon-plus"></i>
							Tambah Akun  
					</a><br><br>
			<a href="../index.php" class="btn btn-success">
							<i class="glyphicon glyphicon-eye-open"></i>
							Lihat Website  
					</a><br><br>
			<a href="../member/index.php" class="btn btn-warning">
							<i class="glyphicon glyphicon-book"></i>
							Member Pinjam
					</a><br><br>
			<a href="../member/peminjam.php" class="btn btn-warning">
							<i class="glyphicon glyphicon-book"></i>
							Buku Kembali
					</a><br><br>
			<a href="../logout.php" class="btn btn-danger">
							<i class="glyphicon glyphicon-warning-sign"></i>
							Admin Logout  
					</a>
		</div>
		<div class="col-sm-9">
			<h1>Nama User yang Terdaftar</h1>
			<table class="table table-hover table-bordered"> 
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Password</th>
						<th>&nbsp;</th>
					</tr>

					<?php 
						$conn=mysql_connect("localhost","root",""); 
						mysql_select_db("perpustakaan"); 
						$sql="select * from login"; 
						$hasil=mysql_query($sql,$conn); 
					?>
					<?php $no = 1; ?>
					<?php while($data = mysql_fetch_array($hasil)) { ?>

					<tr>
						<td><?php print $no; ?></td>
						<td><?php print $data['user']; ?></td>
						<td><?php print $data['password']; ?></td>
						<td>
							<a href="update.php?id=<?php print $data['id']; ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
							<a href="delete.php?id=<?php print $data['id']; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
						</td>
					</tr>	
					<?php $no++; } ?>
				</table>
		</div>
	</div>
</div>