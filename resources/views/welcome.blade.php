<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Aceh</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f8f7;
            color: #263238;
        }

        header {
            background: #087e8b;
            color: white;
            padding: 25px 8%;
        }

        header h1 {
            margin-bottom: 18px;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .hero {
            min-height: 350px;
            padding: 80px 8%;
            color: white;
            background: linear-gradient(120deg, #075985, #14b8a6);
        }

        .hero h2 {
            font-size: 38px;
            margin-bottom: 18px;
        }

        .hero p {
            line-height: 1.8;
            max-width: 600px;
            margin-bottom: 25px;
        }

        .tombol {
            display: inline-block;
            padding: 12px 22px;
            background: white;
            color: #087e8b;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .destinasi {
            padding: 45px 8%;
        }

        .destinasi h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .kartu-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 22px;
        }

        .kartu {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 12px #00000012;
        }

        .kartu img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .kartu div {
            padding: 18px;
        }

        .kartu p {
            margin-top: 10px;
            line-height: 1.6;
        }

        footer {
            background: #075985;
            color: white;
            text-align: center;
            padding: 22px;
            line-height: 1.8;
        }

        @media (max-width: 600px) {
            .hero h2 {
                font-size: 29px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Wisata Aceh</h1>

        <nav>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="#destinasi">Destinasi</a>
            <a href="{{ url('/peta') }}">Peta</a>
            <a href="{{ url('/rekomendasi') }}">Rekomendasi</a>
            <a href="{{ url('/login') }}">Login</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Jelajahi Keindahan Aceh</h2>

        <p>
            Temukan berbagai destinasi wisata menarik di Aceh,
            mulai dari pantai yang indah, bangunan bersejarah,
            hingga tempat wisata alam yang memukau.
        </p>

        <a href="#destinasi" class="tombol">
            Jelajahi Destinasi
        </a>
    </section>

    <section class="destinasi" id="destinasi">
        <h2>Destinasi Wisata Populer</h2>

        <div class="kartu-container">

            <article class="kartu">
                <img
                    src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80"
                    alt="Pantai">
                <div>
                    <h3>Pantai Lampuuk</h3>
                    <p>
                        Nikmati pemandangan pantai dan suasana
                        alam yang menenangkan.
                    </p>
                </div>
            </article>

            <article class="kartu">
                <img
                    src="https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=800&q=80"
                    alt="Bangunan wisata">
                <div>
                    <h3>Museum Tsunami Aceh</h3>
                    <p>
                        Pelajari sejarah tsunami Aceh melalui
                        museum yang penuh nilai edukasi.
                    </p>
                </div>
            </article>

            <article class="kartu">
                <img
                    src="https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?auto=format&fit=crop&w=800&q=80"
                    alt="Pemandangan alam">
                <div>
                    <h3>Wisata Alam Aceh</h3>
                    <p>
                        Jelajahi pesona alam Aceh yang kaya
                        akan keindahan dan keanekaragaman.
                    </p>
                </div>
            </article>

        </div>
    </section>

    <footer>
        <p>Website Informasi Pariwisata Aceh</p>
        <p>Dibuat sebagai proyek pembelajaran Laravel</p>
    </footer>

</body>
</html>