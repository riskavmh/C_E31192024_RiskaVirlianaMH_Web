<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			<div class="text-center">
				<h1 class="h4 text-gray-900 mb-4">Tambah User</h1> <!-- untuk judul -->
			</div>
			<form class="user" action="<?= base_url('Mahasiswa/input');?>" method="post"> <!-- digunakan untuk membuat form dan mengarahkan ke base url yaitu localhost/ci kemudian memanggil file controller Mahasiswa dan fungsi input yang dimana berisikan syntax untuk melakukan penginputan data ke dalam database -->
				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Maximal 10 Character" require /> <!-- textfield untuk memasukkan username, pastikan name nya sesuai dengan nama array pada controller yaitu username-->
				</div>
				<div class="form-group">
					<input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Minimal 6 Character" require /> <!-- textfield untuk memasukkan password, pastikan name nya sesuai dengan nama array pada controller yaitu pass -->
				</div>
				<div class="form-group">
					<input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name" require /> <!-- textfield untuk memasukkan nama, pastikan name nya sesuai dengan nama array pada controller yaitu nama -->
				</div>
				<div class="form-group">
					<select id="grup" class="form-control" name="grup" require> <!-- digunakan untuk membuat select option -->
						<option value="0">Pilih Grup User</option> <!-- list option pertama -->
						<option value="1">Admin</option> <!-- list option kedua -->
						<option value="2">User</option> <!-- list option ketiga -->
					</select>
				</div>
				<input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah" /> <!-- digunakan untuk membuat tombol agar data di dalam form dapat diproses -->
			</form><hr />
			<div class="text-center">
				<a class="small" href="index">Kembali</a> <!-- text dengan hyperlink untuk mengarahkan ke index -->
			</div>
		</div>
	</div>
</div>