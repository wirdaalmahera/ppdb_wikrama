@extends('layout')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <title>PPDB SMK WIKRAMA BOGOR</title>
<!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/template.css')}}">

    </head>
    
    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="assets/img/wik.jpg" alt="" height="30px">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#welcome" class="active">Beranda</a></li>
                            <li><a href="#jurusan">Jurusan</a></li>
                            <li><a href="#tentangkami">Tentang Kami</a></li>
                            <li><a href="#testimonials">Testimoni</a></li>
                            <li><a href="#hubungikami">Hubungi Kami</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <b><h2 class="textwk">PPDB TP 2023-2024 SMK Wikrama Bogor</h2></b>
                        <p>Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik PENDAFTARAN PPDB dibawah ini!</p>
                        <a href="/register" class="main-button-slider">Pendaftaran PPDB</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i class="fa-solid fa-bullhorn"></i>
                                </div>
                                <h5 class="features-title">Motto</h5>
                                <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i class="fa-regular fa-handshake"></i>
                                </div>
                                <h5 class="features-title">Afirmasi</h5>
                                <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-hands-praying"></i>
                                </div>
                                <h5 class="features-title">Attitude</h5>
                                <p>Aku ada lingkunganku
                                    bahagia</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="tentangkami">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/img/wikrama2.jpg" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Tentang Kami</h2>
                    </div>
                    <div class="left-text">
                        <p> 	
                            SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. SMK Wikrama berlokasi di Jalan Raya Wangun Kelurahan Sindangsari Kota Bogor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="jurusan">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        {{-- <div class="info">
                            <h1>Work Process</h1>
                            <p>Aenean nec tempor metus. Maecenas ligula dolor, commodo in imperdiet interdum, vehicula ut ex. Donec ante diam.</p>
                        </div> --}}
                    </div>
                </div> 
    </section>

    <!--Jurusan-->
    <section class="about container">
      <div class="about-text"> 
          <h2 class="headingL"><span>Jurusan</span> </h2>
      </div>
      <div class="about-jurusan">
          <!-- PPLG BOX -->
          <div class="about-box">
              <img src="assets/img/rpl.JPG" alt="">
              <div class="about-overlay">
                  <div class="overlay-text">
                      <h2>PPLG</h2>
                      <p>Pengembangan Perangkat Lunak dan Gim</p>
                  </div>
              </div>
          </div>
          <!-- TJKT BOX -->
          <div class="about-box">
              <img src="assets/img/tkj.JPG" alt="">
              <div class="about-overlay">
                  <div class="overlay-text">
                      <h2>TJKT</h2>
                      <p>Teknik Jaringan Komputer dan Telekomunikasi</p>
                  </div>
              </div>
          </div>
          
          <!-- DKV BOX -->
          <div class="about-box">
              <img src="assets/img/dkv.JPG" alt="">
              <div class="about-overlay">
                  <div class="overlay-text">
                      <h2>DKV</h2>
                      <p>Desain Komunikasi Visual</p>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <br>

    

    
    


    {{-- <section class="jurusan">
        <h2 class="jurusan-text">Jurusan</h2>
        <button class="pre-btn"><img src="" alt=""></button>
        <button class="nxt-btn"><img src="" alt=""></button>
        <div class="jurusan-container">
            <div class="jurusan-card">
                <div class="jurusan-image">
                    <span class="desc">PPLG</span>
                    <img src="rpl.JPG" class="jurusan-thumb" alt="">
                </div>
            </div>
        </div>
    </section> --}}

