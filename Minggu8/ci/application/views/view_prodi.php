<html>
	<head>
		<title></title>
	</head>

	<!--<body>
		Nama : <?php //echo $nama; ?>
		<br />
		Prodi : <?php //echo $prodi; ?>
	</body>-->

	<body>
		<h3>
			Daftar Prodi Jurusan Teknologi Informasi
		</h3>
		<table border="1">
			<tr>
				<td>No</td>
				<td>Prodi</td>
				<td>Keterangan</td>
			</tr>
			<?php foreach($soal_a as $row) { ?>
			<tr>
				<td width="30"><?= $row['no']; ?></td>
				<td width="50"><?= $row['prodi']; ?></td>
				<td width="200"><?= $row['keterangan']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>