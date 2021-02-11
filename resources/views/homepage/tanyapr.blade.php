@include('layouts.header1')

 <!-- Website Title -->
 <title>EXCELLENT STUDY CENTRE</title>

@include('layouts.header2')

@include('layouts.navbar')

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="{{ url('/') }}">Home</a><i class="fa fa-angle-double-right"></i><span>Tanya PR Online</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
    <div id="header" class="cards-2" style="background-color: #f16622; padding-top:1rem;padding-bottom:1rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #fff">Tanya PR Online</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>


 
    <!-- Sistem Belajar Offline -->
    <div class="basic-2-left" style="padding-top: 0rem;"> 
        <div class="container">
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h2 style="color: #fff">Tanya PR Online<br><span class="darkred">Mulai dari Rp 2rb/soal</span></h2>
                    </div>
                </div>
            </div> -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="text-container">
                        <p class="white" style="font-size:120%">Punya tugas dan PR sulit?</p>
                        <p class="white" style="font-size:120%">Yuk tanya aja di <b>Tanya PR Online</b>! Mulai dari Rp 2rb/soal</p>
                        <p class="white" style="font-size:120%">Tanya jawab soal akan menggunakan platform pesan digital Telegram. Nantinya setiap siswa yang join akan diinvite untuk join ke grup ini. Karena ini private grup, kamu cuma bisa join by invitation aja yaa.</p>
                        <div class="image-container">
                            <img class="img-fluid" src="images/tanya1.png" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4" style="align-self:center;">
                    <div class="image-container">
                        <img class="img-fluid" src="images/tanya2.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->


    <!-- Interactive Conference-->
    <div class="basic-2-left" style=>
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="align-self:center;">
                    <div class="text-container">
                        <p class="white" style="font-size:120%">Sebelum memulai <b>Tanya PR Online</b>, kamu harus mengisi GOLD untuk bisa ditukarkan dengan pertanyaanmu yaa. Soal-soal yang ditanyakan bisa berupa Pilihan Ganda, Isian Singkat, maupun Essay, tapi bukan untuk mengerjakan Project atau Tugas Besar yaa.</p>
                        <br>
                        <p class="white" style="font-size:120%">Kamu bisa refill GOLD kamu dengan jumlah 100 gold, 200 gold, atau 300 gold. Setiap gold memiliki masa aktif 1 bulan dimulai dari tanggal pembelian gold yaa</p>
                        <br>
                        <p class="white" style="font-size:120%">Semakin besar paket yang kamu ambil, nominal harga per soal akan semakin murah loh!</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4" style="align-self:center;">
                    <div class="image-container"     style="margin-top: 3.5rem;">
                        <img class="img-fluid" src="images/gold.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row" style="padding-top:2rem">
                <div class="col-lg-12" >
                    <h4 class="white" style="text-align:left;margin-left: 4rem;">Tanya PR Online</h4>
                </div>
            </div>
            <div class="row" style="text-align:left;">
                <div class="col-lg-12">
                    <div class="text-container" style="margin-top:0rem">
                        <p class="white" style="font-size:120%">Tanya soal kapanpun dan dimanapun, dapatkan jawaban soalmu maksimal 1x24 jam (Senin - Jumat).</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div>
            
            <div class="row" style="text-align:left;">
                <div class="col-lg-5">
                    <p class="white" style="margin-left: 4rem;font-size:120%">Ala Carte (1 Soal): Rp 10rb/soal</p>
                </div>
                <div class="col-lg-5">
                    <p class="white" style="margin-left: 4rem;font-size:120%">Paket 100 gold: Rp 250rb (2,5 rb/soal)</p>
                    <p class="white" style="margin-left: 4rem;font-size:120%">Paket 200 gold: Rp 450rb (2,25 rb/soal)</p>
                    <p class="white" style="margin-left: 4rem;font-size:120%">Paket 300 gold: Rp 600rb (2 rb/soal)</p>
                </div>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 2 -->

    <!-- Laporan belajar -->
    <div class="basic-2-left" style="padding-top: 2rem;padding-bottom: 4rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align:center">
                    <a class="btn-solid-white" href="https://forms.gle/hDrpffhV9mzAz4eN7" style="width:55%">Daftar Sekarang</a>
                </div>
            </div>
            
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end laporan belajar -->

    
    @include('layouts.footer')