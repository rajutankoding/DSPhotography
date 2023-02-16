<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-18">
                <div class="card-body p-0">
                    <div class="container-fluid">
                        <!-- Main content -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Kode Pembayaran Telah Terkirim</h3>
                            </div>
                            <div class="card-body">
                                <h5>Kode pembayaran bisa Kamu lihat di pesan WhatsApp kamu.</h5>
                                <span>Agar admin kami dapat memferifikasi pembayaran Kamu, mohon untuk memasukan kode pembayaran Kamu pada bagian "Berita Transfer" saat akan melakukan transfer.</span>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <?php include('WhatsappAPI.php'); // include given API class and update API credentials in it

                                $obj = new WhatsappAPI("2853", "e10e6833dda02a5458dce20f4a5f1d84ea2524a7"); // create an object of the WhatsappAPI class with your user id and api key
                                $status = $obj->send("$nomor", "$pesan"); // NOTE: Phone Number should be with country code

                                $status = json_decode($status);

                                print_r($status);
                                ?>
                            </div>
                            <!-- /.card -->

                        </div>
                        <a href="<?= base_url(); ?>/barang/cart/<?= user()->id; ?>" class="btn btn-warning btn-block mb-3">Kembali</a>
                    </div>
                </div>
    </section>
</div>
<?= $this->endSection(); ?>