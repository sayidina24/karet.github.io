<?php
// Memuat konten dari header.html yang berada di folder layout
include 'layout/header.html';
?>
<main style="padding: 10px; max-width: 100%; margin: 0px auto; background-color: #EFFAFD; border: 1px solid #CCCCCC;">

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/slide1.jpg" style="width:100%">
            </div>

        <div class="mySlides fade">
            <img src="img/slide2.jpg" style="width:100%">
            </div>

        <div class="mySlides fade">
            <img src="img/slide3.jpg" style="width:100%">
            </div>

        <div class="mySlides fade">
            <img src="img/slide4.jpg" style="width:100%">
            </div>

        <div class="mySlides fade">
            <img src="img/slide5.jpg" style="width:100%">
            </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>

    <h2 style="color: #336699; text-align: center; font-family: serif;">Selamat Datang di Beranda Kami!</h2>
    <p style="text-align: justify; margin-bottom: 15px; font-family: sans-serif;">Ini adalah halaman utama situs web kami. Jelajahi bagian lain untuk mengetahui lebih banyak tentang produk dan layanan kami.</p>
    <p style="text-align: justify; margin-bottom: 15px; font-family: sans-serif;">Kami bangga menjadi <strong style="color: #008000;">spesialis dalam parts karet</strong>, menyediakan kopling, flange, engine mounting, seal, O-ring, elastomer, dan juga menerima pesanan custom.</p>
    <p style="text-align: center; font-family: sans-serif; font-style: italic;">Silakan gunakan navigasi di atas untuk menjelajahi situs kami.</p>

    <br>
    <div style="text-align: center; margin-top: 20px; padding-bottom: 20px;">
        <a href="https://wa.me/6285888842655?text=Halo%2C%20saya%20tertarik%20dengan%20produk%20karet%20Anda."
           style="display: inline-block; padding: 10px 20px; background-color: #25D366; color: white; text-decoration: none; font-weight: bold; border: 1px solid #1DA851; border-radius: 4px; font-family: sans-serif; margin: 5px;"
           target="_blank">WhatsApp Kami</a>

        <a href="https://shopee.co.id/dkt_sby#product_list"
           style="display: inline-block; padding: 10px 20px; background-color:rgba(255, 77, 12, 0.89); color: white; text-decoration: none; font-weight: bold; border: 1px solid #CC3B20; border-radius: 4px; font-family: sans-serif; margin: 5px;"
           target="_blank">Belanja di Shopee</a>

        <a href="https://www.tokopedia.com/dktsby/product"
           style="display: inline-block; padding: 10px 20px; background-color: #42B549; color: white; text-decoration: none; font-weight: bold; border: 1px solid #36953C; border-radius: 4px; font-family: sans-serif; margin: 5px;"
           target="_blank">Belanja di Tokopedia</a>
    </div>
   <hr>
<h3>Apa Kata Pelanggan Kami?</h3>
<div style="text-align: center;">
    <p>Lihat pengalaman belanja mereka di toko kami:</p>

    <div style="
        display: flex; /* Mengaktifkan Flexbox */
        flex-wrap: wrap; /* Memungkinkan kolom untuk pindah ke baris baru di layar kecil */
        justify-content: center; /* Memusatkan kontainer secara horizontal */
        gap: 30px; /* Jarak antara kolom Shopee dan Tokopedia */
        max-width: 1200px; /* Lebar maksimum kontainer keseluruhan */
        margin: 0 auto; /* Pusatkan kontainer keseluruhan */
    ">

        <div style="
            flex: 1 1 calc(50% - 15px); /* Lebar 50% dikurangi setengah dari gap */
            min-width: 300px; /* Lebar minimum sebelum pindah ke satu kolom */
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba[0,0,0,0.1];
            box-sizing: border-box; /* Pastikan padding termasuk dalam lebar */
            text-align: center; /* Pusatkan gambar ulasan */
        ">
            <h4 style="color: #FF5722; margin-top: 0;">Ulasan dari Shopee</h4>

            <div class="ulasan-item" style="margin-bottom: 20px;">
                <img src="img/ulasan shopee1.png" alt="Ulasan Shopee Pembeli A" style="width: 100%; max-width: 600px; height: auto; border-radius: 5px; border: 1px solid #ddd;">
            </div>

            <div class="ulasan-item" style="margin-bottom: 20px;">
                <img src="img/ulasan shopee2.png" alt="Ulasan Shopee Pembeli B" style="width: 100%; max-width: 600px; height: auto; border-radius: 5px; border: 1px solid #ddd;">
            </div>

            <div class="ulasan-item" style="margin-bottom: 0;">
                <img src="img/ulasan shopee3.png" alt="Ulasan Shopee Pembeli C" style="width: 100%; max-width: 600px; height: auto; border-radius: 5px; border: 1px solid #ddd;">
            </div>

            <p style="margin-top: 25px; text-align: center; font-size: 0.9em;">
                <a href="https://shopee.co.id/buyer/87491238/rating?shop_id=87489760" target="_blank" style="color: #007bff; text-decoration: none;">Lihat lebih banyak ulasan di Shopee &raquo;</a>
            </p>
        </div>

        <div style="
            flex: 1 1 calc(50% - 15px); /* Lebar 50% dikurangi setengah dari gap */
            min-width: 300px; /* Lebar minimum sebelum pindah ke satu kolom */
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba[0,0,0,0.1];
            box-sizing: border-box;
            text-align: center; /* Pusatkan gambar ulasan */
        ">
            <h4 style="color: #4CAF50; margin-top: 0;">Ulasan dari Tokopedia</h4>

            <div class="ulasan-item" style="margin-bottom: 20px;">
                <img src="img/ulasan tokped1.png" alt="Ulasan Tokopedia Pembeli X" style="width: 100%; max-width: 600px; height: auto; border-radius: 5px; border: 1px solid #ddd;">
            </div>

            <div class="ulasan-item" style="margin-bottom: 20px;">
                <img src="img/ulasan tokped2.png" alt="Ulasan Tokopedia Pembeli Y" style="width: 100%; max-width: 600px; height: auto; border-radius: 5px; border: 1px solid #ddd;">
            </div>

            <div class="ulasan-item" style="margin-bottom: 0;">
                <img src="img/ulasan tokped3.png" alt="Ulasan Tokopedia Pembeli Z" style="width: 100%; max-width: 600px; height: auto; border-radius: 5px; border: 1px solid #ddd;">
            </div>

            <p style="margin-top: 25px; text-align: center; font-size: 0.9em;">
                <a href="https://www.tokopedia.com/dktsby/review" target="_blank" style="color: #007bff; text-decoration: none;">Lihat lebih banyak ulasan di Tokopedia &raquo;</a>
            </p>
        </div>

    </div>
    <p style="margin-top: 40px; font-size: 1.1em; color: #333;">Tertarik dengan produk kami? <a href="https://wa.me/6285888842655?text=Halo%2C%20saya%20tertarik%20dengan%20produk%20BAUT%20FCL%20200%20/%20F4%20Anda." style="color: #007bff; text-decoration: none; font-weight: bold;">Hubungi kami</a> untuk konsultasi atau pemesanan custom!</p>
</div>

</main> 

<?php
// Memuat konten dari footer.html yang berada di folder layout
include 'layout/footer.html';
?>