<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Perusahaan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;700&display=swap">
    <link rel="stylesheet" href="assets/css/informasi.css">
    
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

    <div class="container">
        <main>
            <section class="intro">
            <a href="<?= base_url('lowongan'); ?>" class="lowongan-button">Lowongan</a>
                <div class="text-container">
                    <h1>PT. INDO TECHNO MEDIC</h1>
                    <p>Merupakan perusahaan yang bergerak dibidang Perdagangan Barang / Jasa khususnya dalam pengembangan Sistem Informasi Rumah Sakit baik dalam lingkungan pemerintah maupun swasta.</p>
                    <p class="location">
                        <i class="fas fa-map-marker-alt"></i> <strong>Lokasi:</strong> Jl. Menayu Lor, Menayu Lor, Tirtonirmolo, Kec. Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31621.31200453446!2d110.337367!3d-7.825342!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57be69a0c55d%3A0x4aae052d50c1fb86!2sPT.%20INDO%20TECHNO%20MEDIC!5e0!3m2!1sen!2sid!4v1722305519153!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p>
                        <i class="fas fa-phone"></i> <strong>Telepon:</strong> +62 856 4158 4013
                    </p>
                    <p>
                        <i class="fas fa-envelope"></i> <strong>Email:</strong> info@technomedic.id
                    </p>
                </div>
                <div class="contact-form-container">
               
    <div class="contact-form">
    <form action="<?php echo site_url('informasi/submit'); ?>" method="post">
        <h1>Hubungi Kami</h1>
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit" id="tombol" onclick="Swal.fire('Pesan', 'Berhasil Dikirim!', 'success')">Send</button>
        <script src="<?=base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    </form>
    
    </div>
</div>

            </section>
        </main>
    </div>
</body>

</html>
