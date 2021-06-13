<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6> <!-- untuk judul -->
    </div>
    <div class="card-body">
        <div class="table-responsive"> <!-- style tablenya responsive -->
            <table class="table table-bordered" id="DataTable" width="100%" cellspacing="0"> <!-- untuk membuat table dengan garis dan lebar 100% dan jarak tiap barisnya 0 -->
                <thead> <!-- membuat kelompok kolom head atau bagian atas -->
                    <tr> <!-- membuat kolom -->
                        <th>No</th> <!-- membuat baris dengan judul No -->
                        <th>Username</th> <!-- membuat baris dengan judul Username -->
                        <th>Nama</th> <!-- membuat baris dengan judul Nama -->
                        <th>Grup</th> <!-- membuat baris dengan judul Grup -->
                        <th></th>
                    </tr>
                </thead>
                <tfoot> <!-- membuat kelompok kolom foot atau bagian bawah -->
                    <tr>
                        <th>No</th> <!-- membuat baris dengan judul No -->
                        <th>Username</th> <!-- membuat baris dengan judul Username -->
                        <th>Nama</th> <!-- membuat baris dengan judul Nama -->
                        <th>Grup</th> <!-- membuat baris dengan judul Grup -->
                        <th></th>
                    </tr>
                </tfoot>
                <tbody> <!-- membuat kelompok kolom bagian utama -->
                    <?php $no = 1; // deklarasi variable no berisikan angka 1
                        foreach ($user as $baris) { // perulangan akan dilakukan oleh variable user yang dialiaskan dengan variable baris 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td> <!-- baris yang menampilkan data nomor -->
                        <td><?= $baris->username; ?></td> <!-- baris yang menampilkan data username -->
                        <td><?= $baris->nama; ?></td> <!-- baris yang menampilkan data nama -->
                        <td><?= $baris->grup; ?></td> <!-- baris yang menampilkan data grup -->
                        <td>
                            <a href="<?= base_url('Mahasiswa/edit/'.$baris->id) ?>" class="fa fa-edit"></a>
                            &nbsp;
                            <a href="<?= base_url('Mahasiswa/delete/'.$baris->id) ?>" class="fa fa-times" onclick="return confirm('Hapus data?');"></a>
                        </td>
                    </tr>
                    <?php
                        } // untuk menutup perulangan
                    ?>
                </tbody>
            </table>
        </div>
        <a href="<?= base_url('Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split"> <!-- hyperlink untuk mengarahkan tulisan dengan style button ke localhost/ci/ dengan controller Mahasiswa dan fungsi tambah -->
            <span class="text">Tambah Data</span> <!-- text untuk objek pengarahan halaman -->
        </a>
    </div>
</div>