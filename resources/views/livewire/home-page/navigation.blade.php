<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo-main.png') }}" alt=""
        width="200px" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <x-nav-link :active="Request::is('/') ? true : false" href='#'>Home</x-nav-link>
        <x-nav-link :active="Request::is('#about') ? true : false" href='#about'>About</x-nav-link>
        <x-nav-link href='#benefit'>Home</x-nav-link>
        <x-nav-link href='#courses'>Courses</x-nav-link>
        <x-nav-link href='#contact'>Contact</x-nav-link>
      </div>
      <div class="navbar-nav">
        <a class="nav-link me-3" href="{{ route('login') }}" wire:navigate>Sign In</a>
        <a class="nav-link btn-main px-3 box-shadow" href="{{ route('register') }}" wire:navigate>Sign Up</a>
      </div>
    </div>
  </div>
</nav>
