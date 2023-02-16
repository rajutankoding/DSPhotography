<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <?php if (in_groups('admin')) : ?>

            <!-- Nav Item - Alerts -->
            <!-- <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    
                    <span class="badge badge-danger badge-counter">3+</span>
                </a> -->
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
            </li>
        <?php endif; ?>

        <!-- Nav Item - Messages -->
        <?php if (in_groups('user')) : ?>
            <?php $keranjang = $cart->contents();
            $jml_item = 0;
            foreach ($keranjang as $key => $value) {
                $jml_item = $jml_item + $value['qty'];
            }
            ?>
            <li class="nav-item dropdown no-arrow mx-2">
                <!-- Counter - Messages -->
                <!-- <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    <span class="badge badge-danger badge-counter"><?= $jml_item ?></span>
                </a> -->
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                        Keranjang
                    </h6>
                    <?php if (empty($keranjang)) { ?>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <p>Keranjang Kosong</p>
                        </a>
                    <?php } else { ?>
                        <?php foreach ($keranjang as $key => $value) { ?>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="<?= base_url('/img/barang/' . $value['options']['gambar']); ?>" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><?= $value['name'] ?></div>
                                    <div class="small text-gray-500"><?= $value['qty'] ?> Hari</div>
                                    <div class="small text-gray-500">Harga : <?= number_format($value['qty'] * $value['price']) ?></div>
                                </div>
                            </a>
                        <?php } ?>
                        </a>
                        <a class="dropdown-item text-center" href="#">Total Harga : Rp.<?= number_format($cart->total()); ?> </a>
                        <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('barang/cart'); ?>">Lihat Keranjang Belanja</a>
                        <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('#'); ?>">Buat Pesanan</a>
                </div>
            </li>
        <?php } ?>
    <?php endif; ?>
    <div class="topbar-divider d-none d-sm-block"></div>


    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->username; ?></span>
            <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="<?= user()->username; ?>">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                My Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

    </ul>

</nav>