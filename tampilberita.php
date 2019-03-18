<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fatih News</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- sweet alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center">New Post</h1>

		<?php 
			include 'koneksi.php';

			// buat query sql untuk menampilkan data News
			$query = "SELECT * FROM tb_news ORDER BY id_news DESC";

			$tampil_data = $connection->query($query);
		    
		    //ekperimen
			$add_button = "<a class='btn btn-info' href='tambahberita.php'>Add Post</a>";
			if ($tampil_data->num_rows > 0) {
				echo $add_button;
			}

		?>
		<hr>
		<table class="table table-striped table-bordered table-success">
			<caption>New Articles</caption>

			<?php if ($tampil_data->num_rows > 0) { ?>

				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Gambar</th>
						<th>Judul</th>
						<th>Tanggal</th>
						<th>Kategori</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						while ($row = $tampil_data->fetch_assoc()) {
					?>

							<tr>
								<td><?= $no++ ?></td>
								<td><?= $row['img'] ?></td>
								<td><?= $row['title'] ?></td>
								<td><?= $row['datetime'] ?></td>
								<td><?= $row['category'] ?></td>
								<td>
									<a class="btn btn-warning text-white" href="editnews.php">Edit</a>
									<a class="btn btn-danger" href="editnews.php">Hapus</a>
								</td>
							</tr>

					<?php 
							}
						} else {
							echo "<h3 class='text-center'>Data Kosong</h3>";
							echo "<center>$add_button</center>";
						}
					?>
				</tbody>
		</table>
	</div>

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>