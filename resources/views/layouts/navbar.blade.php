<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
      <ul class="navbar-nav  ">
        <li class="nav-item @yield('main') ">
          <a class="nav-link" href="/">
            Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item @yield('about')">
          <a class="nav-link" href="/about"> About </a>
        </li>
        <li class="nav-item @yield('programs')">
          <a class="nav-link" href="/programs"> Programs </a>
        </li>
        <li class="nav-item @yield('contact')">
          <a class="nav-link" href="/contact"> Contact us</a>
        </li>
      </ul>
    </div>
  </div>