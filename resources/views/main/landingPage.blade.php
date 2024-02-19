<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK Lapor !</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    @include('section.mainNavbar')

    <section class="section-landingPage">
        @if(session('success'))
    <div class="alert alert-success container">
        {{ session('success') }}
    </div>
        @endif
        <div class="landing-page container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <h1 class="title">Layanan Pengaduan Siswa SMK </h1>
                    <p class="subtitle">Sampaikan baik aspirasi maupun pengaduan, kami akan memberikan solusi dari laporan anda, dan jelajahi galeri kegiatan yang siswa lakukan di SMK Lapor!</p>
                    
                    <div class="d-flex">
                        <a class="button-solid" href="#report">Lapor Sekarang!</a>
                        <a class="button" href="process">Status Laporan </a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img class="img-fluid mx-auto my-auto" src="{{ asset('img/landingPage.webp')}}" alt="">
                </div>
            </div>
        </div>
        
    </section>

    <section class="gallery" id="gallery"   >
        <div class="bg-color-gallery">
            <div class="container">
              <div class="row justify-content-between align-items-center">
                <div class="col">
                  <h3 class="subtittle" >GALERI KEGIATAN</h3>
                  <h1 class="tittle">Momen - Momen Istimewa Siswa </h1>
                  
                  <div class="testimonials-gallery">
                    <figure class="testimonials-gap row row-cols-2">
                      <div class="col">
                      <div class="d-flex flex-column mb-3">
                        <div class="p-2"><img src={{ asset('img/customer-1.jpg')}} style="width: 64px;" class=""></div>
                        <blockquote class="p-2" style="color: #555;">Kegiatan di SMK Kami sangat variatif, seru-seru! saya harap agar SMK Kami terus maju dan berkembang lebih baik lagi.</blockquote>
                        <div class="p-2" style="color: #555;">— Selviyah Indrayanti</div>
                      </div>
                      </div>
                      <div class="col">
                      <div class="d-flex flex-column mb-3">
                        <div class="p-2"><img src={{ asset('img/customer-4.jpg')}} style="width: 64px;" class=""></div>
                        <blockquote class="p-2" style="color: #555;">Selama saya Sekolah di SMK ini, Saya selalu semangat dan tidak malas sekolah, karena aktivitasnya yang menyenangkan!</blockquote>
                        <div class="p-2" style="color: #555;">— Kurniawan Haseva</div>
                      </div>
                      </div>
                      <div class="col">
                      <div class="d-flex flex-column mb-3">
                        <div class="p-2"><img src={{ asset('img/customer-2.jpg')}} style="width: 64px;" class=""></div>
                        <blockquote class="p-2" style="color: #555;">Sebagai Orang tua murid, Saya sangat bersyukur bisa memasukan anak saya ke sekolah ini. karena sekolahnya bagus dan pengajarnya profesional</blockquote>
                        <div class="p-2" style="color: #555;">— Ilham Kurniawan</div>
                      </div>
                      </div>
                      <div class="col">
                      <div class="d-flex flex-column mb-3">
                        <div class="p-2"><img src={{ asset('img/customer-3.jpg')}} style="width: 64px;" class=""></div>
                        <blockquote class="p-2" style="color: #555;">Selain kegiatan yang produktif, sekolah ini juga sangan perhatian terhadap murid-muridnya. Sekolah Favorit di Kota Kami!</blockquote>
                        <div class="p-2" style="color: #555;">— Jonnah Smith</div>
                      </div>
                      </div>
          
                    </figure>
                  </div>
                  
                </div>
                
                <div class="col">
                  <div class="gallery">
                    <div class="testimonials-gap row row-cols-2">
                      <div class="col"><img src={{ asset('img/Galeri1.jpg') }} class="img-fluid" alt=""></div>
                      <div class="col"><img src={{ asset('img/Galeri2.jpg') }} class="img-fluid" alt=""></div>
                      <div class="col"><img src={{ asset('img/Galeri4.jpg') }} class="img-fluid" alt=""></div>
                      <div class="col"><img src={{ asset('img/Galeri3.jpg') }} class="img-fluid" alt=""></div>
                      <div class="col"><img src={{ asset('img/Galeri5.jpg') }} class="img-fluid" alt=""></div>
                      <div class="col"><img src={{ asset('img/Galeri6.jpg') }} class="img-fluid" alt=""></div>
                    </div>            
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

<div class="bg-top-lapor" id="report"></div>
    <div class="container">
        <h1 class="subtittle text-center mt-5" >LAPOR ASPIRASI SEKARANG</h1>
        <p class="tittle text-center mt-3 mb-5">Berikan Aspirasi & Laporan tentang SMK kami</p>
    </div>
        

    <div class="report">
        @include('section.form')
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>