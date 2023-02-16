<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row row-30">
        <div class="col-12 wow-outer">
            <div class="wow slideInDown">
                <h3 class="title-decorate title-decorate-center">Forum</h3>
            </div>
        </div>
        <div class="col-lg-8 wow-outer">
            <a href="<?= base_url('forum/tmbh_forum'); ?>" class="btn btn-primary btn-sm">Tambah Topik</a>
        </div>
    </div>
    <div class="row no-gutters">
        <table class="table table-hover text-nowrap" id="table_pelanggan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Topik</th>
                    <th>Penulis</th>
                    <th>Tgl Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1; ?>
                <?php foreach ($forum_topik as $t) : ?>

                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $t['judul']; ?></td>
                        <td><?= $t['penulis']; ?></td>
                        <td><?= $t['created_at']; ?></td>
                        <td><a href="<?= base_url('forum/detail/' . $t['id']); ?>" id="id" name="id" class=" btn btn-info">Lihat</a></td>
                        <td>
                            <!-- <a href=""><i class="fa fa-eye" style="font-size:20px;"></i></a> -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#table_pelanggan').DataTable();
    });
</script> -->