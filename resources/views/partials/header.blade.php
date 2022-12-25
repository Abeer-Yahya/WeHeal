<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/img/favicon_package_v0.16/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/img/favicon_package_v0.16/favicon-16x16.png"
    />
    <link rel="manifest" href="assets/img/favicon_package_v0.16/site.webmanifest" />

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/general.css" />
    <link rel="stylesheet" href="assets/css/animated.scss" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/navCSS/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/navCSS/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/navCSS/navstyle.css" />
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="assets/css/test.css" />



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- BootStrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

  </head>
  <body>
    <div class="banner">
      <h3 class="banner-heading">Stop the stigma!</h3>
      <p class="banner-text">Let's start a conversation about mental health</p>
    </div>
    <div class="hContainer">
      <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar" role="banner">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-11 col-xl-2">
              <h1 class="mb-0 site-logo">
                <a href="/" class="text-white mb-0"
                  ><img
                    alt="We Heal. Logo"
                    src="assets/img/WeHeal Logo.png"
                    height="100rem"
                /></a>
              </h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav
                class="site-navigation position-relative text-right"
                role="navigation"
              >
                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li class="">
                    <a aria-current="page"
                    href="{{ asset('/what') }}"><span>WHAT WE DO</span></a>
                  </li>
                  <li class="">
                    <a aria-current="page"
                    href="{{ asset('/who') }}"><span>WHO ARE WE</span></a>
                  </li>

                  <li class="has-children">
                    <a href="#"><span>HOW TO HELP</span></a>
                    <ul class="dropdown arrow-top">
                      <li><a aria-current="page"
                        href="{{ asset('/careers') }}">CARRERS</a></li>
                      <li><a aria-current="page"
                        href="{{ asset('/donate') }}">DONATE</a></li>
                      <li><a aria-current="page"
                        href="{{ asset('/resources') }}">RESOURCES</a></li>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a ria-current="page"
                    href="#"><span>GROW</span></a>
                    <ul class="dropdown arrow-top">
                      <li><a aria-current="page"
                        href="{{ asset('/q&a') }}">Q & A</a></li>
                      <li><a aria-current="page"
                        href="{{ asset('/blog') }}">BLOG</a></li>
                      <li><a aria-current="page"
                        href="{{ asset('/start') }}">START</a></li>
                    </ul>
                  </li>
                  <li>
                    <a aria-current="page"
                    href="{{ asset('/membership') }}"><span>MEMBERSHIP</span></a>
                  </li>
                  <li>
                    <a aria-current="page"
                    href="{{ asset('/stories') }}"><span>STORIES</span></a>
                  </li>
                </ul>
              </nav>
            </div>

            <div
              class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"
              style="position: relative; top: 3px"
            >
              <a
                href="#"
                class="site-menu-toggle js-menu-toggle"
                style="color: #064635"
                ><span class="icon-menu h3"></span
              ></a>
            </div>
          </div>
        </div>
      </header>
    </div>