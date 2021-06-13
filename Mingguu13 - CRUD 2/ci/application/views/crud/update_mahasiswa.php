<div class="baris">
	<div class="col-lg-7">
		<div class="p-5">
			<div class="text-center">
				<h1 class="h4 text-gray-900 mb-4">Update User</h1> <!-- untuk judul -->
			</div>
			<?php foreach($update as $baris) { ?>
			<form class="user" action="<?= base_url('Mahasiswa/update/'.$baris->id);?>" method="post"> <!-- digunakan untuk membuat form dan mengarahkan ke base url yaitu localhost/ci kemudian memanggil file controller Mahasiswa dan fungsi input yang dimana berisikan syntax untuk melakukan penginputan data ke dalam database -->
				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="username" name="username" value="<?= $baris->username ?>" placeholder="Username Maximal 10 Character" require /> <!-- textfield untuk memasukkan username, pastikan name nya sesuai dengan nama array pada controller yaitu username-->
				</div>
				<div class="form-group">
					<input type="password" class="form-control form-control-user" id="pass" name="pass" value="<?= $baris->password ?>" placeholder="Password Minimal 6 Character" require /> <!-- textfield untuk memasukkan password, pastikan name nya sesuai dengan nama array pada controller yaitu pass -->
				</div>
				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name" value="<?= $baris->nama ?>" require /> <!-- textfield untuk memasukkan nama, pastikan name nya sesuai dengan nama array pada controller yaitu nama -->
				</div>
				<div class="form-group">
					<select id="grup" class="form-control" name="grup" require> <!-- digunakan untuk membuat select option -->
						<option value="1" <?php if (($baris->grup) == 1) { echo "selected";} ?>>Admin</option> <!-- list option kedua -->
						<option value="2" <?php if (($baris->grup) == 2) { echo "selected";} ?>>User</option> <!-- list option ketiga -->
					</select>
				</div>
				<input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update" /> <!-- digunakan untuk membuat tombol agar data di dalam form dapat diproses -->
			</form>
		<?php } ?>
			<hr />
			<div class="text-center">
				<a class="small" href="index">Kembali</a> <!-- text dengan hyperlink untuk mengarahkan ke index -->
			</div>
		</div>
	</div>
</div>