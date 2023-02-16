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
                                <h3 class="card-title">Kirim Email Promosi ke Pelanggan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <form class="form-horizontal" action="#<?= $barang['id'] ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="nama_pengirim">Nama Barang</label>
                                        <input class="form-control" id="nama_pengirim" name="nama_pengirim" value="<?= $barang['nama_brg'] ?>">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="email_pengirim">Email Pengirim</label>
                                        <input class="form-control" id="email_pengirim" name="email_penerima" placeholder="Masukan Email Pengirim">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="nama_pelanggan">Nama Pelanggan</label>
                                        <select class="form-select" id="nama_pelanggan" name="nama_pelanggan" aria-label="Default select example">
                                            <option selected>Pilih Penerima</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <!-- Email Pelanggan -->
                                    <!-- <div class="form-group">
                                        <label for="email_pelanggan">Email Pelanggan</label>
                                        <input class="form-control" id="email_pelanggan" name="email_pelanggan" placeholder="Masukan Email Pelanggan">
                                    </div> -->

                                    <div class="form-group">
                                        <label for="pesan_promosi">Isi Pesan</label>
                                        <input id="pesan_promosi" name="pesan_promosi" class="form-control" rows="4" value="Selamat Pagi Kakak. DS Photography ada produk baru nih -<?= $barang['nama_brg'] ?>- yang akan mulai kami sewakan mulai hari ini."></textarea>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button action='promosi/sendEmail' type="submit" class="btn btn-primary">Kirim</button>
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