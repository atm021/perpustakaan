<?php
$conn = mysql_connect("localhost","root","");
		mysql_select_db("perpustakaan",$conn);
include "../layout/other.php";
	session_start();
    
    if($_SESSION['login']==0)
    {
    header("location:http://localhost/PPI/Project_1/login.php");
    }
?>
<div class="container">
	<a href="index.php" class="btn btn-warning">
							<i class="glyphicon glyphicon-backward"></i>
							Back
					</a>
	<div class="row">
		<div class="col-md-6 col-sm-offset-3">
			<h1>TAMBAH AKUN</h1>
			<form action="" method="post" name="form1" target="_self" id="form2">
				<div class="form-group">
					<label>USERNAME</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username">
				</div>
				<div class="form-group">
					<label>PASSWORD</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>
				<input type="hidden" name="id" id="id" value="1">
				<button type="submit" class="btn btn-primary">Daftar</button>
			</form>
		</div>
	</div>
</div>
<?php
error_reporting(E_ALL);
if(isset($_POST['id'])){
$username = $_POST ['username'];
$password = $_POST ['password'];
$sql = "INSERT INTO login SET
			user = '$username',
			password = '$password'
			";
mysql_query($sql, $conn) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$username</b>";
}

?>