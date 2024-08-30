<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Produk Dan Layanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" href="<?= base_url('assets/css/produk.css'); ?>">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="<?= base_url('assets/images/logo.png'); ?>" alt="Techno Medic Logo">
                <h1>Techno Medic</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="<?= base_url('home'); ?>">Home</a></li>
                    <li><a href="<?= base_url('informasi'); ?>">Informasi</a></li>
                    <li><a href="<?= base_url('produk'); ?>">Produk & Layanan</a></li>
                    <li><a href="<?= base_url('clients'); ?>">Clients</a></li>
                    <li><a href="<?= base_url('lowongan'); ?>">Lowongan</a></li>
                </ul>
            </nav>
            <div class="social-icons">
                <a href="https://wa.me/6285641584013" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/technomedic.id" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        </div>
    </header>
    <div class="container">
        <main>
            <section class="intro">
                <div class="text-container">

                    <h1>Produk Dan Layanan</h1>
                    <p> Kami menyediakan jasa layanan Teknologi Informasi yang
                        telah bermitra dengan beberapa perusahaan Teknologi Informasi
                        yang sudah berpengalaman dan bersertifikasi. </p>
                    
                    <p>Ruang lingkup produk dan layanan kami diantaranya :</p>
                    <p><i class="fas fa-circle"></i> Sistem Informasi Manajemen Rumah Sakit (SIMRS) </p>
                    <p><i class="fas fa-circle"></i> Desktop, Web Application & Mobile Application. </p>
                    <p><i class="fas fa-circle"></i> Technical Support </p>
                    <p><i class="fas fa-circle"></i> Data Center Design & Development. </p>
                    <p><i class="fas fa-circle"></i> Infrastructure Fiber Optic Design & Development. </p>
                    <p><i class="fas fa-circle"></i> Hardware & Software. </p>
                    <p><i class="fas fa-circle"></i> System Integrator & Maintenance. </p>

                    <section class="ok">
                    <a href="<?= base_url('informasi'); ?>" class="btn">Hubungi kami</a>
                    <div class="accept-img-container"><img src="<?= base_url('assets/images/accept.png'); ?>" alt="Accept" class="accept-img">
            </section>
        </main>
    </div>
</body>

</html>