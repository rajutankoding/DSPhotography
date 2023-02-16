<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Daftar Barang</h1>
    <a class="btn btn-info mb-2" href="<?= base_url('barang/tambah_brg'); ?>"><i class="fas fa-fw fa-plus"></i> Tambah Barang</a>
    <table id="myTable" class="table table-striped table-bordered mw-100">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Gambar</th>

                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barang as $b) : ?>
                <tr class="text-left">
                    <td><?= $b['id'] ?></td>
                    <td><?= $b['nama_brg'] ?></td>
                    <td>
                        <div class="long"><?= $b['kategori_brg'] ?></div>
                    </td>
                    <td>
                        <div class="long"><?= $b['detail'] ?></div>
                    </td>
                    <td><img src="<?= base_url('/img/barang/' . $b['foto_brg']); ?>" class="img-thumbnail" alt="..."></td>
                    <td><?= $b['harga'] ?></td>
                    <td><?= $b['stock_brg'] ?></td>
                    <td>
                        <a class="btn btn-info mt-2 btn-sm" href="<?= base_url('barang/editbarang/' . $b['id']); ?>"><i></i>Ubah</a>
                        <a class="btn btn-danger mt-2 mb-2 btn-sm" href="<?= base_url('barang/delete/' . $b['id']); ?>"><i></i>Hapus</a>
                        <a class="btn btn-success mt-2 btn-sm" href="<?= base_url('barang/promosi/' . $b['id']); ?>"><i></i>Promosikan</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<script>
    function hapus(id) {
        pesan = confirm('Jika dihapus anda harus memasukan ulang data !!');
        if (pesan) {
            window.location.herf = ("<?= base_url('barang/hapus/' . $b['id']); ?>")
        } else return false;
    }
</script>



<?= $this->endSection(); ?>