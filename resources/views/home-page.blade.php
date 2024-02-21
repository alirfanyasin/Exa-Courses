<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Exa Courses</title>
  <!-- Bootstrap V5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <!-- CSS Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

  <!-- Scripts -->
  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
  <!-- Navbar start -->
  <livewire:home-page.navigation />
  <!-- Navbar end -->

  <!-- Main start -->
  <main>
    <!-- Section banner start -->
    <section id="banner">
      <div class="container d-flex align-items-center">
        <div class="row d-flex align-items-center">
          <div class="col-md-6">
            <span class="fw-semibold blue-color">Don't Stop Learning</span>
            <h1 class="fw-bold main-color mb-5">
              Grow up
              <span class="second-color">your <span id="typed6">skills</span></span>
              by <br />
              online courses with <br />
              Exa Courses
            </h1>
            <p class="lh-lg">
              Sudahkah kamu merencanakan untuk meningkatkan skill kamu? Ayo
              maksimalkan potensimu dengan bergabung dalam kursus online kami!
            </p>
            <div class="mt-5 d-flex align-items-center">
              <a href="" class="btn-main px-5 py-3 box-shadow d-inline-block me-5">Get Started</a>
              <div class="d-flex align-items-center">
                <a href=""
                  class="btn-play rounded-circle d-inline-block d-flex align-items-center justify-content-center"><i
                    class="fa-solid fa-play"></i></a>
                <span class="main-color fw-semibold ms-3">Watch Video</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-banner position-relative px-5 mx-auto">
              <img src="{{ asset('assets/img/img-3.jpg') }}" alt="IMG BANNER" width="100%" />
              <div class="bg-img-banner"></div>
            </div>
            <div class="bg-white rounded-4 p-2 total-student d-inline-block position-absolute bottom-50">
              <div class="d-flex align-items-center">
                <div class="p-3 rounded-3 me-3">
                  <i class="fa-regular fa-user"></i>
                </div>
                <div class="me-4">
                  <b class="d-block">500+</b>
                  <div class="grey-color">Acitive Student</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section banner end -->

    <!-- Section sponsor start -->
    <section id="sponsorship" style="margin-bottom: 100px">
      <div class="container">
        <div class="row d-flex justify-content-evenly align-items-center">
          <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-duration="2000">
            <img src="{{ asset('assets/img/logo-google.png') }}" alt="" width="100%" />
          </div>
          <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-duration="2000">
            <img src="{{ asset('assets/img/logo-midtrans.png') }}" alt="" width="100%" />
          </div>
          <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-duration="2000">
            <img src="{{ asset('assets/img/logo-gojek.png') }}" alt="" width="100%" />
          </div>
          <div class="col-md-2 col-6" data-aos="zoom-in" data-aos-duration="2000">
            <img src="{{ asset('assets/img/logo-shopeepay.png') }}" alt="" width="100%" />
          </div>
        </div>
      </div>
    </section>
    <!-- Section sponsor end -->

    <!-- Section about start -->
    <section id="about" style="margin-bottom: 200px">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-duration="3000">
            <img src="{{ asset('assets/img/img-about.png') }}" alt="Img About" width="100%" />
          </div>
          <div class="col-md-6" data-aos="fade-left" data-aos-duration="3000">
            <header class="mb-4">
              <h2 class="main-color fw-bold">About Us</h2>
              <div class="second-color fw-medium">
                What's interesting about us?
              </div>
            </header>

            <p>
              Kami adalah penyedia kursus online yang berkomitmen untuk
              membantu Anda memahami dan menguasai dunia yang terus berkembang
              dari pengembangan web. Di sini, kami percaya bahwa aksesibilitas
              dan fleksibilitas adalah kunci untuk kesuksesan belajar.
            </p>
            <p>
              Dengan pengajar yang berpengalaman dan kurikulum yang disusun
              secara cermat, kami memastikan bahwa setiap langkah dalam
              perjalanan pembelajaran Anda mendukung pencapaian tujuan Anda.
              Dari pemula hingga tingkat lanjutan, kursus-kursus kami
              dirancang untuk memberikan pemahaman yang mendalam tentang
              teknologi web terkini.
            </p>
            <p>
              Siap untuk memulai perjalanan pembelajaran Anda? Ayo bergabung
              dengan kami di Exa Courses mulai "from zero to hero"
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Section about end -->

    <!-- Section benefit start -->
    <section id="benefit">
      <div class="container">
        <div class="row">
          <div class="col">
            <header class="mb-4">
              <h2 class="main-color fw-bold">Benefit</h2>
              <div class="second-color fw-medium">
                Benefits of taking the course
              </div>
            </header>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-4 col-12 mb-3" data-aos="fade-up" data-aos-duration="3000">
            <div class="card border-0 rounded-4 p-3">
              <div class="card-body text-center">
                <div class="mt-4 mb-4 d-flex justify-content-center">
                  <div class="outer-icon-benefit rounded-circle d-flex align-items-center justify-content-center">
                    <div class="icon-benefit rounded-circle d-flex align-items-center justify-content-center">
                      <img src="{{ asset('assets/img/icon-sertifikat.png') }}" alt="" />
                    </div>
                  </div>
                </div>
                <h4 class="mb-3">Sertifikat</h4>
                <p>
                  Sertifikat kelulusan hanya bisa di dapatkan ketika
                  menyelesaikan project besar
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12 mb-3" data-aos="fade-up" data-aos-duration="3000">
            <div class="card border-0 rounded-4 p-3">
              <div class="card-body text-center">
                <div class="mt-4 mb-4 d-flex justify-content-center">
                  <div class="outer-icon-benefit rounded-circle d-flex align-items-center justify-content-center">
                    <div class="icon-benefit rounded-circle d-flex align-items-center justify-content-center">
                      <img src="{{ asset('assets/img/icon-video.png') }}" alt="" />
                    </div>
                  </div>
                </div>
                <h4 class="mb-3">Akses Video</h4>
                <p>
                  Video hasil recording di setiap pertemuan dapat di akses
                  selamanya
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12 mb-3" data-aos="fade-up" data-aos-duration="3000">
            <div class="card border-0 rounded-4 p-3">
              <div class="card-body text-center">
                <div class="mt-4 mb-4 d-flex justify-content-center">
                  <div class="outer-icon-benefit rounded-circle d-flex align-items-center justify-content-center">
                    <div class="icon-benefit rounded-circle d-flex align-items-center justify-content-center">
                      <img src="{{ asset('assets/img/icon-chat.png') }}" alt="" />
                    </div>
                  </div>
                </div>
                <h4 class="mb-3">Konsultasi Private</h4>
                <p>
                  Mentor akan selalu memberikan solusi yang terbaik untuk
                  kesulitan anda
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12 mb-3" data-aos="fade-up" data-aos-duration="3000">
            <div class="card border-0 rounded-4 p-3">
              <div class="card-body text-center">
                <div class="mt-4 mb-4 d-flex justify-content-center">
                  <div class="outer-icon-benefit rounded-circle d-flex align-items-center justify-content-center">
                    <div class="icon-benefit rounded-circle d-flex align-items-center justify-content-center">
                      <img src="{{ asset('assets/img/icon-hadiah.png') }}" alt="" />
                    </div>
                  </div>
                </div>
                <h4 class="mb-3">Hadiah</h4>
                <p>
                  Dapatkan hadiah yang menarik di showcase project setelah
                  project besar
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section benefit end -->

    <!-- Section courses description start -->
    <section id="courses">
      <div class="container p-5 rounded-5 position-relative">
        <div class="row">
          <div class="col-md-6" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <header class="mb-4">
              <h2 class="text-white fw-bold">Courses</h2>
              <div class="second-color fw-medium">Courses description</div>
            </header>

            <ul>
              <li class="text-white fw-light">
                Pelaksanaan dilaksanakan melalui Zoom Meeting.
              </li>
              <li class="text-white fw-light">
                Kursus akan dilaksanakan pada hari Senin, Rabu, Sabtu.
              </li>
              <li class="text-white fw-light">
                Waktu pelaksanaan adalah pukul 19.30 hingga selesai.
              </li>
              <li class="text-white fw-light">
                Kursus berlangsung selama sebulan untuk menguasai frontend
                developer.
              </li>
              <li class="text-white fw-light">
                Kursus berlangsung selama sebulan untuk menguasai frontend
                developer.
              </li>
              <li class="text-white fw-light">
                Belajar HTML, CSS dan JavaScript serta (Boostrap atau
                Tailwind).
              </li>
              <li class="text-white fw-light">
                Harga Terjangkau dengan promo, dari harga
                <span class="fw-bold">Rp. <s>250.000</s></span> menjadi
                <span class="fw-bold second-color">Rp. 150.000</span>
              </li>
            </ul>

            <div class="mt-5">
              <a href="https://app.midtrans.com/payment-links/1708427203010"
                class="btn-daftar d-inline-block rounded-3 text-decoration-none px-5 py-3 main-color fw-semibold">Daftar
                Sekarang</a>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-sine">
            <div class="position-absolute bottom-0">
              <img src="{{ asset('assets/img/img-courses.png') }}" alt="" width="100%" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section courses description end -->

    <!-- Section contact start -->
    <section id="contact" style="margin-bottom: 100px" data-aos="fade-up" data-aos-duration="2000">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <header class="mb-4">
              <h2 class="main-color fw-bold">Contact Us</h2>
              <div class="second-color fw-medium">
                Ask us about exa courses
              </div>
            </header>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <div class="card border-0 rounded-5 p-4">
              <div class="card-body">
                <form>
                  <div class="mb-3">
                    <label for="fullname" class="form-label fw-medium main-color">Fullname</label>
                    <input type="text" class="form-control" id="fullname" />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label fw-medium main-color">Email address</label>
                    <input type="email" class="form-control" id="email" />
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label fw-medium main-color">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Write your message here..."></textarea>
                  </div>
                  <button type="submit" class="btn-main px-5 py-2">
                    <img src="assets/img/icon-send.png" alt="" style="width: 20px" class="me-2" />
                    Send
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section contact end -->
  </main>
  <!-- Main end -->

  <footer class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5 me-5">
          <img src="{{ asset('assets/img/logo-white.png') }}" alt="" width="100%" />
        </div>
        <div class="col-md-2 col-6 mb-5 text-white">
          <h5 class="">Quick Link</h5>
          <div>
            <a href="" class="d-block fw-light text-decoration-none text-white">Home</a>
            <a href="" class="d-block fw-light text-decoration-none text-white">About</a>
            <a href="" class="d-block fw-light text-decoration-none text-white">Courses</a>
            <a href="" class="d-block fw-light text-decoration-none text-white">Pricing</a>
            <a href="" class="d-block fw-light text-decoration-none text-white">Contact</a>
            <a href="" class="d-block fw-light text-decoration-none text-white">Register Now</a>
          </div>
        </div>
        <div class="col-md-2 col-6 mb-5 text-white">
          <h5>Tools</h5>
          <a href="" class="d-block fw-light text-decoration-none text-white">Visual Studio Code</a>
          <a href="" class="d-block fw-light text-decoration-none text-white">Google Chrome</a>
          <a href="" class="d-block fw-light text-decoration-none text-white">Zoom Meeting</a>
          <a href="" class="d-block fw-light text-decoration-none text-white">HTML, CSS & JS</a>
        </div>
        <div class="col-md-3 mb-5 text-white">
          <h5>Contact Us</h5>
          <div>+62-822-2987-8219</div>
          <div>exacourses@gmail.com</div>
        </div>
      </div>

      <div class="row mt-5 text-white">
        <div class="col fw-light text-center">
          <small>
            &copy; All Rights Reserved 2024 | Build by ❤️ Irfan Yasin
          </small>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Typed JS -->
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script>
    // AOS
    AOS.init();

    // Typed JS
    var typed6 = new Typed("#typed6", {
      strings: ["Career", "Skills", "Mindset"],
      typeSpeed: 80,
      backSpeed: 70,
      loop: true,
    });

    // Changed the background color of the navbar while scrolling
    window.addEventListener("scroll", function() {
      var nav = document.querySelector("nav");
      if (window.scrollY > 100) {
        nav.style.backgroundColor = "#ffffff";
        nav.style.transition = "0.5s";
      } else {
        nav.style.backgroundColor = "";
      }
    });
  </script>
</body>

</html>
