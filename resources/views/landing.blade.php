
@include('templates.header1')
=======
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


 <!-- Website Title -->
 <title>EXCELLENT STUDY CENTRE</title>

@include('templates.header2')

@include('templates.navbar')
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
                        <img class="img-fluid" src="images/rank.png">
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
                    <div class="image-container">
                        <img class="img-fluid" src="images/sistembelajar.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Sistem Belajar<br><span class="white">SEMI PRIVATE</span></h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body" style="color:#fff">Siswa akan mendapatkan pendampingan secara personal sesuai dengan kebutuhannya dan kurikulum sekolah</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body" style="color:#fff"> Perkembangan siswa dengan pemahaman materi sekolahnya akan dipantau menyeluruh</div>
                            </li>
                        </ul>
                        <a class="btn-solid-white" href="{{ url('/keunggulan') }}">Lebih lengkap</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    


 <!-- Pricing -->
 <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Program Belajar <br> <span class="orange">SESUAI KURIKULUM SEKOLAH</span></h2>
                    <p class="p-heading p-large">nasional, nasional plus, internasional</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                     <!-- Card-->
                     <div class="card">
                        <div class="card-body">
                            <div class="card-title">SMP</div>
                            <div class="card-subtitle">7,8,9</div>
                            <div class="price">
                                <img src="images/smp.png" style="width: 50%">
                                <span class="currency"></span><span class="value"></span>
                                <div class="frequency"></div>
                            </div>
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
                            <div class="card-title">SD</div>
                            <div class="card-subtitle">3,4,5,6</div>
                            <div class="price">
                            <img src="images/sd.png" style="width: 50%">
                                <span class="currency"></span><span class="value"></span>
                                <div class="frequency"></div>
                            </div>
  
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
                            <div class="card-title">SMA</div>
                            <div class="card-subtitle">10,11,12</div>
                            <div class="price">
                                <img src="images/sma.png" style="width: 50%">
                                <span class="currency"></span><span class="value"></span>
                                <div class="frequency"></div>
                            </div>
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
                    <div class="image-container">
                        <img class="img-fluid" src="images/lamarkerja.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


  


   

    
    @include('templates.footer')