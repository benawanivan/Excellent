<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>EXCELLENT STUDY CENTRE</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/logo_favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.png" alt="Logo Excellent"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Program</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSf_Ffp3yWkq0a9wjgAqQiCIdXTkcKBdJ_WL5xp280HIAyBvew/viewform"><span class="item-text">Reguler</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSf_Ffp3yWkq0a9wjgAqQiCIdXTkcKBdJ_WL5xp280HIAyBvew/viewform"><span class="item-text">Platinum</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="https://forms.gle/hDrpffhV9mzAz4eN7"><span class="item-text">Tanya PR Online</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Mengapa Kami</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Profil</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Lokasi Cabang</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Keunggulan</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Prestasi Siswa</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Testimoni</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Log in</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('murid.login')}}"><span class="item-text">Siswa</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{route('ortu.login')}}"><span class="item-text">Orang Tua</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="{{route('guru.login')}}"><span class="item-text">Guru</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="https://campsite.bio/daftar.excellent">Daftar Sekarang</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="http://api.whatsapp.com/send?phone=6283822837999&text=Halo%20saya%20ingin%20bertanya%20tentang%20program%20belajar%20di%20EXCELLENT">
                        <i class="fas fa-circle fa-stack-2x whatsapp"></i>
                        <i class="fab fa-whatsapp fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- slider -->
    <!--
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"></div>
            <div id="target" class="carousel-item"></div>
            <div class="carousel-item"></div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
-->
    <!-- end of slider -->

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>Apa rasanya mendapat<br><span class="orange">NILAI BAGUS</span><br>saat ujian?</h1>
                            <p class="p-large">Bangga? Pastinya! Ayo bergabung bersama kami dan dapatkan nilai yang memuaskan dan peringkat tinggi di sekolahmu!</p>
                            <a class="btn-solid-lg page-scroll" href="#services">DISCOVER</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    
    <!-- Sistem Belajar -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Sistem Belajar<br><span class="white">SEMI PRIVATE</span></h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Siswa akan mendapatkan pendampingan secara personal sesuai dengan kebutuhannya dan kurikulum sekolah</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Perkembangan siswa dengan pemahaman materi sekolahnya akan dipantau menyeluruh</div>
                            </li>
                        </ul>
                        <a class="btn-solid-white" href="#">Lebih lengkap</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Testimoni -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/testimonials-2-men-talking.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Apa kata <span class="orange">MURID KAMI</span></h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Selama saya les Excellent, hasil ulangan matematika saya meningkat yang dari awalnya selalu remed jadi tidak remed melulu. Gurunya juga ramah dan sabar dalam mengajar dan soal-soalnya juga berhubungan dengan soal-soal di sekolah jadi tidak membingungkan.</p>
                                            <p class="testimonial-author">JOCELYN LAU - VII SMP Citra Kasih</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Sangat membantu dalam mengerjakan ulangan, ujian, tryout do sekolah. Nindy selalu gampang mengingat kalau dapat pembelajaran di Excellent, dan menyenangkan karena bisa request waktu les jika berubah kegiatan di sekolah.</p>
                                            <p class="testimonial-author">ANINDYA A - VI SD Bhakti</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Kesan saya selama belajar di excellent itu seru banget dan saya menjadi mudah mengerti, suasananya bagus, gurunya ramah dan penjelasan yang diberikan sangat jelas dan bagus.</p>
                                            <p class="testimonial-author">ASHANNA - X SMAN 16</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                               
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->

    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Apakah Anda lulusan Pendidikan, MIPA, atau Teknik?</h2>
                        <p>Anda memiiki passion berkarir di bidang pendidikan?<br>
                        Ingin mengembangkan diri di dunia pendidikan, suka tantangan, menyukai anak-anak dan ingin terus berkembang?<br>
                        Mari bergabung dan berkembang bersama kami dalam tim yang solid.</p>
                        <a class="btn-solid-reg" href="https://www.jobstreet.co.id/en/companies/776811-pt-bina-juara-indonesia">Lamar Sekarang</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


  


    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Program Belajar <br> <span class="orange">SESUAI KURIKULUM SEKOLAH</span></h2>
                    <p class="p-heading p-large">nasional, nasional, internasional</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">SD</div>
                            <div class="card-subtitle">3,4,5,6</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency"></span><span class="value"></span>
                                <div class="frequency"></div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Matematika</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Sains</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">serta pelajaran lainnya*</div>
                                </li>
                                <li class="media">
                                    <i></i><div class="media-body">*untuk membantu dalam PR & persiapan ulangan, kecuali Agama dan Mandarin</div>
                                </li>
                                
                            </ul>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                     <!-- Card-->
                     <div class="card">
                        <div class="card-body">
                            <div class="card-title">SMP</div>
                            <div class="card-subtitle">7,8,9</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency"></span><span class="value"></span>
                                <div class="frequency"></div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Matematika</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Fisika</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Kimia</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Biologi</div>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                     <!-- Card-->
                     <div class="card">
                        <div class="card-body">
                            <div class="card-title">SMA</div>
                            <div class="card-subtitle">10,11,12</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency"></span><span class="value"></span>
                                <div class="frequency"></div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Matematika</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Sains (Fisika dan Kimia)</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Sosial (Ekonomi dan Akuntansi)</div>
                                </li> 
                            </ul>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-col">
                        <h4>EXCELLENT STUDY CENTRE</h4>
                        <p>Bimbingan Belajar<br>Matematika, Fisika, Kimia<br>SD-SMP-SMA<br>Nas, Nas+, Inter</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-6">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/excellent.bimbel/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/excellentstudycentre/?hl=en">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>