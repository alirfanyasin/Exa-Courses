<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo-main.png') }}" alt=""
        width="200px" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="mx-auto navbar-nav">
        <x-nav-link :active="Request::is('/') ? true : false" href='#'>Home</x-nav-link>
        <x-nav-link href='#about'>About</x-nav-link>
        <x-nav-link href='#benefit'>Benefit</x-nav-link>
        <x-nav-link href='#courses'>Courses</x-nav-link>
        <x-nav-link href='#contact'>Contact</x-nav-link>
      </div>
      <div class="navbar-nav">
        @auth
          <a class="px-3 nav-link btn-main box-shadow" href="{{ route('dashboard') }}" wire:navigate>Dashboard</a>
        @endauth
        @guest
          <a class="nav-link me-3" href="{{ route('login') }}" wire:navigate>Sign In</a>
          <a class="px-3 nav-link btn-main box-shadow" href="{{ route('register') }}" wire:navigate>Sign Up</a>
        @endguest
      </div>
    </div>
  </div>
</nav>
