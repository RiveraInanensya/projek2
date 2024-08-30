<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>One-Stop Health Solution System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
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
                    <h2>‎ </h2>
                    <h2>One-Stop Health</h2>
                    <h2>Solution System</h2>
                    <p>Tim kami akan membantu anda untuk mempermudah 
                    pelayanan kesehatan dengan solusi yang kami miliki.</p>
                    <p>‎</p>
                    <a href="<?= base_url('informasi'); ?>" class="btn">Hubungi kami</a>
                    <div class="programming-img-container"><img src="<?= base_url('assets/images/programming.png'); ?>" alt="Programming" class="programming-img">
            </section>
        </main>
    </div>
</body>

</html>