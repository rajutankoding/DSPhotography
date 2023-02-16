<?= $this->extend('templates/index'); ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Project Add</title>

<?= $this->section('page-content'); ?>
<div class="container-fluid">



    <!-- Main content -->
    <section class="content" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Barang</h3>

                        <div class="card-tools">
                            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Nama Barang</label>
                            <input type="text" id="nama_brg" name="nama_brg" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Kategori</label>
                            <input type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Detail</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputClientCompany">Harga</label>
                            <input type="text" id="inputClientCompany" class="form-control">
                        </div>
                        <label for="inputClientCompany">Tambahkan Gambar</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input " id="gambar" name="gambar">

                            <label class="custom-file-label" for="Gambar">Pilih gambar..</label>
                        </div>
                        <!-- <div class="form-group">
                            <label for="inputStatus">Status</label>
                            <select id="inputStatus" class="form-control custom-select">
                                <option selected disabled>Select one</option>
                                <option>On Hold</option>
                                <option>Canceled</option>
                                <option>Success</option>
                            </select>
                        </div> -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Budget</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Estimated budget</label>
                            <input type="number" id="inputEstimatedBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputSpentBudget">Total amount spent</label>
                            <input type="number" id="inputSpentBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedDuration">Estimated project duration</label>
                            <input type="number" id="inputEstimatedDuration" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Porject" class="btn btn-success float-right">
            </div>
        </div>
    </section>
    <!-- /.content -->




    <?= $this->endSection(); ?>