<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h1 {
			color: #FFBDBD;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Hello World !</h1>

	<ul>
		<li>Habib</li>
		<li>Fatih</li>
		<li>Muklas</li>
		<?php for ($i=0; $i < 5; $i++) { ?>
			<li>No <?php echo $i; ?></li>
		<?php } ?>
	</ul>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Gambar</th>
		</tr>

		<?php for ($i=1; $i < 4; $i++) { ?>
			<tr>
				<td><?php echo $i;?></td>
				<td><a href="tes2.php" style="text-decoration: none;" target="_blank">Habib</a></td>
				<td>Jonggol</td>
				<td><img src="../img/gambar.png" width="20%" height="20%"></td>
			</tr>
		<?php	} ?>
	</table>
</body>
</html>