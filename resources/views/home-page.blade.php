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
  <livewire:pages.home-page.navigation />
  <!-- Navbar end -->

  <!-- Main start -->
  <main>
    <!-- Section banner start -->
    <livewire:pages.home-page.banner />
    <!-- Section banner end -->

    <!-- Section sponsor start -->
    <livewire:pages.home-page.sponsor>
      <!-- Section sponsor end -->

      <!-- Section about start -->
      <livewire:pages.home-page.about />
      <!-- Section about end -->

      <!-- Section benefit start -->
      <livewire:pages.home-page.benefit />
      <!-- Section benefit end -->

      <!-- Section courses description start -->
      <livewire:pages.home-page.courses>
        <!-- Section courses description end -->

        <!-- Section contact start -->
        <livewire:pages.home-page.contact />
        <!-- Section contact end -->
  </main>
  <!-- Main end -->

  <footer class="py-5">
    <div class="container">
      <div class="row">
        <div class="mb-5 col-md-4 me-5">
          <img src="{{ asset('assets/img/logo-white.png') }}" alt="" width="100%" />
        </div>
        <div class="mb-5 text-white col-md-2 col-6">
          <h5 class="">Quick Link</h5>
          <div>
            <a href="" class="text-white d-block fw-light text-decoration-none">Home</a>
            <a href="" class="text-white d-block fw-light text-decoration-none">About</a>
            <a href="" class="text-white d-block fw-light text-decoration-none">Courses</a>
            <a href="" class="text-white d-block fw-light text-decoration-none">Pricing</a>
            <a href="" class="text-white d-block fw-light text-decoration-none">Contact</a>
            <a href="" class="text-white d-block fw-light text-decoration-none">Register Now</a>
          </div>
        </div>
        <div class="mb-5 text-white col-md-2 col-6">
          <h5>Tools</h5>
          <a href="" class="text-white d-block fw-light text-decoration-none">Visual Studio Code</a>
          <a href="" class="text-white d-block fw-light text-decoration-none">Google Chrome</a>
          <a href="" class="text-white d-block fw-light text-decoration-none">Zoom Meeting</a>
          <a href="" class="text-white d-block fw-light text-decoration-none">HTML, CSS & JS</a>
        </div>
        <div class="mb-5 text-white col-md-3">
          <h5>Contact Us</h5>
          <div>+62-822-2987-8219</div>
          <div>exacourses@gmail.com</div>
        </div>
      </div>

      <div class="mt-5 text-white row">
        <div class="text-center col fw-light">
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
