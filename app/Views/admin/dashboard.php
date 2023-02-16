<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <div class="col-md-3">
        <a href="<?= base_url('admin/promosi'); ?>" class="btn btn-primary btn-block mb-3">Kirim Email Promosi</a>
    </div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Komentar</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-10">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Komentar Masuk</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search Mail">
                                <div class="input-group-append">
                                    <div class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="mailbox-controls">
                            <!-- Check all button -->
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-reply"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <div class="float-right">
                                1-50/200
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.float-right -->
                        </div>
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="icheck-primary">
                                                <input type="checkbox" value="" id="check1">
                                                <label for="check1"></label>
                                            </div>
                                        </td>
                                        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                        <td class="mailbox-name"><a href="<?= base_url('admin/read_mail'); ?>">Nagato</a></td>
                                        <td class="mailbox-subject"><b>Tentang Website</b> - Kon'nichiwa
                                        </td>
                                        <td class="mailbox-attachment"></td>
                                        <td class="mailbox-date">5 mins ago</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheck-primary">
                                                <input type="checkbox" value="" id="check2">
                                                <label for="check2"></label>
                                            </div>
                                        </td>
                                        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                        <td class="mailbox-name"><a href="read-mail.html">Yahiko</a></td>
                                        <td class="mailbox-subject"><b>Ini Judul Komentar</b> - Ini Isi Komentar
                                        </td>
                                        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                        <td class="mailbox-date">28 mins ago</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheck-primary">
                                                <input type="checkbox" value="" id="check3">
                                                <label for="check3"></label>
                                            </div>
                                        </td>
                                        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                        <td class="mailbox-name"><a href="read-mail.html">Konan</a></td>
                                        <td class="mailbox-subject"><b>I can see you</b> - Try The Balala
                                        </td>
                                        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                        <td class="mailbox-date">11 hours ago</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="icheck-primary">
                                                <input type="checkbox" value="" id="check4">
                                                <label for="check4"></label>
                                            </div>
                                        </td>
                                        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                        <td class="mailbox-name"><a href="read-mail.html">Akatsuki Team</a></td>
                                        <td class="mailbox-subject"><b>Tes Komentar</b> - Oke
                                        </td>
                                        <td class="mailbox-attachment"></td>
                                        <td class="mailbox-date">15 hours ago</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer p-0">
                        <div class="mailbox-controls">
                            <!-- Check all button -->
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                                <i class="far fa-square"></i>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-reply"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <div class="float-right">
                                1-50/200
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.float-right -->
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?= $this->endSection(); ?>