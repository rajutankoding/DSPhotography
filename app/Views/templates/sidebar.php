<!-- Sidebar -->
<div class="nav">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-code"></i>
            </div>
            <div class="sidebar-brand-text mx-3">DS Photography<sup></sup></div>
        </a>

        <?php if (in_groups('admin')) : ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                User Management
            </div> -->

            <!-- Nav Item - User List -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin'); ?>">
                    <i class="fas fa-users"></i>
                    <span>User List</span></a>
            </li> -->


            <!-- Heading -->
            <div class="sidebar-heading">
                DS Management
            </div>


            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->

            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('barang/managebarang'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pesanan/bayar/'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pesanan</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/invoice'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Invoice</span></a>
                </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pesanan/adminRiwayat'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Riwayat Pesanan</span></a>
            </li> -->

            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('komentar'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Komentar</span></a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('forum'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Forum</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('barang/teskirim'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Kirim Pesan</span></a>
            </li>
        <?php endif; ?>

        <?php if (in_groups('user')) : ?>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('barang/index'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Sewa Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/barang/cart/<?= user()->id; ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pesanan Saya</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('forum/index'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Forum Tanya Jawab</span></a>
            </li>
            <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('komentar/index'); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Komplain & Kritik/Saran</span></a>
                    </li> -->
            <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pelanggan/index'); ?>">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Pelanggan</span></a>
                        </li> -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle btn-sm" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- <button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false"> -->
                    Bantuan ?
                    <!-- </button> -->
                </a>
                <!-- Dropdown - User Information -->

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" data-toggle="modal" data-target="#bantuan1">Cara Pembayaran ?</a></li>
                    <li><a class="dropdown-item" data-toggle="modal" data-target="#bantuan2">Pengambilan Barang ?</a></li>
                    <li><a class="dropdown-item" data-toggle="modal" data-target="#bantuan3">Alamat Toko ?</a></li>
                </ul>

            </li>


        <?php endif; ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Profil Pengguna
        </div>

        <!-- Nav Item - My Profile -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user'); ?>">
                <i class="fas fa-user"></i>
                <span>Profil Saya</span></a>
        </li>

        <!-- Nav Item - Edit Profile
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-user-edit"></i>
                <span>Ubah Profil</span></a>
        </li> -->
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('logout'); ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>

    <div class="modal fade" id="bantuan1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cara Pembayaran ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Untuk pembayaran Kamu dapat datang langsung ke toko dengan membawa nomor pemesanan, dan nanti akan dibatu oleh admin kami.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="button" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="bantuan2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengambilan Barang ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Barang dapat diambil di toko DS Photography dengan menyebutkan Nomor Pemesanan.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="button" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="bantuan3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alamat Toko ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Toko kami beralamatkan di "Jl.Boja - Limbangan km 2 depan Indomaret".
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="button" data-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>

</div>