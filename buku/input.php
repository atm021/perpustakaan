 <?php
$conn = mysql_connect("localhost","root","");
		mysql_select_db("perpustakaan",$conn);
$sql_1 = mysql_query("SELECT `id`,`nama` FROM `penulis`");
$sql_2 = mysql_query("SELECT `id`,`nama` FROM `penerbit`");
$sql_3 = mysql_query("SELECT `id`,`nama` FROM `kategori`");
?>
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
				<form action="" method="post" name="form1" target="_self" id="form1">
					<div class="form-group">
    					<label>Judul Buku</label>
    					<input type="text" class="form-control" id="judul" name="judul" placeholder="judul buku">
					</div>
					<div class="form-group">
    					<label>ISBN</label>
    					<input type="text" class="form-control" id="isbn" name="isbn" placeholder="isbn">
					</div>
					<div class="form-group">
    					<label>Sinopsis</label>
    					<textarea class="form-control" id="sinopsis" name="sinopsis" placeholder="sinopsis">
    					</textarea>
					</div>
					<div class="form-group">
    					<label>Sampul</label>
    					<input type="file" id="sampul" name="sampul">
					</div>
					<div class="form-group">
    					<label>Kategori</label>
    					<select name="kategori" id="kategori" class="form-control">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_3)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'>". $view_1['nama']."
											</option>";
										} 
										else{
											echo "<option value='none'>tidak ada data</option>";
										}
									}
									?>
								</select>
					</div>
					<div class="form-group">
    					<label>Penulis</label>
    					<select name="penulis" id="penulis" class="form-control">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_1)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'>". $view_1['nama']."
											</option>";
										} 
										else{
											echo "<option value='none'>tidak ada data</option>";
										}
									}
									?>
								</select>
					</div>
					<div class="form-group">
    					<label>Penerbit</label>
    					<select name="penerbit" id="penerbit" class="form-control">
									<option>--Silahkan pilih--</option>
									<?php
									while($view_1 = mysql_fetch_array($sql_2)) {
										if ($view_1['id']!=""){
											echo "<option value='". $view_1['id']."'>". $view_1['nama']."
											</option>";
										} 
										else{
											echo "<option value='none'>tidak ada data</option>";
										}
									}
									?>
								</select>
					</div>
					<input type="hidden" name="id" id="id" value="1">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
			<?php include "../layout/sidebar.php"; ?>
		</div>
	</div>

<?php include "../layout/footer.php";	?>


<?php
error_reporting(E_ALL);
if(isset($_POST['id'])){
$Judul = $_POST ['judul'];
$ISBN = $_POST ['isbn'];
$Sinopsis = $_POST ['sinopsis'];
$Sampul = $_POST ['sampul'];
$Kategori = $_POST ['kategori'];
$Penulis = $_POST ['penulis'];
$Penerbit = $_POST ['penerbit'];
$sql = "INSERT INTO buku SET
			judul = '$Judul',
			isbn = '$ISBN',
			sinopsis = '$Sinopsis',
			sampul = '$Sampul',
			id_kategori = '$Kategori',
			id_penulis = '$Penulis',
			id_penerbit = '$Penerbit'
			";
mysql_query($sql, $conn) or die ("SQL Error : ".mysql_error());
	echo "Berhasil Menyimpan Data dari : <b>$Judul</b>";
}

?>