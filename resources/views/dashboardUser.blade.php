@extends('layouts.main')

@section('main')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
crossorigin="anonymous"></script>
      <!-- Hero -->
  <div class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1 class="text-white fw-bold mb-4 animate__animated animate__fadeInUp animate__delay-1s">
            Bergabunglah dengan Kami <br />
            dalam Mewujudkan Proyek Bangunan Anda
          </h1>
          <p class="text-white mb-4 text-opacity-75 animate__animated animate__fadeInUp animate__delay-1s">Solusi konstruksi terbaik untuk proyek Anda. Kami siap membantu Anda.</p>
          <button
            class="btn btn-outline-light btn-lg rounded-1 animate__animated animate__fadeInUp animate__delay-1s"><a
              class="nav-link" id="aboutUs" href="#about">About
              Us</a></button>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero -->

  <!-- About -->
  <div class="about" id="about">
    <div class="container-fluid">
      <div class="row row-cols-lg-2 row-cols-1">
        <div class="col text-center py-5 text-white">
          <h2>1815</h2>
          <h2 class="fw-bold mb-2">Projects Selesai</h2>
          <p>
            1815 lebih proyek selesai, <br> menjadikan kami mitra yang andal.
        </div>
        <div class="col text-center py-5 text-white">
          <h2>299</h2>
          <h2 class="fw-bold mb-2">Perusaahan Bekerjasama</h2>
          <p>
            299 perusahaan telah mempercayakan kami untuk <br> menjadi mitra konstruksi mereka
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- About -->

  <!-- Projects -->
  <div class="projects" id="projects">
    <div class="container">
      <div class="row mb-4">
        <div class="col">
          <h2 class="border-bottom pb-2 mt-5 fw-semibold" data-aos="fade-right" data-aos-duration="1000">
            Our Projects
          </h2>
        </div>
      </div>
      <div class="projects row row-cols-lg-3 row-cols-md-2 row-cols-1">
        @foreach($data as $post)
        <div class="col rounded-2 shadow-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <!-- Jika ada gambar dalam postingan, ganti link img dengan path ke gambar -->
          @if ($post->image)
          <div style="max-height: 350px; overflow:hidd  en">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->slug}}" class="img-fluid mt-3">
          </div>
            @else
            <img src="https:/source.unsplash.com/1200x400" alt="{{$post->slug}}" class="img-fluid mt-3">
            @endif
            <h6 class="fw-semibold mt-2 h3 text-capitalize">{{ $post->title }}</h6>
            <p>{{ $post->excerpt }}</p>
            <a href="/news/{{$post->slug}}" class="text-decoration-none pb-5">Read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Projects -->

  <!-- Services -->
  <div class="services" id="services">
    <div class="container">
      <div class="row mb-4">
        <div class="col">
          <h2 class="fw-semibold border-bottom pb-2" data-aos="fade-right" data-aos-duration="1000">
            Our Services
          </h2>
        </div>
      </div>
      <div class="row align-items-center row-cols-lg-2 row-cols-1">
        <div class="col d-flex d-lg-block d-none">
          <img src="assets/img/services/services-1.jpg" class="me-1" alt="" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="200" />
          <img src="assets/img/services/services-2.jpg" alt="" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="400" />
        </div>
        <div class="col">
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400"><i
              class="fa-regular fa-circle-check"></i> Kreatif, terperinci, dan berfokus pada klien</h5>
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"><i
              class="fa-regular fa-circle-check"></i> Strategis dan komprehensif</h5>
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600"><i
              class="fa-regular fa-circle-check"></i> Pengawasan ketat dan koordinasi efisien</h5>
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700"><i
              class="fa-regular fa-circle-check"></i> Project sesuai target</h5>
          <h5 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800"><i
              class="fa-regular fa-circle-check"></i> Harga terjangkau</h5>
        </div>
      </div>
    </div>
  </div>
  <!-- Services -->

  <!-- FAQ -->
  <div class="faq" id="faq">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="fw-semibold border-bottom pb-2" data-aos="fade-right" data-aos-duration="1000">
            Frequently <br />
            Asked Questions
          </h2>
        </div>
      </div>
      <div class="row row-cols-lg-2 row-cols-1 g-4 pt-4">
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Bagaimana reputasi perusahaan kontraktor ini dalam memenuhi standar keselamatan dan kesehatan kerja di lokasi proyek?</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami sangat memprioritaskan keselamatan dan kesehatan kerja di setiap lokasi proyek. Kami memiliki kebijakan yang ketat dan prosedur standar untuk memastikan bahwa semua aktivitas konstruksi berjalan dengan aman dan mematuhi semua peraturan keselamatan yang berlaku. Selain itu, kami secara teratur melaksanakan pelatihan keselamatan untuk semua karyawan kami.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bagaimana kebijakan perusahaan dalam menangani masalah kualitas yang mungkin muncul selama proyek berlangsung?</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami memiliki sistem pengendalian kualitas yang kuat yang terintegrasi dalam setiap tahap proyek. Tim pengawas kami melakukan inspeksi berkala dan evaluasi kualitas untuk memastikan bahwa setiap pekerjaan memenuhi standar kualitas yang telah ditetapkan. Jika ada masalah kualitas yang teridentifikasi, kami segera mengambil tindakan perbaikan yang diperlukan untuk memastikan kualitas pekerjaan yang optimal.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Apakah perusahaan kontraktor ini memiliki pengalaman dalam menangani proyek-proyek besar?</button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami memiliki pengalaman yang luas dalam menangani proyek-proyek besar dan kompleks di berbagai sektor. Tim kami terdiri dari profesional yang berpengalaman dan terampil dalam mengelola proyek-proyek skala besar dari tahap perencanaan hingga penyelesaian.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Bagaimana perusahaan ini memastikan keterlibatan dan komunikasi yang baik dengan klien selama proyek berlangsung?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami menganggap komunikasi yang baik dengan klien sangat penting untuk keberhasilan proyek. Kami menetapkan tim manajemen proyek yang didedikasikan untuk berkomunikasi secara teratur dengan klien, memberikan pembaruan berkala tentang kemajuan proyek, serta mendengarkan dan menanggapi masukan atau kekhawatiran dari klien.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Bagaimana perusahaan ini mengelola risiko dalam proyek konstruksi?</button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami memiliki pendekatan yang terstruktur dalam mengelola risiko di setiap proyek konstruksi. Ini termasuk identifikasi risiko potensial, evaluasi dampaknya, serta mengembangkan strategi mitigasi yang efektif. Kami juga memiliki asuransi yang memadai untuk melindungi proyek dari risiko finansial yang tidak terduga.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed fw-semibold lh-lg" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Apakah perusahaan ini memiliki kebijakan keberlanjutan atau ramah lingkungan dalam proyek konstruksi?</button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Kami memahami pentingnya keberlanjutan dalam industri konstruksi. Oleh karena itu, kami berkomitmen untuk menerapkan praktik konstruksi yang ramah lingkungan, termasuk penggunaan bahan-bahan yang ramah lingkungan, pengelolaan limbah yang baik, serta mempertimbangkan efisiensi energi dalam desain dan pelaksanaan proyek kami.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- FAQ -->

  <!-- Footer -->
  <div class="footer pt-5">
    <div class="container">
      <div class="row row-cols-lg-3 row-cols-1 justify-content-between">
        <div class="col col-lg-6 mb-lg-0 mb-4">
          <h2 class="fw-bold text-white mb-3">Arct.</h2>
          <p class="text-white-50">Arct Construction adalah perusahaan konstruksi yang berpengalaman dan terpercaya,
            berkomitmen untuk memberikan solusi konstruksi berkualitas tinggi. 
            Dengan tim profesional dan fasilitas modern, kami siap menghadirkan hasil terbaik untuk setiap proyek. Layanan kami meliputi desain, konstruksi, pemeliharaan, dan manajemen proyek. Kami memiliki dedikasi untuk kepuasan pelanggan dan keselamatan kerja yang tinggi. 
            Hubungi kami untuk solusi konstruksi yang handal dan terpercaya.</p>
        </div>
        <div class="col col-lg-2 d-flex flex-column mb-lg-0 mb-4">
          <h5 class="fw-bold text-white">Menu</h5>
          <a href="#home" class="text-white-50 mt-3 text-decoration-none">Home</a>
          <a href="#about" class="text-white-50 mt-2 text-decoration-none">About</a>
          <a href="#projects" class="text-white-50 mt-2 text-decoration-none">Projects</a>
          <a href="#services" class="text-white-50 mt-2 text-decoration-none">Services</a>
          <a href="#faq" class="text-white-50 mt-2 text-decoration-none">FAQ</a>
        </div>
        <div class="col col-lg-3 d-flex flex-column">
          <h5 class="fw-bold text-white mb-3">Contact</h5>
          <a href="#" class="text-decoration-none text-white-50 mt-2">Arct@gmail.com</a>
          <a href="#" class="text-decoration-none text-white-50 mt-2">+62 89676570693</a>
          <a href="#" class="text-decoration-none text-white-50 mt-2">@Arct (Telegram)</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="text-white text-center copyright">&copy; Copyright 2024 by <span class="fw-bold">Arct</span> , All Right Reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

  <!-- JS -->
  <script src="{{asset('js/script.js')}}"></script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
      var accordionButtons = document.querySelectorAll('.accordion-button');
  
      accordionButtons.forEach(function(button) {
          button.addEventListener('click', function() {
              var target = button.getAttribute('data-bs-target');
              var accordionItems = document.querySelectorAll('.accordion-collapse');
              accordionItems.forEach(function(item) {
                  if (item.id !== target.substring(1)) {
                      var bsCollapse = new bootstrap.Collapse(item);
                      bsCollapse.hide();
                  }
              });
          });
      });

      document.addEventListener('click', function(event) {
          var clickedElement = event.target;
          if (!clickedElement.closest('.accordion')) {
              var accordionItems = document.querySelectorAll('.accordion-collapse');
              accordionItems.forEach(function(item) {
                  var bsCollapse = new bootstrap.Collapse(item);
                  bsCollapse.hide();
              });
          }
      });
  });
  </script>

@endsection