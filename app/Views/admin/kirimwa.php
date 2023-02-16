<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-9">
                <div class="card-body p-0">
                    <div class="container-fluid">
                        <!-- Main content -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Kirim Pesan ke Pelanggan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <form class="form-horizontal" action="/barang/kirim" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="nama_pengirim">Nomor Tujuan</label>
                                        <input class="form-control" id="nomor" name="nomor" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="pesan_promosi">Isi Pesan</label>
                                        <input id="pesan_promosi" name="pesan_promosi" class="form-control" rows="4" value=""></textarea>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                        <a href="<?= base_url('admin/dashboard'); ?>" class="btn btn-warning btn-block mb-3">Batal dan Kembali</a>
                    </div>
                </div>
    </section>
</div>
<?= $this->endSection(); ?>