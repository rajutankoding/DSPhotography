<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="container-fluid">
    <!-- Main content -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Barang</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/barang/tambah" method="post">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_brg">Nama Barang</label>
                    <input class="form-control" id="nama_brg" name="nama_brg" placeholder="Masukan Nama Barang" autofocus>
                </div>
                <div class="form-group">
                    <label for="kategori_brg">Kategori</label>
                    <input class="form-control" id="kategori_brg" name="kategori_brg" placeholder="Kategori">
                </div>
                <div class="form-group">
                    <label for="detail">Detail</label>
                    <textarea id="detail" name="detail" class="form-control" rows="4" placeholder="Masukan Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input class="form-control" id="harga" name="harga" placeholder="Harga">
                </div>
                <div class="form-group">
                    <label for="foto_brg">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto_brg" name="foto_brg">
                            <label class="custom-file-label" for="foto_brg">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
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