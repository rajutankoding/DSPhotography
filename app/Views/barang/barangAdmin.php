<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<!-- CSS Tampilan Barang -->
<link rel="stylesheet" href="<?= base_url(); ?>\css\style.css">
<div class="col-lg-8">
    <div class="container-fluid">
        <div class="d-grid gap-2">
            <a class="btn btn-outline-primary" href="<?= base_url('barang/tambah_brg'); ?>">
                <span>Tambahkan Barang</span></a>
        </div>
    </div>
</div>
</br>
<div class="th">
    <div class="row mx-auto">
        <?php foreach ($data as $b) : ?>
            <div class="card mr-2 ml-2" style="width: 15rem;">
                <img src="<?= base_url('/img/barang/' . $b['foto_brg']); ?>" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                    <h5 class="card-title text-bold">
                        <?= $b['nama_brg']; ?></h5>
                    <p class="card-text"><?= $b['kategori_brg']; ?></p>
                    <hr class="sidebar-divider my-0">
                    <i class="text-center"><i>Rp. </i><?= $b['harga']; ?></i>
                </div>
                <a href="login.php" class="btn btn-success">Sewa</a>
                <!-- <a href="barang/detail" class="btn btn-success">Detail</a> -->
            </div>
        <?php endforeach; ?>
    </div>



    <? foreach ($data as $b) : ?>
        <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= base_url('/img/barang/' . $b['foto_brg']); ?>">
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordrerless">
                                    <tr>
                                        <th>Nama Produk</th>
                                        <td>Brand Taylor Swift</td>
                                    </tr>
                                    <tr>
                                        <th>Type</th>
                                        <td>Women 30 ML</td>
                                    </tr>
                                    <tr>
                                        <th>Biaya Ongkir</th>
                                        <td>Standar</td>
                                    </tr>
                                    <tr>
                                        <th>Rating Produk</th>
                                        <td> <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Stok Produk</th>
                                        <td>20 pcs</td>
                                    </tr>
                                    <tr>
                                        <th>Harga Satuan</th>
                                        <td>Rp. 175.000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach; ?>



    <?= $this->endSection(); ?>