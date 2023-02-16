<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoice</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Catatan:</h5>
                        Silahkan klik tombol Print dibawah untuk mencetak Invoice Anda.
                    </div>


                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> DS Photography
                                    <small class="float-right">Date: 2/10/2021</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Dari
                                <address>
                                    <strong>DS.Photography</strong><br>
                                    Jl. Raya Boja<br>
                                    Gentan Kodul Rt4 Rw IV<br>
                                    <!-- Phone: (804) 123-5432<br> -->
                                    Email: dphotographys.id@gmail.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                Untuk
                                <address>
                                    <strong><?= user()->username; ?></strong><br>
                                    -<br>
                                    -<br>
                                    -<br>
                                    Email: <?= user()->email; ?>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice #007612</b><br>
                                <b>No. Pesanan:</b> 4F3S8J<br>
                                <br>
                                <!-- <b>No. Pesanan:</b> 4F3S8J<br> -->
                                <!-- <b>Payment Due:</b> 2/22/2014<br> -->
                                <!-- <b>Account:</b> 968-34567 -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Jumlah</th>
                                            <th>Barang</th>
                                            <th>Kategori</th>
                                            <th>Description</th>
                                            <th>Harga/Hari</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SONY a7 Mark III</td>
                                            <td>Kamera Mirrorles Sony</td>
                                            <td>Kamera FullFrame dari Sony Seri a</td>
                                            <td>Rp. 375.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- /.col -->
                            <div class="col-6">
                                <p class="lead">Tanggal 2/10/2021</p>

                                <!-- <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>$250.30</td>
                                        </tr>
                                        <tr>
                                            <th>Tax (9.3%)</th>
                                            <td>$10.34</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping:</th>
                                            <td>$5.80</td>
                                        </tr>
                                        <tr>
                                            <th>Total:</th>
                                            <td>$265.24</td>
                                        </tr>
                                    </table>
                                </div> -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


</div>
<?= $this->endSection(); ?>