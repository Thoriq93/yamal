<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman PHP</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: red;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            text-transform: uppercase;
        }
        .navbar {
            background-color: blue;
            height: 50px;
        }
        .content1 {
            background-color: rgba(255, 255, 0, 0.8); /* Warna kuning dengan transparansi */
            float: left;
            width: 50%;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column; /* Menyusun konten secara vertikal */
            font-size: 16px; /* Ukuran font lebih kecil */
        }
        .content1 img {
            width: 300px; /* Ubah lebar gambar menjadi 300px */
            height: 225px; /* Ubah tinggi gambar menjadi 225px */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }
        .content1 p {
            font-size: 18px;
            line-height: 1.5;
            margin-top: 20px;
        }
        .content2 {
            background-color: white;
            float: right;
            width: 50%;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column; /* Menyusun konten secara vertikal */
        }
        .content2 h2 {
            font-size: 36px;
            color: #333;
        }
        .content2 p {
            font-size: 18px;
            line-height: 1.5;
            margin-top: 20px;
        }
        .black-bar {
            background-color: black;
            height: 50px;
            clear: both;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            text-transform: uppercase;
        }
        .black-bar span {
            padding: 10px;
        }
        .footer {
            background-color: gray;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="header">Marc Márquez</div>
    <div class="navbar"></div>
    <div class="content1">
        <img src="https://via.placeholder.com/400x300" alt="Marc Márquez">
        <p>Marc Márquez adalah seorang pembalap motor Spanyol yang berkompetisi di MotoGP. Dia adalah juara dunia tujuh kali di kelas utama MotoGP, memenangkan gelar pada tahun 2013, 2014, 2016, 2017, 2018, 2019, dan 2020.</p>
    </div>
    <div class="content2">
        <h2>Selamat Datang di Halaman PHP Kreatif Kami!</h2>
        <p>Halaman ini didedikasikan untuk menginspirasi dan memberikan informasi tentang dunia PHP dan MotoGP, termasuk pembalap terkenal seperti Marc Márquez.</p>
    </div>
    <div class="black-bar"><span>Explore More</span></div>
    <div class="footer">Footer</div>
</body>
</html>