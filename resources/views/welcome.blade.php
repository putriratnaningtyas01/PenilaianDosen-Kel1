<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Penilaian Dosen</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-grad-school.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
<!--

TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>


  <!--header-->
  <header class="main-header clearfix" role="header" style="background-color: rgb(0, 102, 204);">
    <div class="logo">
      <a href="#"><em>Penilaian</em> Dosen</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Tujuan</a></li>
            <li><a href="#section3">Penilaian</a></li>
            <li><a href="#section4">Detail</a></li>
            <li><a href="https://nurulfikri.ac.id/" rel="sponsored" class="external">URL</a></li>
          </ul>
        </li>
        <li><a href="#section4">Dosen</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contact</a></li>
        <li><a href="https://nurulfikri.ac.id/" class="external" target="__blank">STT Terpadu Nurul Fikri</a></li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="{{asset('assets/images/WhatsApp Video 2025-06-17 at 16.54.00_104b5514.mp4')}}" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>SISTEM PENILAIAN KINERJA DOSEN</h6>
              <h2><em>EVALUASI</em> KINERJA DOSEN</h2>
              {{-- <div class="main-button"> --}}
                  <a href="{{url('kelompok1')}}" class="btn btn-warning text-light text-lg">MULAI PENILAIAN</a>
              {{-- </div> --}}
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content" style="background-color: rgb(0, 102, 204);">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Sistem Informasi</h4>
              </div>
              <div class="content-hide">
                <p>Program Studi Sistem Informasi adalah merupakan ilmu yang mengedepankan analisa-analisa data sesuai dengan fakta-fakta yang terjadi. Sistem informasi berfokus pada pra-development pada suatu teknologi yang dibuat serta melakukan evaluasi selama development berlangsung.</p>
                <div class="scroll-to-section"><a href="#section4">More Info.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content" style="background-color: rgb(0, 102, 204);">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Bisnis Digital</h4>
              </div>
              <div class="content-hide">
                <p>Pada tahun 2045 menjadi Program Studi Bisnis Digital yang unggul di Indonesia pada bidang pengembangan UMKM Digital, dengan berbudaya inovasi, berjiwa teknopreneur, dan berkarakter religius.</p>
                <div class="scroll-to-section"><a href="#section4">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content" style="background-color: rgb(0, 102, 204);">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Teknik Informatika</h4>
              </div>
              <div class="content-hide">
                <p>Menjadi program studi Teknik Informatika yang unggul dalam bidang rekayasa perangkat lunak, kecerdasan artifisial, dan keamanan siber dengan berbudaya inovasi, berjiwa teknopreneur, dan berkarakter religius.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section4">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Mengapa Memilih Sistem Penilaian Dosen ini?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Tujuan Aplikasi</a></li>
              <li><a href='#tabs-2'>Manfaat bagi Mahasiswa</a></li>
              <li><a href='#tabs-3'>Manfaat bagi Dosen</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{asset('assets/images/bgdosen2.jpg')}}" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Tujuan Aplikasi</h4>
                    <p>Memberikan platform bagi mahasiswa untuk memberikan penilaian objektif terhadap dosen, guna meningkatkan kualitas pembelajaran di kampus.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{asset('assets/images/bgdosen1.jpg')}}" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Manfaat bagi Mahasiswa</h4>
                    <p>Mahasiswa dapat menyampaikan pendapat secara terbuka dan membantu memperbaiki sistem pembelajaran melalui masukan yang membangun.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{asset('assets/images/bgdosen3.jpg')}}" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Manfaat bagi Dosen</h4>
                    <p>Dosen dapat mengetahui kelebihan dan kekurangan dalam mengajar, serta berkesempatan untuk melakukan evaluasi dan perbaikan metode.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Berikan <em>Penilaianmu</em> dan Bantu Tingkatkan Kualitas Pengajaran di Kampus </h4>
              <div class="counter">

                <h6 style="color: aliceblue;">Waktu Tersisa untuk Mengisi Penilaian Semester Ini</h6>

                <div class="days">
                  <div class="value">00</div>
                  <span>Days</span>
                </div>

                <div class="hours">
                  <div class="value">00</div>
                  <span>Hours</span>
                </div>

                <div class="minutes">
                  <div class="value">00</div>
                  <span>Minutes</span>
                </div>

                <div class="seconds">
                  <div class="value">00</div>
                  <span>Seconds</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-content">
            <div class="top-content">
              <h6>Masukkan <em>Akun anda</em> untuk Melanjutkan Penilaian Dosen Secara Aman dan Mudah</h6>
            </div>
            <!-- ini login ke dashboard -->
            {{-- <form id="contact" action="" method="get"> --}}
              {{-- <div class="row"> --}}
                {{-- <div class="col-md-12"> --}}
                  {{-- <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Email" required="">
                  </fieldset> --}}
                {{-- </div> --}}
                {{-- <div class="col-md-12"> --}}
                  {{-- <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Password" required="">
                  </fieldset> --}}
                {{-- </div> --}}
                {{-- <div class="col-md-12"> --}}
                  {{-- <fieldset> --}}
                    {{-- <button type="submit" id="form-submit" class="btn btn-warning">Login sekarang</button> --}}
                  {{-- </fieldset> --}}
                {{-- </div> --}}
              {{-- </div> --}}
            {{-- </form> --}}
          {{-- </div>
        </div>
      </div>
    </div> --}}
  {{-- </section> --}}

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Detail Dosen</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="{{asset('assets/images/dosen1.png')}}" alt="Course #1" style="height: 300px;">
            <div class="down-content">
              <h4>Dr. Sirojul Munir, S.Si, M.Kom</h4>
              <h4>Pembelajaran</h4>
              <p>Pemrograman Web Lanjutan</p>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('assets/images/dosen2.png')}}" alt="Course #2" style="height: 318px;">
            <div class="down-content">
              <h4>NASRUL, S.Kom, M.Kom</h4>
              <h4>Pembelajaran</h4>
              <p>Rekayasa Perangkat Lunak</p>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('assets/images/dosen3.png')}}" alt="Course #3" style="height: 339px;">
            <div class="down-content">
              <h4>MISNA ASQIA, S.Kom, M.Kom</h4>
              <h4>Pembelajaran</h4>
              <p>UI/UX Designer</p>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('assets/images/dosen4.png')}}" alt="Course #4" style="height: 339px;">
            <div class="down-content">
              <h4>Krisna Panji, S.Kom., M.M</h4>
              <h4>Pembelajaran</h4>
              <p>Komunikasi Efektif</p>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('assets/images/dosen5.png')}}" alt="" style="height: 318px;">
            <div class="down-content">
              <h4>Davied Wahyu Wismanindra, S.Kom., M.M</h4>
              <h4>Pembelajaran</h4>
              <p>Bahasa Inggris</p>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('assets/images/dosen6.png')}}" alt="" style="height: 318px;">
            <div class="down-content">
              <h4>Drs. RUSMANTO, M.M.</h4>
              <h4>Pembelajaran</h4>
              <p>Bahasa Indonesia</p>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('assets/images/dosen7.png')}}" alt="" style="height: 318px;">
            <div class="down-content">
              <h4>Dr.SUHENDI.,ST. <br>,S.Kom., MMSI</h4>
              <h4>Pembelajaran</h4>
              <p>Pendidikan Teknologi Informasi</p>
            </div>
          </div>
          <div class="item">
            <img src="{{asset('assets/images/dosen8.png')}}" alt="" style="height: 318px;">
            <div class="down-content">
              <h4>HENRY SAPTONO, S.Si, M.Kom</h4>
              <h4>Pembelajaran</h4>
              <p>Basis Data</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>INFORMASI KAMPUS STT TERPADU NURUL FIKRI</span>
            <h4>Tonton video berikut untuk mengenal lebih jauh tentang <em>STT Terpadu Nurul Fikri</em></h4>
            <p>STT Terpadu Nurul Fikri adalah sebuah perguruan tinggi berbasis teknologi informasi yang berlokasi di Depok, Jawa Barat. Kampus ini berdiri di bawah naungan Yayasan Nurul Fikri, sebuah yayasan pendidikan Islam yang telah lama dikenal aktif dalam bidang dakwah, pendidikan, dan teknologi.</p>
            <div class="main-button"><a rel="nofollow" href="https://nurulfikri.ac.id/" target="_parent">Informasi Lebih Lanjut</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Lihat Video</h4>
            </div>
            <figure>
              <a href="https://youtu.be/2DOiSHymxMQ?si=MbJ_wPvbh_KLZbmm" class="playing"><img src="assets/images/bgkampus.jpg"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Hubungi Kami</h2>
          </div>
        </div>
        <div class="col-md-6">

        <!-- Do you need a working HTML contact-form script?

                    Please visit https://templatemo.com/contact page -->

          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.317561852959!2d106.83004867471773!3d-6.352919162151296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1750159680753!5m2!1sid!2sid"
                width="100%"
                height="422"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2025 by Syamil

           | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">Penilaian Dosen</a><br>

          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/lightbox.js')}}"></script>
    <script src="{{asset('assets/js/tabs.js')}}"></script>
    <script src="{{asset('assets/js/video.js')}}"></script>
    <script src="{{asset('assets/js/slick-slider.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>
