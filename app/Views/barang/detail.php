<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Default box -->

    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="col-12">
                    <img src="<?= base_url('/img/barang/' . $barang['foto_brg']); ?>" class="product-image" alt="Product Image">
                    <div class="bg-gray py-2 px-3 mt-4">
                        <h2>Harga :</h2>
                        <h2 class="mb-0">
                            Rp.<?= number_format($barang['harga']); ?>
                        </h2>
                        <!-- <h4 class="mt-0">
                            <small>Ex Tax: $80.00 </small>
                        </h4> -->
                    </div>
                </div>
                <!-- <div class="col-12 product-image-thumbs">
                        <div class="product-image-thumb active"><img src="../../dist/img/prod-1.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="../../dist/img/prod-2.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="../../dist/img/prod-3.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
                        <div class="product-image-thumb"><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div>
                    </div> -->
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3"><?= $barang['nama_brg']; ?></h3>
                <p><?= $barang['detail'] ?></p>
                <hr>
                <!-- <h4>Maaf Barang Ini Sudah Dipesan Untuk tnggal Berikut :</h4> -->
                <table class="table-danger">
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
                </table>
                <h4>Sewa Untuk Tanggal Berapa ?</h4>
                <!-- Filter Tanggal -->
                <form method="post" action="<?= base_url(); ?>/pesanan/tglPesanan/<?= user()->id; ?>">
                    <?= csrf_field(); ?>
                    <table>
                        <div class="visually-hidden">
                            <input type="text" class="form-control" id="id_brg" name="id_brg" value="<?= $barang["id"]; ?>">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= user()->username; ?>">
                            <input type="text" class="form-control" id="wa" name="wa" value="<?= user()->no_wa; ?>">
                            <input type="text" class="form-control" id="barang" name="barang" value="<?= $barang["nama_brg"]; ?>">
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang["harga"]; ?>">
                            <input type="text" class="form-control" id="no_pesanan" name="no_pesanan" value="<?= user()->id; ?>">
                            <input type="text" class="form-control" id="id_user" name="id_user" value="<?= user()->id; ?>">
                        </div>
                        <thead>
                            <tr>
                                <td>Dari Tanggal</td>
                                <td>Sampai Tanggal</td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <td><input type="date" name="dari_tgl" required="required"></td> -->
                            <!-- <td><input type="date" name="sampai_tgl" required="required"></td> -->
                            <td><input type="date" name="dari_tgl" required="required"></td>
                            <td><input type="date" name="sampai_tgl" required="required"></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Ultah
                                    </label>
                                </div>
                            </td>
                            <td><input type="submit" class="btn btn-primary" name="filter" value="Buat Pesanan"></td>
                        </tbody>
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
                    </table>
                </form>
                <!-- end Filter Tanggal -->


            </div>
        </div>
    </div>
    <!-- /.card-body -->



</div>
<?= $this->endSection(); ?>