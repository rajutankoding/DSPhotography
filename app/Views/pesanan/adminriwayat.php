<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Riwayat Pesanan</h1>
    <div class="row">
        <div class="col-lg-100%">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.Pesanan</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Harga/Hari</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Durasi</th>
                        <th scope="col">Kembali</th>
                        <th scope="col">Total</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($riwayat as $p) : ?>
                        <tr>
                            <td><?= $p['id_pesanan']; ?></td>
                            <td><?= $p['barang']; ?></td>
                            <td>Rp.<?= number_format($p['harga']); ?></td>
                            <td><?= $p['pelanggan']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td><?= $p['jumlah_brg']; ?> Hari</td>
                            <td><?= $p['tgl_selesai']; ?></td>
                            <td>Rp.<?= number_format($p['harga'] * $p['jumlah_brg']); ?></td>
                            <td><a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#hapusRiwayat"><i></i>Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<form action="/komentar/kirim" method="post">
    <div class="modal" tabindex="-1" id="komentar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tulis Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="pesan_komentar" class="form-label">Masukan Pesan yang ingin disampaikan</label>
                    <input type="text" class="form-control" id="pesan_komentar">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</form>


<!-- Hapus Modal-->
<div class="modal fade" id="hapusRiwayat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Batalkan Pesanan ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Jika anda membatalkan Pesanan Anda, Anda harus membuat Pesanan kembali untuk melakukan sewa barang! Pilih "Batalkan Pesanan" untuk membatalkan Pesanan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                <a class="btn btn-primary" href="#">Batalkan Pesanan</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>