<!-- Card -->
{{-- <div class="card card-image"
  style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.webp);"> --}}


    <!-- ***** Counter Parallax Start ***** -->
    
    <section id="tentang">
        <br><br><br>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h1 class="text-center">About Us</h1><br>
            <div class="row portfolio-container">
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <br><div class="portfolio-wrap">
          <img src="https://ppdb.aeni-script.my.id/assets/img/gedungwikrama.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <div class="portfolio-links">
              <a target="_blank" href="https://ppdb.aeni-script.my.id/assets/img/gedungwikrama.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fas fa-search"></i></a>
             </div>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="https://ppdb.aeni-script.my.id/assets/img/green.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <div class="portfolio-links">
              <a target="_blank" href="https://ppdb.aeni-script.my.id/assets/img/green.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fas fa-search"></i></a>
             
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="https://ppdb.aeni-script.my.id/assets/img/gedungmewah.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <div class="portfolio-links">
              <a target="_blank" href="https://ppdb.aeni-script.my.id/assets/img/gedungmewah.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>
      </div>
    
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="https://ppdb.aeni-script.my.id/assets/img/sekolahPK.jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <div class="portfolio-links">
              <a target="_blank" href="https://ppdb.aeni-script.my.id/assets/img/sekolakPK.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="https://ppdb.aeni-script.my.id/assets/img/sekolahUnggul.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <div class="portfolio-links">
              <a target="_blank" href="https://ppdb.aeni-script.my.id/assets/img/sekolahUnggul.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="https://ppdb.aeni-script.my.id/assets/img/membaca.JPG" class="img-fluid" alt="">
          <div class="portfolio-info">
            <div class="portfolio-links">
              <a target="_blank" href="https://ppdb.aeni-script.my.id/assets/img/membaca.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div></section>
</section>
    <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Blog Start ***** -->
    {{-- <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Testimoni</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                    </div>
                </div>
            </div> --}}
            <!-- ***** Section Title End ***** -->
        </section>
        <section class="section">
            <div class="center-heading">
                <h2 class="section-title">Testimoni</h2>
            </div>
            <div class="bg-gradient_solid">
              <div class="container">
                <div class="steps">
                  <div class="steps-container">
                    <div class="content">
                      <h2>Akhmad Munito</h2>
                      <p>"Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat dan akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini"</p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">2000</div>
                  </div>
                  <div class="steps-container">
                    <div class="content">
                        <h2>Lutfi Hakim</h2>
                        <p>"TSMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya."</p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">2011</div>
                  </div>
                  <div class="steps-container">
                    <div class="content">
                      <h2>Kamaludin</h2>
                      <p>"Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan siswa."</p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">2016</div>
                  </div>
                </section>
                  {{-- <div class="steps-container">
                    <div class="content">
                      <h2>Lorem ipsum dolor</h2>
                      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">2003</div>
                  </div>
                  <div class="steps-container">
                    <div class="content">
                      <h2>Lorem ipsum dolor</h2>
                      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">2004</div>
                  </div>
                  <div class="steps-container">
                    <div class="content">
                      <h2>Lorem ipsum dolor</h2>
                      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
                    </div>
                    <i class="step-line"></i>
                    <div class="date">2005</div>
                  </div> --}}
                </div>
              </div>
            </div>
            </body>
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us Start ***** -->
    <br>
    <section class="section colored" id="hubungikami">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Hubungi Kami</h2>
                    </div>
                </div>
                {{-- <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Maecenas pellentesque ante faucibus lectus vulputate sollicitudin. Cras feugiat hendrerit semper.</p>
                    </div> --}}
                {{-- </div> --}}
            </div>
            <!-- ***** Section Title End ***** -->
            <br>
            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <b><h4 class="margin-bottom-30">Kontak Pendaftaran</h4></b>
                    <div class="contact-text">
                        <p>Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146
                        prohumasi@smkwikrama.net</p>
                        {{-- <p>You are NOT allowed to re-distribute Softy Pinko template on any template collection websites. Thank you.</p> --}}
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                  <input name="name" type="text" class="form-control" id="name" placeholder="Nama Lengkap" required="">
                                </fieldset>
                              </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="no" type="number" class="form-control" id="number" placeholder="Nomor Telpon" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Alamat E-Mail" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Ketik Pesan" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Kirim</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
    <footer>
        <div class="footer-main px-0 pt-5">
        <div class="container">
            <div class="row">
            <div class="col-lg-1 col-md-12"></div>
            <div class="col-lg-5 col-md-5 m-md-auto align-self-center">
                <div class="block m-auto">
                {{-- <a href="#"><img src="assets/img/wik.jpg" alt="footer-logo" width="120" style="margin-left: 300px;"></a> --}}
                <!-- Social Site Icons -->
                <ul class="social-icon list-inline pl-4">
                    <li class="list-inline-item">
                    <a href="https://www.linkedin.com/school/smkwikramabogor/mycompany/" target="_blank" style="background-color: #fdd818; color: #333"><i class="ti-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                    <a href="https://www.instagram.com/smkwikrama/" target="_blank" style="background-color: #fdd818; color: #333"><i class="ti-instagram"></i></a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-7 mt-sm-5 mt-3 mt-lg-0" style="text-align: center;">
                <div class="block-2">
                <!-- heading -->
                <h6 class="text-dark">Kontak Sekolah</h6>
                <!-- links -->
                <ul>
                    <li class="font-weight-bold">0251-8242411</li>
                    <li class="alamat">Alamat :<br>
                        Jl. Raya Wangun<br>
                        Kelurahan Sindangsari <br>
                        Bogor Timur 16720</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="https://www.instagram.com/smkwikrama/"><i class="fa-brands fa-instagram"></i></a></li>

                        <li><a href="https://www.linkedin.com/school/smkwikramabogor/mycompany/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright © 2022 SMK Wikrama</p>
                </div>
            </div>
        </div>
    </footer>
@endsection