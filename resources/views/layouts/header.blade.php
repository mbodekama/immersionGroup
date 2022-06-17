<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('pageTtile')</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, directory, listings, e-commerce, car dealer, city guide, real estate, job board, user account, multipurpose, ui kit, html5, css3, javascript, gallery, slider, touch">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #1f1b2d;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #fff;;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #9691a4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      
    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();
      
    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
  </head>
  <!-- Body-->
  <body class="bg-dark">
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Sign In Modal-->
      <div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content bg-dark border-light">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md border-light p-4 p-sm-5">
                  <h2 class="h3 text-light mb-4 mb-sm-5">Salut<br> et bienvenue encore</h2><img class="d-block mx-auto" src="img/signin-modal/signin-dark.svg" width="344" alt="Illustartion">
                  <div class="text-light mt-4 mt-sm-5"><span class="opacity-60">Avez vous un compte ? </span><a class="text-light" href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up here</a></div>
                </div>
                <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Se connecter via Facebook</a>
                  <div class="d-flex align-items-center py-3 mb-3">
                    <hr class="hr-light w-100">
                    <div class="text-light opacity-70 px-3">Or</div>
                    <hr class="hr-light w-100">
                  </div>
                  <form class="needs-validation" novalidate>
                    <div class="mb-4">
                      <label class="form-label text-light mb-2" for="signin-email">Email address</label>
                      <input class="form-control form-control-light" type="email" id="signin-email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="form-label text-light mb-0" for="signin-password">Mot de passe</label><a class="fs-sm text-light" href="#">Mot de passe oublié?</a>
                      </div>
                      <div class="password-toggle">
                        <input class="form-control form-control-light" type="password" id="signin-password" placeholder="Enter password" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">Se connecter         </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sign Up Modal-->
      <div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content bg-dark border-light">
            <div class="modal-body px-0 py-2 py-sm-0">
              <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
              <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md border-light p-4 p-sm-5">
                  <h2 class="h3 text-light mb-4 mb-sm-5">Join Finder.<br>Get premium benefits:</h2>
                  <ul class="list-unstyled mb-4 mb-sm-5">
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Add and promote your listings</span></li>
                    <li class="d-flex mb-2"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Easily manage your wishlist</span></li>
                    <li class="d-flex mb-0"><i class="fi-check-circle text-primary mt-1 me-2"></i><span class="text-light">Leave reviews</span></li>
                  </ul><img class="d-block mx-auto" src="img/signin-modal/signup-dark.svg" width="344" alt="Illustartion">
                  <div class="text-light mt-sm-4 pt-md-3"><span class="opacity-60">Already have an account? </span><a class="text-light" href="#signin-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign in</a></div>
                </div>
                <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
                  <div class="d-flex align-items-center py-3 mb-3">
                    <hr class="hr-light w-100">
                    <div class="text-light opacity-70 px-3">Or</div>
                    <hr class="hr-light w-100">
                  </div>
                  <form class="needs-validation" novalidate>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-name">Full name</label>
                      <input class="form-control form-control-light" type="text" id="signup-name" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-email">Email address</label>
                      <input class="form-control form-control-light" type="email" id="signup-email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-password">Password <span class='fs-sm opacity-50'>min. 8 char</span></label>
                      <div class="password-toggle">
                        <input class="form-control form-control-light" type="password" id="signup-password" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label text-light" for="signup-password-confirm">Confirm password</label>
                      <div class="password-toggle">
                        <input class="form-control form-control-light" type="password" id="signup-password-confirm" minlength="8" required>
                        <label class="password-toggle-btn" aria-label="Show/hide password">
                          <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                        </label>
                      </div>
                    </div>
                    <div class="form-check form-check-light mb-4">
                      <input class="form-check-input" type="checkbox" id="agree-to-terms" required>
                      <label class="form-check-label" for="agree-to-terms"><span class='opacity-70'>By joining, I agree to the</span> <a href='#' class='text-light'>Terms of use</a> <span class='opacity-70'>and</span> <a href='#' class='text-light'>Privacy policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">Sign up         </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar-->
      <header class="navbar navbar-expand-lg navbar-dark fixed-top" data-scroll-header>
        <div class="container"><a class="navbar-brand me-3 me-xl-4" href="index.php"><img class="d-block" src="img/logo/logo-light.svg" width="116" alt="Finder"></a>
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <a class="btn btn-link btn-light btn-sm d-none d-lg-block order-lg-3" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Se connecter</a>
          <a class="btn btn-primary btn-sm ms-2 order-lg-3" href="car-finder-sell-car.html"><i class="fi-plus me-2"></i>Sell car</a>
          <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
              <!-- Demos switcher-->
        
              <!-- Menu items-->
              <li class="nav-item active">
                <a class="nav-link" href="index.php">
                  <i class="fi-layers me-2"></i>Acceuil
                  <span class="d-none d-lg-block position-absolute top-50 end-0 translate-middle-y border-end border-light" style="width: 1px; height: 30px;"></span>
                
                </a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catégorie</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">SUV</a></li>
                  <li><a class="dropdown-item" href="#">PICKUP</a></li>
                  <li><a class="dropdown-item" href="#">COUPE</a></li>
                  <li><a class="dropdown-item" href="#">COUPE</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mon Compte</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="car-finder-account-info.html">Information</a></li>
                  <li><a class="dropdown-item" href="car-finder-account-notifications.html">Notifications</a></li>
                  <li><a class="dropdown-item" href="signin-dark.html">Signaler</a></li>
                  <li><a class="dropdown-item" href="signup-dark.html">Deconnexion</a></li>
                </ul>
              </li>
   


                 <li class="nav-item active">
                <a class="nav-link" href="index.php">
                  <i class="fi-layers me-2"></i>FAQ
                  <span class="d-none d-lg-block position-absolute top-50 end-0 translate-middle-y border-end border-light" style="width: 1px; height: 30px;"></span>
                
                </a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="index.php">
                  <i class="fi-layers me-2"></i>Contactez-nous
                  <span class="d-none d-lg-block position-absolute top-50 end-0 translate-middle-y border-end border-light" style="width: 1px; height: 30px;"></span>
                
                </a>
              </li>
                  <li class="nav-item active">
                <a class="nav-link" href="index.php">
                  <i class="fi-layers me-2"></i>Revendeur
                  <span class="d-none d-lg-block position-absolute top-50 end-0 translate-middle-y border-end border-light" style="width: 1px; height: 30px;"></span>
                
                </a>
              </li>
               
              <li class="nav-item d-lg-none"><a class="nav-link" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Sign in</a></li>
            </ul>
          </div>
        </div>
      </header>

      <!-- Page content-->