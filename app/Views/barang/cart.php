<table class="table-info">

    <?= $this->extend('templates/index'); ?>

    <?= $this->section('page-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Pesanan Saya</h1>
        <!-- <a data-toggle="modal" data-target="#komentar" class="btn btn-outline-primary">Kirim Ulasan / Kritikk & Saran Untuk DS Photography</a> -->
        </br>
        <a>Barang yang sudah dipesan melalui website, dapat diambil di Toko "DS Photography".</a>

        <?php $keranjang = $cart->contents();
        $jml_item = 0; ?>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-100%">
                <!-- <table class="table table-info">
                    <thead>
                        <tr>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <?php foreach ($keranjang as $key => $value) : {
                            $jml_item = $jml_item + $value['qty'];
                        }  ?>
                        <tbody>
                            <tr>
                                <td><?= $value['name'] ?></td>
                                <td>
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded d-block" style="max-width: 40px;" src="<?= base_url('/img/barang/' . $value['options']['gambar']); ?>" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                </td>
                                <td><?= $value['qty'] ?> Hari</td>
                                <td>Rp.<?= number_format($value['qty'] * $value['price']) ?></td>
                                <td><a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#hapusModal"><i></i>Batal</a></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table> -->
                <table class="table table-info">
                    <thead>
                        <tr>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Dari Tanggal</th>
                            <th scope="col">Sampai</th>
                            <th scope="col">Total</th>

                        </tr>
                    </thead>
                    <?php
                    $total = 0;
                    ?>
                    <?php foreach ($pesanan as $t) : {
                            $total += $t['harga'];
                        } ?>
                        <tbody>
                            <tr>
                                <td><?= $t['nama_brg'] ?></td>
                                <td>
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded d-block" style="max-width: 40px;" src="<?= base_url('/img/barang/' . $t['foto_brg']); ?>" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                </td>
                                <td><?= $t['tgl_pesan'] ?></td>
                                <td><?= $t['tgl_kembali'] ?></td>
                                <td id="satuan" name="satuan"><?= number_format($t['harga']) ?></td>

                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                    <tbody class="table-danger">
                        <tr>
                            <td colspan="4">Total Harga</td>
                            <td>Rp<?= number_format($total) ?></td>
                        </tr>
                    </tbody>
                    <tbody class="table-light">
                        <td colspan="4"><a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#pesananModal"><i></i>Buat Pesanan</a></td>
                        <td><a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#hapusModal"><i></i>Batalkan Pesanan</a></td>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Hapus Modal-->
    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Batalkan Pesanan ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Jika anda membatalkan Pesanan Anda, Anda harus membuat Pesanan kembali untuk melakukan sewa barang! Pilih "Batalkan Pesanan" untuk membatalkan Pesanan.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                    <a class="btn btn-primary" href="<?= base_url('barang/clear/' . user()->id); ?>">Batalkan Pesanan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="pesananModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Pesanan ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Kamu akan mendapatkan kode pembayaran melalui pesan WhatsApp dari "DS Photography".
                </div>
                <form class="form-horizontal" action="/barang/kirimp" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row visually-hidden">
                        <label for="nomor">Nomor Tujuan</label>
                        <input class="form-control" id="nomor" name="nomor" value="<?= user()->no_wa; ?>">
                    </div>

                    <div class="form-group row visually-hidden">
                        <label for="pesan_promosi">Isi Pesan</label>
                        <input id="pesan_promosi" name="pesan_promosi" class="form-control" rows="4" value="Terimakasih sudah memesan perlengkapan Fotografi di *DS Photography* berikut adalah kode pembayaran kamu *DSVA-<?= user()->id; ?>*. Untuk pembayaran bisa dilakukan melalui transfer BCA(12739172) atau OVO(39358081226123378)"></textarea>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <span>Ubah di Profile Saya jika ini bukan nomor Kamu "<?= user()->no_wa; ?>"</span>
                        <label for="konfirm">Tekan Konfirm Untun Mengirim --></label>
                        <button type="submit" id="konfirm" name="konfirm" class="btn btn-success btn-sm" data-toggle="modal" data-target="#riwayatModal">Konfirm</button>
                    </div>
                </form>
                <div class="modal-footer">
                    <span class="table-warning">
                        Nomor Pesanan akan dikirim setelah tombol "Konfirm" diklik.
                    </span>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                    <form action="/barang/updatep" method="post">
                        <?= csrf_field(); ?>
                        <input class="form-control visually-hidden" id="no_pesanan" name="no_pesanan" value="DPS<?= user()->id; ?>">
                        <!-- <button type="submit" class="btn btn-success">Buat Pesanan</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>


</table>