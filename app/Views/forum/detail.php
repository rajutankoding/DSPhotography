<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row row-30">
        <div class="card">
            <div class="card-header">
                <h4>Forum</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <?php foreach ($forum as $t) : ?>
                                <?php endforeach; ?>
                                <h3>
                                    <div class="img-thumbnail">
                                        <img class="img-thumbnail" width="40px" src="/img/<?= $t->user_image; ?>">
                                        <?= $t->judul; ?>
                                    </div>
                                </h3>
                                <th>Penulis</th>
                                <th>Balasan</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <p class="fs-4">
                                    Balasan
                                </p>
                            </tr>
                            <tr>
                                <?php foreach ($join as $t) : ?>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img class="img-thumbnail" width="40px" src="/img/<?= $t['user_image']; ?>">
                                            </div>
                                            <p class="font-bold ms-3 mb-0"><?= $t['nama_user']; ?></p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"><?= $t['isi']; ?></p>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0"><?= $t['created_at']; ?></p>
                                    </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a data-toggle="modal" data-target="#komentar" class="btn btn-outline-primary">Tambahkan Komentar</a>
                </div>
            </div>
        </div>
    </div>
</div>


<form action="/forum/tambah_komen" method="post">
    <?= csrf_field(); ?>
    <div class="modal" tabindex="-1" id="komentar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tulis Komentar</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <label for="pesan_komentar" class="form-label">Masukan Komentar</label>
                    <input type="text" class="form-control" id="isi" name="isi" autofocus>
                    <input class="form-control visually-hidden" id="user_id" name="user_id" value="<?= user()->id; ?>">
                    <input class="form-control visually-hidden" id="penulis" name="penulis" value="<?= user()->username; ?>">
                    <?php foreach ($forum as $t) : ?>
                        <input class="form-control visually-hidden" id="topik" name="topik" value="<?= $t->id; ?>">
                    <?php endforeach; ?>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>