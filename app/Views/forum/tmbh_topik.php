<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="container-fluid">
    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Topik Forum</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/forum/tambah_topik" method="post">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="judul_topik">Apa yang ingin anda tanyakan</label>
                    <input class="form-control" id="judul_topik" name="judul_topik" placeholder="Masukan Pertanyaan / Topik Baru" autofocus>
                    <input class="form-control visually-hidden" id="user_id" name="user_id" value="<?= user()->id; ?>">
                    <input class="form-control visually-hidden" id="penulis" name="penulis" value="<?= user()->username; ?>">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

</div>

<?= $this->endSection(); ?>