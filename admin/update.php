<?php
//error_reporting(E_ALL);
if(isset($_POST['id'])){
include "../include/conn.php";
	$id = $_POST ['id'];
	$username = $_POST ['username'];
	$password = $_POST['password'];
	$sql = mysql_query("UPDATE login SET
				user = '".$username."',
				password = '".$password."'
				WHERE id ='".$id."';") or die(mysql_error());
	header("location: index.php?id=".$id);
}
?>
<?php include "../layout/header.php" ?>
<div class="container">
	<a href="index.php" class="btn btn-warning">
							<i class="glyphicon glyphicon-backward"></i>
							Back
					</a>
	<div class="row">
		<div class="col-md-6 col-sm-offset-3">
			<h1>UBAH AKUN</h1>
			<form action="" method="post" name="form1" target="_self" id="form2">
				<?php
						$conn=mysql_connect("localhost","root","");mysql_select_db("perpustakaan"); 
						$id = $_GET['id'];
						$sql="select * from login WHERE id = ".$_GET['id']; 
						$hasil=mysql_query($sql,$conn); 

					?>

					<?php 
						$username="";
						while($data = mysql_fetch_array($hasil)) {
							$username = $data['user'];
							$password = $data['password'];
						}
					?>
				<div class="form-group">
					<label>USERNAME</label>
					<input type="text" class="form-control" id="username" name="username" value="<?php print $username; ?>">
				</div>
				<div class="form-group">
					<label>PASSWORD</label>
					<input type="password" class="form-control" id="password" name="password" value="<?php print $password; ?>">
				</div>
				<input type="hidden" name="id" id="id" value="<?php print $_GET['id']; ?>">
				<button type="submit" class="btn btn-primary">Ubah</button>
			</form>
		</div>
	</div>
</div>