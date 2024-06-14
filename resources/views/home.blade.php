@extends('layout.main')
@section('content')
<section class="home" id="home">
    <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1><span>Khoyum Masalik</span></h1>
        <h3>And I'm a <span class="multiple-text"></span></h3>
        <p>Saya adalah seorang siswa di SMK Wikrama Bogor yang memilih jurusan Pengembangan Perangkat
            Lunak dan Gim (PPLG), karena saya percaya bahwa ini adalah landasan yang tepat untuk memulai karier saya
            di masa depan.</p>
        <div class="social-media">
            <a href="https://wa.me/+6282246108750" target="_blank"><i class='bx bxl-whatsapp'></i></a>
            <a href="https://www.instagram.com/khoyum_28/" target="_blank"><i class='bx bxl-instagram'></i></a>
            <a href="https://www.linkedin.com/in/khoyum-masalik-3899482a0/" target="_blank"><i
                    class='bx bxl-linkedin'></i></a>
            <a href="https://github.com/KhoyumMasalik" target="_blank"><i class='bx bxl-github'></i></a>
        </div>
        <a href="./images/CV Kh.docx"class="btn">Download CV</a>
    </div>

    <div class="home-img">
        <img src="./images/header.png" alt="home logo">
    </div>
</section>
@endsection
