@include('layouts.header1')

 <!-- Website Title -->
 <title>EXCELLENT STUDY CENTRE</title>

@include('layouts.header2')

@include('layouts.navbar')
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
                            <a class="btn-solid-lg page-scroll" href="#sistem">Jelajahi</a>
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
    <div class="basic-2" style="padding-bottom: 4rem;">
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

    <!-- Testimoni -->
   <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Apa kata <span class="orange">MURID KAMI</span></h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/jocelyn.png" alt="alternative">
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
                                        <img class="card-image" src="images/anindya.png" alt="alternative">
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
                                        <img class="card-image" src="images/ashanna.png" alt="alternative">
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
                    <div class="image-container">
                        <img class="img-fluid" src="images/lamarkerja.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


  


   

    
    @include('layouts.footer')