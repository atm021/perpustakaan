<?php
session_start();
    
    if($_SESSION['login']==0)
    {
    header("location:login.php");
    }
include "layout/header.php";

?>
	<div id="content" class="container">
		<div class="row">
			<div id="main_content" class="col-sm-8">
				<H1>SELAMAT DATANG DI WEB PERPUSTAKAAN</H1><br>
				<H1>DAN TERIMA KASIH TELAH SINGGAH</H1>
			</div>
			<?php include "layout/sidebar.php"; ?>
		</div>
	</div>

<?php include "layout/footer.php";	?>
