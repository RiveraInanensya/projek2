<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lowongan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" href="<?= base_url('assets/css/lowongan.css'); ?>">
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
    </header>

    <div class="container job-container">
        <div class="job-listing">
            <h2>LOWONGAN MARKETING</h2>
            <hr>
            <ul class="criteria">
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Pria/Wanita min lulusan SMA/SMK.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Komunikatif.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Bekerja dengan orientasi target.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Supel dan Problem Solver.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Memiliki kemampuan analisis yang baik, kreatif dan inovatif.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Berpengalaman di bidang yang sama diutamakan.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Mampu mengoperasikan MS. Office. ‎ ‎ ‎ </li>
            </ul>
            <div class="labels">
                <div class="label">Pendaftaran</div>
                <div class="label">Wawancara</div>
                <div class="label">Pengumuman</div>
            </div>
            <div class="apply-button">
                <button>Daftar Sekarang</button>
            </div>
        </div>

        <div class="job-listing">
            <h2>LOWONGAN PROGRAMMER</h2>
            <hr>
            <ul class="criteria">
            <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Laki-laki dan belum menikah.</li>
            <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Pendidikan minimal SMK.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Attitude baik, tekun belajar, kemampuan bekerja dalam tim.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Memiliki kemampuan bahasa pemrograman PHP dan database MySQL.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Paham tentang HTML/CSS/Javascript.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Pernah membuat aplikasi berbasis website.</li>
                <li><img src="<?= base_url('assets/images/checklist.png'); ?>">Memiliki kemampuan desain.</li>
            </ul>
            <div class="labels">
                <div class="label">Pendaftaran</div>
                <div class="label">Wawancara</div>
                <div class="label">Pengumuman</div>
            </div>
            <div class="apply-button">
                <button>Daftar Sekarang</button>
            </div>
        </div>
    </div>

    
</body>

</html>
