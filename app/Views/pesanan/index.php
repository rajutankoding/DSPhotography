<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pesanan Saya</h1>
    <a data-toggle="modal" data-target="#komentar" class="btn btn-outline-primary">Kirim Ulasan / Kritikk & Saran Untuk DS Photography</a>
    </br>
    <a>Barang yang sudah dipesan melalui website, dapat diambil di Toko "DS Photography".</a>

    <div class="row">
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">No Pesanan</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Harga/Hari</th>
                        <th scope="col">Dari Tanggal</th>
                        <th scope="col">Sampai Tanggal</th>
                        <th scope="col">Total</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pesanan as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $p['id_pesanan']; ?></td>
                            <td><?= $p['barang']; ?></td>
                            <td>Rp.<?= number_format($p['harga']); ?></td>
                            <td><?= $p['jumlah_brg']; ?> Hari</td>
                            <td><?= $p['tgl_selesai']; ?></td>
                            <td>Rp.<?= number_format($p['harga'] * $p['jumlah_brg']); ?></td>
                            <td><a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#hapusModal"><i></i>Batal</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal Pesan Kritik & Saran -->
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
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="<?= base_url('pesanan/delete/' . $p['id']); ?>">Batalkan Pesanan</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>