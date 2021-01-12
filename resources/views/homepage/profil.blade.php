@include('layouts.header1')

 <!-- Website Title -->
 <title>Profil - EXCELLENT STUDY CENTRE</title>

@include('layouts.header2')

@include('layouts.navbar')

    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #fff">Profil</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Profil</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="text-container">
                        <h3>Tentang Kami</h3>
                        <p>Sejak pertama kali didirikan pada tahun 2006, Excellent study centre telah membantu ribuan siswa/i SD, SMP, dan SMA untuk meningkatkan prestasinya di sekolah melalui program bimbingan semi-privat yang memungkinkan siswa belajar sesuai kebutuhan. Beberapa prestasi yang pernah diraih siswa/i kami antara lain</p>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-unstyled li-space-lg indent">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Masuk perguruan tinggi terbaik: UI, ITB, UNPAD, IPB, UNSRI</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Memperoleh nilai 100 untuk UN Matematika (tertinggi se-Indonesia)</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Memperoleh Juara 1 Umum (seangkatan) pada saat kelulusan sekolah</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Memperoleh Ranking 1, 2, dan 3 di kelas</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Memperoleh nilai Matematika dan IPA (Fis, Kim) di atas 90 pada rapor semester</div>
                                    </li>
                                </ul>
                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of text-container-->
                    
                    
                    <ul class="list-unstyled li-space-lg indent">
                        <li class="media">
                            <img src="images/2007.png">
                            <div class="media-body">Excellent study centre pertama kali didirikan pada tahun 2007 di Perumahan Poris Indah, Tangerang. Berawal dari keprihatinan terhadap banyaknya anak-anak yang kesulitan memahami pelajaran sekolah yang semakin berat, kami bertekad untuk membantu anak-anak dalam mencapai prestasi belajar yang membanggakan.</div>
                        </li>
                        <li class="media">
                            <img src="images/2011.png">
                            <div class="media-body">Excellent Poris Indah pindah ke tempat yang lebih luas untuk memfasilitasi seluruh siswa/i yang telah percaya dengan kualitas pelayanan kami. Selain itu, kami juga merekrut guru-guru baru yang berkualitas dan berpengalaman untuk menjamin peningkatan prestasi siswa/i di sekolahnya masing-masing.</div>
                        </li>
                        <li class="media">
                            <img src="images/2014.png">
                            <div class="media-body">Excellent Kosambi Baru (cabang ke-2) dibuka agar kami dapat memberikan kontribusi yang lebih besar terhadap kemajuan pendidikan di Indonesia. Dengan terus meningkatkan kualitas pelayanan, Excellent Kosambi Baru berhasil dipercaya oleh ratusan siswa dari berbagai sekolah sebagai wahana untuk memperdalam pemahaman mereka terhadap materi pelajaran di sekolah.</div>
                        </li>
                        <li class="media">
                            <img src="images/2017.png">
                            <div class="media-body">Excellent Taman Surya (cabang ke-3) dibuka sebagai bentuk komitmen kami dalam mendidik putra-putri generasi penerus bangsa. Kami bertekad untuk terus menjaga dan mengembangkan kualitas pembelajaran di Excellent agar dapat berkontribusi secara nyata terhadap kemajuan prestasi siswa/i.</div>
                        </li>
                        <li class="media">
                            <img src="images/2018.png">
                            <div class="media-body">Excellent Tanjung Duren (cabang ke-4) dibuka dengan harapan kami dapat membantu lebih banyak siswa yang kesulitan mengikuti pelajaran di berbagai sekolah favorit. Kami ingin mereka membuktikan kepada orang tua dan teman-temannya bahwa menjadi juara sekolah merupakan suatu hal yang menyenangkan yang dapat diraih dengan usaha dan bimbingan yang tepat.</div>
                        </li>
                    </ul>
                    <br>
                    <br>

                    <div class="text-container">
                        <h3>VISI</h3>
                        <p>Pendidikan yang sangat baik untuk banyak orang</p>
                        <br>
                        <h3>MISI</h3>
                        <p>Membuat siswa/i kami menjadi bersemangat untuk mencapai sukses pada studi mereka dan pada kehidupan mereka yang akan datang.</p>
                        <br>
                        <h3>Nilai-nilai perusahaan</h3>
                        <ol class="li-space-lg">
                            <li>Mendidik dengan bersemangat dan sepenuh hati</li>
                            <li>Menciptakan suasana belajar yang menarik dan menyenangkan</li>
                            <li>Belajar terus menerus untuk memiliki pengetahuan yang lebih dalam, memberikan pelayanan yang lebih baik, dan memperoleh kepercayaan</li>
                        </ol>
                    </div> 
                    <a class="btn-outline-reg back" href="{{ url('/') }}">Kembali</a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Profil</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    
    @include('layouts.footer')