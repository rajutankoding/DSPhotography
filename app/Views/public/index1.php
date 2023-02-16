<head>
    <title>My Webpage</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>\home\css\homestyle.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="https://images.unsplash.com/photo-1515111293107-b0cd6448f5f6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e4f56141064dbe63db663bb7a2c73b71&auto=format&fit=crop&w=1350&q=80">
            </div>
        </div>

        <div class="menu">
            <ul>
                <li><a href="<?= base_url('home/register'); ?>">Login</a></li>
                <li><a href="<?= base_url('home/register'); ?>">Registrasi</a></li>
            </ul>
        </div>


        <div class="content">
            <h2 style="text-align:center">DS Photography</h2>
            <div class="jumbotron">
                <div class="overlay"></div>
                <h2>Welcome to My Homepage</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor necessitatibus quae voluptate explicabo architecto fugiat asperiores illo quibusdam qui mollitia, porro fugit. Illum sapiente modi, ut harum aliquam accusamus unde.</p>
            </div>
            <h2 style="text-align:center">Penting !!!</h2>
            <p style="text-align:center">Untuk dapat mengakses menu yang lain dan membuat pesanan silahkan melakukan <a href="#">Login</a>. Jika belum mempunyai akun silahkan <a href="#">Mendaftar</a> terlebihdahulu.</p>
            </br>
            <h2 style="text-align:center">Barang Rental</h2>
            <?php foreach ($data as $b) : ?>
                <div class="thumbnail" style="width: 14rem; height: 20rem;">
                    <img src="<?= base_url('/img/barang/' . $b['foto_brg']); ?>" class="card-img-top" alt="...">
                    <h4><?= $b['nama_brg']; ?></h4>
                    <p><i>Rp. </i><?= $b['harga']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>




    <footer class="footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; DS Photography <?= date('Y')  ?></span>
            </div>
        </div>
    </footer>
</body>