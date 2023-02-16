<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<!-- CSS Tampilan Barang -->
<link rel="stylesheet" href="<?= base_url(); ?>\css\style.css">
<div class="container-fluid">



    <div class="th">
        <div class="row mx-auto">
            <div class="col-lg-12">
                <?php
                if (session()->getflashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>';
                    echo session()->getflashdata('pesan');
                    echo '</div>';
                }
                ?>
                <?php
                if (session()->getflashdata('dipesan')) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>';
                    echo session()->getflashdata('pesan');
                    echo '</div>';
                }
                ?>
            </div>
            <?php foreach ($barang as $b) : ?>
                <div class="card my-2 mr-2 ml-2" style="width: 16rem;">
                    <?php echo form_open('barang/addcart');
                    echo form_hidden('id', $b['id']);
                    echo form_hidden('price', $b['harga']);
                    echo form_hidden('name', $b['nama_brg']);
                    echo form_hidden('gambar', $b['foto_brg']);
                    ?>
                    <img class="mt-2 mr-2" src="<?= base_url('/img/barang/' . $b['foto_brg']); ?>" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                        <h5 class="card-title text-bold">
                            <?= $b['nama_brg']; ?></h5>
                        <p class="card-text"><?= $b['kategori_brg']; ?></p>
                        <hr class="sidebar-divider my-2">
                        <i class="text-center"><i>Rp. </i><?= number_format($b['harga']); ?></i>
                    </div>
                    <!-- <button type="submit" class="btn btn-success my-2 mx-2">Masukan Keranjang</button> -->
                    <a class="btn btn-success my-2 mx-5" href="<?= base_url('barang/detail/' . $b['id']); ?>">Pesan Barang</a>
                    <!-- <a href="detail" data-bs-toggle="modal" data-bs-target="#detail1" class="btn btn-success">Detail</a> -->
                    <?php echo form_close(); ?>
                </div>
            <?php endforeach; ?>
        </div>



        <? foreach ($data as $b) : ?>
            <div class="modal fade" name="detail" id="detail1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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