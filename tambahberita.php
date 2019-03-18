<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add News</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Tambah Siswa</h1>
		<hr>
		<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul</label>
				<input class="form-control" type="text" name="judul" placeholder="Judul berita">
			</div>
			<div class="form-group">
				<label>Berita</label>
				<textarea class="ckeditor form-control" name="berita" id="berita" cols="30" rows="6"></textarea>
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<input class="form-control" type="text" name="kategori" placeholder="Kategori berita">
			</div>
			<div class="form-group">
				<label>Gambar</label>
				<!-- <input type="file" name="img_news"> -->
				<input class="form-control" type="text" name="img_news" placeholder="">
			</div>
			<input type="submit" class="btn btn-primary" value="Simpan">
		</form>
	</div>
	<!-- ckeditor -->
	<script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php 
	// jika dapat request proses data
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		include 'koneksi.php';

		// cek apakah data sudah didefinisikanatau belum
		if (!isset($_POST['judul']) && !isset($_POST['berita']) && !isset($_POST['kategori']) && !isset($_POST['img_news'])) {
			echo "Data belum diisi";
		}

		// cek apakah datanya kosong atau tidak
		if (empty($_POST['judul']) && empty($_POST['berita']) && empty($_POST['kategori']) && empty('img_news')) {
			echo "Lengkapi data";
		} else {
			// kumpulkan data
			$judul    = $_POST['judul'];
			$berita   = $_POST['berita'];
			$kategori = $_POST['kategori'];
			$img_news = $_POST['img_news'];
		}

		$query = "INSERT INTO tb_news (title, news, datetime, category, img) VALUES ('$judul', '$berita', now(),'$kategori', '$img_news')";

		// eksekusi query simpan data
		if ($connection->query($query) === TRUE) {
			header("location:tampilberita.php");
		} else {
			echo "data gagal disimpan";
		}

		$connection->close();
		
	}
?>