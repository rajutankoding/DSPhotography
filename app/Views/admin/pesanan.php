<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<div class="card">
    <div class="card-body">
        <h1 class="h3 mb-2 text-gray-800">Pesanan Pelanggan</h1>
        <!-- <h5 class="text-danger">Pastikan Pesanan sudah ada di Riwayat sebelum menekan tombol "Selesai"</h5> -->
        <form method="post" action="<?= base_url(); ?>/pesanan/bayar1/">
            <div class="input-group mb-3 mt-3 col-md-5">
                <input type="text" class="form-control" name="no_pesanan" id="no_pesanan" placeholder="Nomor Pesanan" aria-label="Nomor Pesanan" aria-describedby="no_pesanan">
                <button class="btn btn-outline-secondary" type="submit" id="no_pesanan">Cari</button>
                <a href="<?= base_url(); ?>/pesanan/bayar" class="btn btn-outline-info">Refresh</a>
            </div>
        </form>
        <a class="btn btn-outline-success" data-toggle="modal" data-target="#pesan">Kirim Pesan Konfirmasi Pembayaran</a>
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>No.Pesanan</th>
                    <th>Pemesan</th>
                    <th>Barang</th>
                    <th>Dari.Tgl</th>
                    <th>Sampai.Tgl</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                <?php foreach ($tanggal as $p) : {
                        $total += $p['harga'];
                        $wa = $p['wa'];
                        $dell = $p['id'];
                    } ?>
                    <tr>
                        <td>DSVA-<?= $p['no_pesanan']; ?></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['barang']; ?></td>
                        <td><?= $p['tgl_pesan']; ?></td>
                        <td><?= $p['tgl_kembali']; ?></td>
                        <td>Rp.<?= number_format($p['harga']); ?></td>
                        <td>
                            <a href="#" class="btn 
                            <?php if ($p['status'] == null) {
                                echo "btn-warning btn-sm";
                            } else if ($p['status'] == 1) {
                                echo "btn-success btn-sm";
                            } ?>
                            "></a>
                        </td>
                        <td>
                            <form class="form-horizontal" action="/barang/updatePesanan/<?= $p['id']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group row visually-hidden">
                                    <label for="id_barang" class="col-sm-2 col-form-label">Id User</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?= $p['id_brg']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row visually-hidden">
                                    <label for="id_user" class="col-sm-2 col-form-label">Id User</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $p['id_user']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row visually-hidden">
                                    <label for="pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="pelanggan" name="pelanggan" value="<?= $p['nama']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row visually-hidden">
                                    <label for="no_pesanan" class="col-sm-2 col-form-label">Nomor Pesanan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="no_pesanan" name="no_pesanan" value="<?= $p['no_pesanan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row visually-hidden">
                                    <label for="barang" class="col-sm-2 col-form-label">Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="barang" name="barang" value="<?= $p['barang']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row visually-hidden">
                                    <label for="harga_brg" class="col-sm-2 col-form-label">Harga Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_brg" name="harga_brg" value="<?= $p['harga']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row visually-hidden">
                                    <label for="tgl_pesan" class="col-sm-2 col-form-label">Tgl Pesan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tgl_pesan" name="tgl_pesan" value="<?= $p['tgl_pesan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row visually-hidden">
                                    <label for="tgl_kembali" class="col-sm-2 col-form-label">Tgl Selesai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $p['tgl_kembali']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row visually-hidden">
                                    <label for="status" class="col-sm-2 col-form-label visually-hidden">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="status" name="status" value="1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <?php if ($p['status'] == null) {
                                            echo '<button type="submit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#statusModal">Dibayar</button>';
                                        } ?>
                                        <a class="btn btn-danger btn-sm" href="<?= base_url('pesanan/delete/' . $dell); ?>"><i></i>Batal</a>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tbody class="table-info">
                <tr>
                    <td colspan="5">Total Harga</td>
                    <td colspan="3">Rp<?= number_format($total) ?></td>
                </tr>
            </tbody>
            <tbody class="table-success">
                <tr>

                    <td colspan="8">
                        <div class="card-body">
                            <form class="form-horizontal" action="/barang/kirim" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group row visually-hidden">
                                    <label for="nama_pengirim">Nomor Tujuan</label>
                                    <input class="form-control" id="nomor" name="nomor" value="<?= $wa; ?>">
                                </div>

                                <div class="form-group row visually-hidden">
                                    <label for="pesan_promosi">Isi Pesan</label>
                                    <input id="pesan_promosi" name="pesan_promosi" class="form-control" rows="4" value="Terimakasih Anda sudah melakukan Pembayaran kepada *DS Photography* sesuai dengan nomor pesanan anda."></textarea>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <label for="konfirm">Tekan Konfirm Untun Kirim Pesan Konfirmasi Kepada Pelanggan --></label>
                                    <button type="submit" id="konfirm" name="konfirm" class="btn btn-success btn-sm" data-toggle="modal" data-target="#riwayatModal">Konfirm</button>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>


<!-- Status Modal-->
<!-- <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Status.</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Disewa" jika barang sudah diambil ( ) Pilih "Selesai" jika barang sudah dikembalikan.</div>
            <div class="modal-footer">
                <a class="btn btn-success" name="status" value="success" href="<?= base_url('pesanan/status'); ?>">Disewa</a>
                <a class="btn btn-primary" href="<?= base_url('pesanan/hapusstatus'); ?>">Selesai</a>
            </div>
        </div>
    </div>
</div> -->
<div class="modal fade" id="riwayatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mengirim Pesan Konfirmasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Sedang mengirim pesan.....</div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="#statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dikonfirmasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Mengubah status pembayaran</div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>