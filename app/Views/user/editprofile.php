<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="<?= user()->username; ?>">
                            </div>

                            <h3 class="profile-username text-center"><?= user()->username; ?></h3>

                            <p class="text-muted text-center"><?= user()->email; ?></p>
                            <p class="text-muted text-center"><?= user()->fullname; ?></p>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">

                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-danger alert-dismissable fade show" rolw="alert">
                                    <h4>Tolong Periksa Kembali</h4>
                                    </hr />
                                    <?php echo session()->getFlashdata('error'); ?>
                                    <buton type="buttom" class="close" data-dismiss="alert" arial-label="Close">
                                        <span arial-hidden="true">$times;</span>
                                    </buton>
                                </div>
                            <?php endif; ?>

                            <div class="tab-content">
                                <div class="active tab-pane" id="settings">
                                    <form class="form-horizontal" action="/user/editdata/<?= user()->id; ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="form-group row">
                                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="username" name="username" readonly value="<?= user()->username; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="<?= user()->fullname; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="no_wa" class="col-sm-2 col-form-label">No.WhatsApp</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_wa" name="no_wa" value="<?= user()->no_wa; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputemail" name="inputemail" readonly value="<?= user()->email; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password" name="password" value="<?= user()->password_hash; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Ubah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection(); ?>