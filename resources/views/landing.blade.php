@include('layouts.header1')

 <!-- Website Title -->
 <title>EXCELLENT STUDY CENTRE</title>

@include('layouts.header2')

@include('layouts.navbar')

    <!-- Header -->
    <header id="header" class="header" style="background-color: #fde2cd;padding-bottom: 2rem;">
        <div class="header-content">
            <div class="container" style="margin-top:2rem;">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="text-container" style="margin-top:0rem;">
                            <h1>apa rasanya mendapat<br><b style="color: #c52727;font-size: 150%">NILAI BAGUS</b><br>saat ujian?</h1>
                            <p class="p-large">Bangga? Pastinya! Ayo bergabung di EXCELLENT dan dapatkan nilai yang memuaskan serta peringkat yang tinggi di sekolahmu.</p>
                            <a class="btn-solid-lg page-scroll" href="https://campsite.bio/daftar.excellent">Daftar Sekarang</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-7" style="align-self: center;">
                        <img class="img-fluid" src="images/siswaberprestasi.png">
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
                    <div class="text-container" style="font-size: 112%">
                        <h2><span style="color: #fff">sistem belajar</span></h2>
                        <h2><span style="color: #8e0000; font-size: 180%">SEMI<br>PRIVATE</span></h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <div class="media-body" style="color:#fff">Siswa akan mendapatkan pendampingan secara personal<br>sesuai dengan kebutuhannya dan kurikulum sekolah</div>
                            </li>
                            <li class="media">
                                <div class="media-body" style="color:#fff"> Perkembangan siswa dengan pemahaman materi sekolahnya<br>akan dipantau menyeluruh</div>
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
                    <h2>program belajar<br><span class="orange">SESUAI KURIKULUM SEKOLAH (Nas, Nas+, Inter)</span></h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-4">

                     <!-- Card-->
                     

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body" style="height: 400px;background-image: url('images/sd-side.png');">
                            <div class="card-title">SD</div>
                            <div class="card-subtitle">3,  4,  5,  6</div>
                            <!-- <div class="price">
                               <img src="images/sd.png" style="width: 50%;object-fit: cover;">
                            </div> -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="list-unstyled li-space-lg" >
                                        <li class="media">
                                            <i class="fas fa-check"></i><div class="media-body">Matematika</div>
                                        </li>
                                        <li class="media">
                                            <i class="fas fa-check"></i><div class="media-body">IPA</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body" style="height: 400px;background-image: url('images/smp-side.png');">
                            <div class="card-title">SMP</div>
                            <div class="card-subtitle">7,  8,  9</div>
                            <!-- <div class="price">
                                <img src="images/smp.png" style="width: 50%;object-fit: cover;">
                            </div> -->
                            <div class="row">
                                <div class="col-lg-12">
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                </div>
                <div class="col-lg-4">
                     <!-- Card-->
                     <div class="card">
                        <div class="card-body" style="height: 400px;background-image: url('images/sma-side.png');">
                            <div class="card-title">SMA</div>
                            <div class="card-subtitle" style="margin-bottom: 0rem;">10,  11,  12</div>
                            <!-- <div class="price">
                                <img src="images/sma.png" style="width: 50%; object-fit: cover;">
                            </div> -->
                            <div class="row">
                                <div class="col-lg-6" style="max-width: 128px;max-height: 168px;">
                                    <ul class="list-unstyled li-space-lg" style="margin-top: 1rem;margin-bottom: 0rem;">
                                        <li class="media">
                                            <div class="media-body"><b>Jurusan IPA</b></div>
                                        </li>
                                        <li class="media">
                                            <i class="fas fa-check"></i><div class="media-body">Matematika</div>
                                        </li>
                                        <li class="media">
                                            <i class="fas fa-check"></i><div class="media-body">Fisika</div>
                                        </li>
                                        <li class="media">
                                            <i class="fas fa-check"></i><div class="media-body">Kimia</div>
                                        </li>  
                                    </ul>
                                    <ul class="list-unstyled li-space-lg" style="margin-top: 1rem;margin-bottom: 0rem;">
                                        <li class="media">
                                            <div class="media-body"><b>Jurusan IPS</b></div>
                                        </li>
                                        <li class="media">
                                            <i class="fas fa-check"></i><div class="media-body">Matematika</div>
                                        </li>
                                        <li class="media">
                                            <i class="fas fa-check"></i><div class="media-body">Akuntansi</div>
                                        </li>
                                        <li class="media">
                                            <i class="fas fa-check"></i><div class="media-body">Ekonomi</div>
                                        </li>  
                                    </ul>
                                </div>
                                <div class="col-lg-6" style="max-width: 128px;max-height: 168px;">
                                    
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

    <!-- Testimoni slider -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
    </div> -->
    <!-- end of testimoni slider -->

    <!-- Testimoni -->
   <div id="testimoni" class="slider-2" style="padding-top:2rem;padding-bottom:2rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>apa kata <span class="orange">MURID KAMI</span></h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="row" style="align-items:center">
                                            <div class="col-lg-2">
                                                <img class="card-image" src="images/ashanna.png" alt="alternative">
                                            </div> 
                                            <div class="col-lg-10">
                                                <p class="testimonial-text" style="text-align:justify;line-height:1.2;margin-bottom:0">"Selama saya les Excellent, hasil ulangan matematika saya meningkat yang dari awalnya selalu remed jadi tidak remed melulu. Gurunya juga ramah dan sabar dalam mengajar dan soal-soalnya juga berhubungan dengan soal-soal di sekolah jadi tidak membingungkan."</p>
                                                <p class="testimonial-author" style="text-align:left;"><span style="font-size:150%">ASHANNA</span>  X MIPA SMAN 16 </p>
                                            </div>  
                                        </div>
                                        <div class="row" style="align-items:center">
                                            <div class="col-lg-2">
                                                <img class="card-image" src="images/jocelyn.png" alt="alternative">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="testimonial-text" style="text-align:justify;line-height:1.2;margin-bottom:0">"Selama saya les Excellent, hasil ulangan matematika saya meningkat yang dari awalnya selalu remed jadi tidak remed melulu. Gurunya juga ramah dan sabar dalam mengajar dan soal-soalnya juga berhubungan dengan soal-soal di sekolah jadi tidak membingungkan."</p>
                                                <p class="testimonial-author" style="text-align:left;"><span style="font-size:150%">JOCELYN LAU</span>  VII SMP Citra Kasih </p>
                                            </div>    
                                        </div>
                                        <div class="row" style="align-items:center">
                                            <div class="col-lg-2">
                                                <img class="card-image" src="images/anindya.png" alt="alternative">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="testimonial-text" style="text-align:justify;line-height:1.2;margin-bottom:0">"Sangat membantu dalam mengerjakan ulangan, ujian, tryout, di sekolah. Nindy selalu gampang mengingat kalau dapat pembelajaran di Excellent, dan menyenangkan karena bisa request waktu les jika berubah kegiatan di sekolah"</p>
                                                <p class="testimonial-author" style="text-align:left;"><span style="font-size:150%">ANINDYA A</span>   VI SD Bhakti </p>
                                            </div>    
                                        </div>
                                        
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="row" style="align-items:center">
                                            <div class="col-lg-2">
                                                <img class="card-image" src="images/ashanna.png" alt="alternative">
                                            </div> 
                                            <div class="col-lg-10">
                                                <p class="testimonial-text" style="text-align:justify;line-height:1.2;margin-bottom:0">"Selama saya les Excellent, hasil ulangan matematika saya meningkat yang dari awalnya selalu remed jadi tidak remed melulu. Gurunya juga ramah dan sabar dalam mengajar dan soal-soalnya juga berhubungan dengan soal-soal di sekolah jadi tidak membingungkan."</p>
                                                <p class="testimonial-author" style="text-align:left;"><span style="font-size:150%">ASHANNA</span>  X MIPA SMAN 16 </p>
                                            </div>  
                                        </div>
                                        <div class="row" style="align-items:center">
                                            <div class="col-lg-2">
                                                <img class="card-image" src="images/jocelyn.png" alt="alternative">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="testimonial-text" style="text-align:justify;line-height:1.2;margin-bottom:0">"Selama saya les Excellent, hasil ulangan matematika saya meningkat yang dari awalnya selalu remed jadi tidak remed melulu. Gurunya juga ramah dan sabar dalam mengajar dan soal-soalnya juga berhubungan dengan soal-soal di sekolah jadi tidak membingungkan."</p>
                                                <p class="testimonial-author" style="text-align:left;"><span style="font-size:150%">JOCELYN LAU</span>  VII SMP Citra Kasih </p>
                                            </div>    
                                        </div>
                                        <div class="row" style="align-items:center">
                                            <div class="col-lg-2">
                                                <img class="card-image" src="images/anindya.png" alt="alternative">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="testimonial-text" style="text-align:justify;line-height:1.2;margin-bottom:0">"Sangat membantu dalam mengerjakan ulangan, ujian, tryout, di sekolah. Nindy selalu gampang mengingat kalau dapat pembelajaran di Excellent, dan menyenangkan karena bisa request waktu les jika berubah kegiatan di sekolah"</p>
                                                <p class="testimonial-author" style="text-align:left;"><span style="font-size:150%">ANINDYA A</span>   VI SD Bhakti </p>
                                            </div>    
                                        </div>
                                        
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="row" style="align-items:center">
                                            <div class="col-lg-2">
                                                <img class="card-image" src="images/ashanna.png" alt="alternative">
                                            </div> 
                                            <div class="col-lg-10">
                                                <p class="testimonial-text" style="text-align:justify;line-height:1.2;margin-bottom:0">"Selama saya les Excellent, hasil ulangan matematika saya meningkat yang dari awalnya selalu remed jadi tidak remed melulu. Gurunya juga ramah dan sabar dalam mengajar dan soal-soalnya juga berhubungan dengan soal-soal di sekolah jadi tidak membingungkan."</p>
                                                <p class="testimonial-author" style="text-align:left;"><span style="font-size:150%">ASHANNA</span>  X MIPA SMAN 16 </p>
                                            </div>  
                                        </div>
                                        <div class="row" style="align-items:center">
                                            <div class="col-lg-2">
                                                <img class="card-image" src="images/jocelyn.png" alt="alternative">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="testimonial-text" style="text-align:justify;line-height:1.2;margin-bottom:0">"Selama saya les Excellent, hasil ulangan matematika saya meningkat yang dari awalnya selalu remed jadi tidak remed melulu. Gurunya juga ramah dan sabar dalam mengajar dan soal-soalnya juga berhubungan dengan soal-soal di sekolah jadi tidak membingungkan."</p>
                                                <p class="testimonial-author" style="text-align:left;"><span style="font-size:150%">JOCELYN LAU</span>  VII SMP Citra Kasih </p>
                                            </div>    
                                        </div>
                                        <div class="row" style="align-items:center">
                                            <div class="col-lg-2">
                                                <img class="card-image" src="images/anindya.png" alt="alternative">
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="testimonial-text" style="text-align:justify;line-height:1.2;margin-bottom:0">"Sangat membantu dalam mengerjakan ulangan, ujian, tryout, di sekolah. Nindy selalu gampang mengingat kalau dapat pembelajaran di Excellent, dan menyenangkan karena bisa request waktu les jika berubah kegiatan di sekolah"</p>
                                                <p class="testimonial-author" style="text-align:left;"><span style="font-size:150%">ANINDYA A</span>   VI SD Bhakti </p>
                                            </div>    
                                        </div>
                                        
                                        <div class="card-body">
                                            
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
                        Mari bergabung dan berkembang bersama tim EXCELLENT.</p>
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