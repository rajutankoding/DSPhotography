<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <div class="row">
        <div class="card-header">
            Edit Barang
        </div>
        <!-- <div class="col-md-8 offset-md-2"> -->
        <div class="col-md-8">
            <form class="form-horizontal" action="/barang/updateBarang/<?= $barang['id'] ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <input type="hidden" class="form-control w-25" id="id" name="id" value="<?= $barang['id'] ?>">
                </div>
                <div class="form-group">
                    <label for="nama_brg">Nama</label>
                    <input type="text" class="form-control" id="nama_brg" name="nama_brg" placeholder="Nama Barang" value="<?= $barang['nama_brg'] ?>">

                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= $barang['harga'] ?>">

                </div>
                <div class="form-group">
                    <label for="stock_brg">Stok Barang</label>
                    <input type="text" class="form-control" id="stock_brg" name="stock_brg" placeholder="Stok Barang" value="<?= $barang['stock_brg'] ?>">

                </div>
                <div class="form-group">
                    <label for="kategori_brg">Kategori</label>
                    <input type="text" class="form-control" id="kategori_brg" name="kategori_brg" placeholder="Kategori" value="<?= $barang['kategori_brg'] ?>">

                </div>
                <div class="form-group">
                    <label for="detail">Detail</label>
                    <textarea class="form-control" id="detail" rows="3" name="detail" placeholder="Detail"><?= $barang['detail'] ?></textarea>

                </div>
                <?php
                if (isset($_FILES['userfile']) == 0) {
                }
                ?>

                <img src="<?= base_url('/img/barang/' . $barang['foto_brg']); ?>" class="img-thumbnail" alt="...">

                <div class="form-group">
                    <label for="image" class="mt-4">Ganti Gambar</label>
                    <input type="file" class="form-control-file" id="foto_brg" value="<?= $barang['foto_brg']; ?>" name="foto_brg">
                </div>
                <button type="submit" class="btn btn-primary mb-4 mt-3">Submit</button>
                <a class="btn btn-secondary mb-4 mt-3" href="<?= base_url('#'); ?>">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>