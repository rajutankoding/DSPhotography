<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Komentar</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-2">
                <div class="container-fluid">
                    <div class="d-grid gap-2">
                        <a href="<?= base_url('admin/dashboard'); ?>" class="btn btn-primary btn-block mb-3">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Isi Komentar</h3>

                            <div class="card-tools">
                                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <!-- <h5>Message Subject Is Placed Here</h5> -->
                                <h5>Tentang Website</h5>
                                <h6>From: nagato@support.com
                                    <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span>
                                </h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <div class="mailbox-controls with-border text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm" data-container="body" title="Reply">
                                        <i class="fas fa-reply"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm" data-container="body" title="Forward">
                                        <i class="fas fa-share"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm" title="Print">
                                    <i class="fas fa-print"></i>
                                </button>
                            </div>
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <p>Kon'nichiwa,</p>

                                <p>Kore ga komento no naiyodesu</p>

                                <!-- <p>Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale chips vegan PBR&amp;B
                                    literally Thundercats +1. Forage tilde four dollar toast, banjo health goth paleo butcher. Four dollar
                                    toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle gluten-free health goth
                                    umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi sriracha dreamcatcher PBR&amp;B
                                    flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next level. Cold-pressed
                                    slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation lumbersexual crucifix.
                                    Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit irony mumblecore
                                    whatever viral Truffaut.</p>

                                <p>Post-ironic shabby chic VHS, Marfa keytar flannel lomo try-hard keffiyeh cray. Actually fap fanny
                                    pack yr artisan trust fund. High Life dreamcatcher church-key gentrify. Tumblr stumptown four dollar
                                    toast vinyl, cold-pressed try-hard blog authentic keffiyeh Helvetica lo-fi tilde Intelligentsia. Lomo
                                    locavore salvia bespoke, twee fixie paleo cliche brunch Schlitz blog McSweeney's messenger bag swag
                                    slow-carb. Odd Future photo booth pork belly, you probably haven't heard of them actually tofu ennui
                                    keffiyeh lo-fi Truffaut health goth. Narwhal sustainable retro disrupt.</p>

                                <p>Skateboard artisan letterpress before they sold out High Life messenger bag. Bitters chambray
                                    leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American Apparel twee. American
                                    Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic synth Tumblr viral
                                    plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof party tousled squid
                                    vinyl. Readymade next level literally trust fund. Distillery master cleanse migas, Vice sriracha
                                    flannel chambray chia cronut.</p>

                                <p>Thanks,<br>Jane</p> -->
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-footer -->
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>
                                <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>
                            </div>
                            <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
                            <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                        </div>
                        <!-- /.card-footer -->
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