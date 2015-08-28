<?php session_start();
 
include "layout/other.php";
include "include/conn.php"; 


if (isset($_POST['username'])) 
{
	if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
	}
	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$query = mysql_query("select * from login where password='$password' AND user='$username'", $koneksi);
		$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login']=1;
				$_SESSION['username']=$username;
				header("location: index.php");
				} else {
				$error = "Username atau Password Tidak Ada";
				}
			//if ($_SESSION['username']!='admin') {
    		//	header("location:http://localhost/PPI/Project_1/admin/index.php");
    		//	}
				mysql_close($koneksi);
	}
}
?>
<div class="contrainer">
	<div class="row">
		<center><h1>SILAKAN LOGIN TERLEBIH DAHULU</h1></center>
		<div class="col-sm-8 col-sm -offset-3">
			<form id="form1" name="form1" method="post" action="" class="form-inline">
				<div class="form-group">
					<label class="sr-only">USERNAME</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="username">
				</div>
				<div class="form-group">
					<label class="sr-only">PASSWORD</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="********">
				</div>
				<input name="proses" type="hidden" id="proses" value="yes">
				<button type="submit" class="btn btn-warning">LOGIN</button>
			</form>
		</div>
	</div>
</div>
<?php include "layout/other.php";?>
</body>
</html>