<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="container-fluid">
    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Kirim Promosi ke Pelanggan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_pengirim">Nama Pengirim</label>
                    <input class="form-control" id="nama_pengirim" name="nama_pengirim" placeholder="Masukan Nama Pengirim">
                </div>
                <!-- <div class="form-group">
                    <label for="email_pengirim">Email Pengirim</label>
                    <input class="form-control" id="email_pengirim" name="email_penerima" placeholder="Masukan Email Pengirim">
                </div> -->
                <!-- <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukan Nama Pelanggan">
                </div> -->
                <div class="form-group">
                    <label for="email_pelanggan">Email Pelanggan</label>
                    <input class="form-control" id="email_pelanggan" name="email_pelanggan" placeholder="Masukan Email Pelanggan">
                </div>
                <div class="form-group">
                    <label for="pesan_promosi">Pesan Promosi</label>
                    <textarea id="pesan_promosi" name="pesan_promosi" class="form-control" rows="4" placeholder="Masukan Pesan yang ingin disampaikan.."></textarea>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button action='promosi/sendEmail' type="submit" class="btn btn-primary">Kirim</button>
                </div>
        </form>
    </div>
    <!-- /.card -->

</div>

<?= $this->endSection(); ?>