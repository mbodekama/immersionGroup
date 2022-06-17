@extends('layouts.ossature')

@section('pageTtile')
Finder | Acceuil
@endsection
@section('content')


      <!-- Hero + Search form-->
      <section class="bg-top-center bg-repeat-0 pt-5" style="background-image: url(img/car-finder/home/hero-bg.png); background-size: 1920px 630px;">
        <div class="container pt-5">
          <div class="row pt-lg-4 pt-xl-5">
            <div class="col-lg-4 col-md-5 pt-3 pt-md-4 pt-lg-5">
              <h1 class="display-4 text-light pb-2 mb-4 me-md-n5">Achetez / louez facilement</h1>
              <p class="fs-lg text-light opacity-70">NOus vous offrons le meilleur service pour touver le vehicules qu'il vous faut. </p>
            </div>
            <div class="col-lg-8 col-md-7 pt-md-5"><img class="d-block mt-4 ms-auto" src="img/car-finder/home/hero-img.png" width="800" alt="Car"></div>
          </div>
        </div>
        <div class="container mt-4 mt-sm-3 mt-lg-n3 pb-5 mb-md-4">
          <!-- Tabs-->
     
          <!-- Form group-->
          <form class="form-group form-group-light d-block">
            <div class="row g-0 ms-lg-n2">
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="input-group border-end-lg border-light">
                  <span class="input-group-text text-muted ps-2 ps-sm-3">
                    <i class="fi-search"></i></span>
                  <input class="form-control" type="text" name="Mot clé" placeholder="Mot clé...">
                </div>
              </div>
              <hr class="hr-light d-lg-none my-2">
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="dropdown border-end-sm border-light" data-bs-toggle="select">
                  <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">Marques</span></button>
                  <input type="hidden" name="make">
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Acura</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">BMW</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Citroen</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Lexus</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Mercedes-Benz</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Nissan</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Toyota</span></a></li>
                  </ul>
                </div>
              </div>
              <hr class="hr-light d-sm-none my-2">
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="dropdown border-end-md border-light" data-bs-toggle="select">
                  <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">Modèle</span></button>
                  <input type="hidden" name="model">
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Altima</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Juke</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Leaf</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Maxima</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Micra</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Murano</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Note</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Patrol</span></a></li>
                  </ul>
                </div>
              </div>
              <hr class="hr-light d-md-none my-2">
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="dropdown border-end-sm border-light" data-bs-toggle="select">
                  <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-car fs-lg me-2"></i><span class="dropdown-toggle-label">Carrosserie</span></button>
                  <input type="hidden" name="type">
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Compact</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Crossover</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Coupe</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Family MPV</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Pickup</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Sedan</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">SUV</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Wagon</span></a></li>
                  </ul>
                </div>
              </div>
  
              <hr class="hr-light d-lg-none my-2">
              <div class="col-lg-2 col-md-3 col-sm-6">     
                <button class="btn btn-primary w-100" type="submit">Search</button>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- Body type selection-->
      <section class="container pb-5 mb-md-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-sm-2">
          <h2 class="h3 text-light mb-2 mb-sm-0">Types de carrosserie populaires</h2><a class="btn btn-link btn-light fw-normal px-0" href="car-finder-catalog-grid.html">View all<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
        </div>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-2 g-md-4">
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/sedan.svg" width="160" alt="Sedan"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-list.html">Sedan</a></div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/suv.svg" width="160" alt="SUV"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-grid.html">SUV</a></div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/wagon.svg" width="160" alt="Wagon"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-list.html">Wagon</a></div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/crossover.svg" width="160" alt="Crossover"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-grid.html">Crossover</a></div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/coupe.svg" width="160" alt="Coupe"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-list.html">Coupe</a></div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/pickup.svg" width="160" alt="Pickup"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-grid.html">Pickup</a></div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/sport.svg" width="160" alt="Sport Coupe"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-list.html">Sport Coupe</a></div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/compact.svg" width="160" alt="Compact"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-grid.html">Compact</a></div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/convertible.svg" width="160" alt="Convertible"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-list.html">Convertible</a></div>
          </div>
          <!-- Item-->
          <div class="col">
            <div class="card card-body card-light card-hover bg-transparent border-0 px-0 pt-0 text-center"><img class="d-block mx-auto mb-3" src="img/car-finder/icons/mpv.svg" width="160" alt="Family MPV"><a class="nav-link-light stretched-link fw-bold" href="car-finder-catalog-grid.html">Family MPV</a></div>
          </div>
        </div>
      </section>
      <!-- Top offers-->
      <section class="container pt-sm-1 pb-5 mb-md-4">

        <div class="d-sm-flex align-items-center justify-content-between mb-4 pb-sm-2">
          <h2 class="h3 text-light mb-2 mb-sm-0">Véhicules en location</h2><a class="btn btn-link btn-light fw-normal px-0" href="car-finder-catalog-list.html">Voir plus<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
        </div>
        @php
        $i = 10;
        @endphp

        <div class="row">
          @for($i=0; $i<2; $i++)
          <div class="col-lg-6">
            <!-- Item-->
            <div class="card card-light card-hover h-lg-100 mb-4 mb-lg-0">
              <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href="car-finder-single.html"></a>
                <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info mb-1">New</span><span class="d-table badge bg-success" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span></div>
                <div class="content-overlay end-0 top-0 pt-3 pe-3">
                  <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                </div>
                <div class="tns-carousel-inner"><img src="img/car-finder/catalog/17.jpg" alt="Image"><img src="img/car-finder/catalog/17.jpg" alt="Image"></div>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2015</span>
                  <div class="form-check form-check-light">
                    <input class="form-check-input" type="checkbox" id="compare1">
                    <label class="form-check-label fs-sm" for="compare1">Comparer</label>
                  </div>
                </div>
                <h3 class="h6 mb-1"><a class="nav-link-light" href="car-finder-single.html">Mercedes Benz Convertible Coupe</a></h3>
                <div class="text-primary fw-bold mb-1">$25,800</div>
                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>New York</div>
              </div>
              <div class="card-footer border-0 pt-0">
                <div class="border-top border-light pt-3">
                  <div class="row g-2">
                    <div class="col me-sm-1">
                      <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">48K mi</span></div>
                    </div>
                    <div class="col me-sm-1">
                      <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Automatic</span></div>
                    </div>
                    <div class="col">
                      <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Gasoline</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endfor
           
        </div>
    

      </section>

      <!-- Brands-->
      <section class="container py-2 py-sm-3">
        <div class="row g-2 g-sm-4">
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/opel.svg" width="86" alt="Opel"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/audi.svg" width="86" alt="Audi"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/mercedes.svg" width="86" alt="Mercedes-Benz"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/toyota.svg" width="86" alt="Toyota"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/mazda.svg" width="86" alt="Mazda"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/nissan.svg" width="86" alt="Nissan"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/hyundai.svg" width="86" alt="Hyundai"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/lexus.svg" width="86" alt="Lexus"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/honda.svg" width="86" alt="Honda"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/renault.svg" width="86" alt="Renault"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/infiniti.svg" width="86" alt="Infiniti"></a></div>
          <div class="col-3 col-sm-2 col-xl-1 mb-4 pb-2"><a class="opacity-40 opacity-transition d-table mx-auto" href="#"><img src="img/car-finder/brands/mitsubishi.svg" width="86" alt="Mitsubishi"></a></div>
        </div>
      </section>

      <!-- Features-->
      <section class="container pt-4 pt-md-5">
        <div class="d-sm-flex align-items-center justify-content-between">
          <h2 class="h3 text-light mb-2 mb-sm-0">Notre valeur ajouté</h2><a class="btn btn-link btn-light fw-normal px-0" href="#">Devenir notre revendeur ?<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
        </div>
        <div class="row">
          <div class="col-md-5 col-lg-4 offset-lg-1 pt-4 mt-2 pt-md-5 mt-md-3">
            <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-file lead text-primary mt-1 order-md-2"></i>
              <div class="text-md-end ps-3 ps-md-0 pe-md-3 order-md-1">
                <h3 class="h6 text-light mb-1">Plus de 01 Millions d choix</h3>
                <p class="fs-sm text-light opacity-70 mb-0">Trouver une variété de véhicules sur notre plateforme succeptible de répondre à votre demande</p>
              </div>
            </div>
            <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-search lead text-primary mt-1 order-md-2"></i>
              <div class="text-md-end ps-3 ps-md-0 pe-md-3 order-md-1">
                <h3 class="h6 text-light mb-1">Recherche pointu</h3>
                <p class="fs-sm text-light opacity-70 mb-0">Trouvez la voiture qui réponds a vos critère de recherche en un clic </p>
              </div>
            </div>
            <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-settings lead text-primary mt-1 order-md-2"></i>
              <div class="text-md-end ps-3 ps-md-0 pe-md-3 order-md-1">
                <h3 class="h6 text-light mb-1">Amélioration progressive</h3>
                <p class="fs-sm text-light opacity-70 mb-0">ONotre équipe continue de mettre en place ce qu'il vous faut pour un service de qualité</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 d-none d-md-block">
            <div class="position-relative mx-auto h-100" style="max-width: 5rem; min-height: 26rem;">
              <div class="rellax content-overlay pt-5" data-rellax-percentage="0.5"><img class="pt-3 mt-5" src="img/car-finder/home/car.svg" alt="Car"></div>
              <div class="position-absolute top-0 start-50 translate-middle-x h-100 overflow-hidden"><img src="img/car-finder/home/road-line.svg" width="2" alt="Road line"></div>
            </div>
          </div>
          <div class="col-md-5 col-lg-4 pt-md-5 mt-md-3">
            <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-info-circle lead text-primary mt-1"></i>
              <div class="ps-3">
                <h3 class="h6 text-light mb-1">Coût des prestations</h3>
                <p class="fs-sm text-light opacity-70 mb-0">Obtenez un accès gratuits à la visualisatioon de tous nos véhicules</p>
              </div>
            </div>
            <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-users lead text-primary mt-1"></i>
              <div class="ps-3">
                <h3 class="h6 text-light mb-1">Consumer-First Mentality</h3>
                <p class="fs-sm text-light opacity-70 mb-0">We focus on building the most transparent, trustworthy experience for our users, and we’ve proven that works for dealers, too.</p>
              </div>
            </div>
            <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-calculator lead text-primary mt-1"></i>
              <div class="ps-3">
                <h3 class="h6 text-light mb-1">Online Car Appraisal</h3>
                <p class="fs-sm text-light opacity-70 mb-0">Specify the parameters of your car to form its market value on the basis of similar cars on Finder.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest cars (carousel)-->
{{--       <section class="container pt-sm-5 pt-4 pb-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-2">
          <h2 class="h3 text-light mb-3 mb-sm-0">Latest cars</h2>
          <div class="d-flex align-items-center">
            <ul class="nav nav-tabs nav-tabs-light fs-sm me-4 pe-2 mb-0">
              <li class="nav-item"><a class="nav-link" href="#">New</a></li>
              <li class="nav-item"><a class="nav-link active" href="#">Used</a></li>
            </ul><a class="btn btn-link btn-light fw-normal px-0" href="car-finder-catalog-grid.html">View all<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
          </div>
        </div>
        <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-carousel-light">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 3, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;900&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;gutter&quot;: 24}}}">
            <div>
              <div class="card card-light card-hover h-100">
                <div class="card-img-top card-img-hover"><a class="img-overlay" href="car-finder-single.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">Used</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                  </div><img src="img/car-finder/catalog/04.jpg" alt="Image">
                </div>
                <div class="card-body">
                  
                  <h3 class="h6 mb-1"><a class="nav-link-light" href="car-finder-single.html">Nissan 370Z Nismo</a></h3>
                  <div class="text-primary fw-bold mb-1">$37,900</div>
                  <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>New York</div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="border-top border-light pt-3">
                    <div class="row g-2">
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">16K mi</span></div>
                      </div>
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Automatic</span></div>
                      </div>
                      <div class="col">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Gasoline</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card card-light card-hover h-100">
                <div class="card-img-top card-img-hover"><a class="img-overlay" href="car-finder-single.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info mb-1">Used</span><span class="d-table badge bg-success" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                  </div><img src="img/car-finder/catalog/08.jpg" alt="Image">
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2017</span>
                    
                  </div>
                  <h3 class="h6 mb-1"><a class="nav-link-light" href="car-finder-single.html">Ford Explorer XLT</a></h3>
                  <div class="text-primary fw-bold mb-1">$26,950</div>
                  <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Kansas</div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="border-top border-light pt-3">
                    <div class="row g-2">
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">34K mi</span></div>
                      </div>
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Manual</span></div>
                      </div>
                      <div class="col">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Diesel</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card card-light card-hover h-100">
                <div class="card-img-top card-img-hover"><a class="img-overlay" href="car-finder-single.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">Used</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                  </div><img src="img/car-finder/catalog/03.jpg" alt="Image">
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2019</span>
                    <div class="form-check form-check-light">
                      <input class="form-check-input" type="checkbox" id="compare6">
                      <label class="form-check-label fs-sm" for="compare6">Compare</label>
                    </div>
                  </div>
                  <h3 class="h6 mb-1"><a class="nav-link-light" href="car-finder-single.html">Mazda MX-5 Miata Convertible</a></h3>
                  <div class="text-primary fw-bold mb-1">$29,700</div>
                  <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Los Angeles</div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="border-top border-light pt-3">
                    <div class="row g-2">
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">18K mi</span></div>
                      </div>
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Manual</span></div>
                      </div>
                      <div class="col">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Gasoline</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card card-light card-hover h-100">
                <div class="card-img-top card-img-hover"><a class="img-overlay" href="car-finder-single.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">Used</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                  </div><img src="img/car-finder/catalog/02.jpg" alt="Image">
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">2018</span>
                    <div class="form-check form-check-light">
                      <input class="form-check-input" type="checkbox" id="compare7">
                      <label class="form-check-label fs-sm" for="compare7">Compare</label>
                    </div>
                  </div>
                  <h3 class="h6 mb-1"><a class="nav-link-light" href="car-finder-single.html">Mercedes Benz C300 Sport</a></h3>
                  <div class="text-primary fw-bold mb-1">$53,600</div>
                  <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>San Francisco</div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="border-top border-light pt-3">
                    <div class="row g-2">
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">35K mi</span></div>
                      </div>
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Automatic</span></div>
                      </div>
                      <div class="col">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Hybrid</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      <section class="container pb-4 pb-sm-5 mb-2 mb-md-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-sm-2">
          <h2 class="h3 text-light mb-2 mb-sm-0">Achetez un véhicule</h2><a class="btn btn-link btn-light fw-normal px-0" href="car-finder-blog.html">Go to blog<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
        </div>
      
          <div class="row d-flex justify-content-between" >
            @php
            $vehicules = collect([0,1,2,3,4,5,6,7,8]); 
            @endphp
            @foreach($vehicules as $vehicule)
             <div class="col-lg-4 col-sm-6 col-xs-12 mb-4 ">
              <div class="card card-light card-hover h-100">
                <div class="card-img-top card-img-hover"><a class="img-overlay" href="car-finder-single.html"></a>
                  <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">Used</span></div>
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                  </div><img src="img/car-finder/catalog/04.jpg" alt="Image">
                </div>
                <div class="card-body">
                  
                  <h3 class="h6 mb-1"><a class="nav-link-light" href="car-finder-single.html">Nissan 370Z Nismo</a></h3>
                  <div class="text-primary fw-bold mb-1">$37,900</div>
                  <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>New York</div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="border-top border-light pt-3">
                    <div class="row g-2">
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">16K mi</span></div>
                      </div>
                      <div class="col me-sm-1">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Automatic</span></div>
                      </div>
                      <div class="col">
                        <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Gasoline</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
  
        </div>
      </section>







  <!-- CTA carousel-->
      <section class="container pt-4 pb-5 py-sm-5">
        <div class="tns-carousel-wrapper">
          <div class="tns-carousel-inner d-block d-md-flex" data-carousel-options="{&quot;controlsContainer&quot;: &quot;#external-controls&quot;, &quot;nav&quot;: false, &quot;gutter&quot;: 20, &quot;autoHeight&quot;: true}">
            <!-- Slide 1-->
            <div>
              <div class="card card-body p-sm-5 card-light h-100">
                <div class="row align-items-center py-3 py-sm-0">
                  <div class="col-md-4 col-xl-3 mb-4 pb-3 mb-md-0 pb-md-0 text-center text-md-start">
                    <h2 class="text-light">Pièces détachées</h2>
                    <p class="fs-lg text-light opacity-70 pb-md-4">  Acheter vos pièces ici !</p><a class="btn btn-primary" href="car-finder-catalog-grid.html">Voir plus<i class="fi-chevron-right fs-sm ms-2"></i></a>
                  </div>
                  <div class="col-md-8 col-xl-9">
                    <div class="row row-cols-2 row-cols-lg-4 gy-4 gx-3 gx-sm-4"><a class="col text-light text-decoration-none" href="#"><img class="d-block mb-2 mx-auto" src="img/car-finder/categories/01.png" width="168" alt="Seat Covers">
                        <div class="fw-bold text-center pt-1">Couvres sièges</div></a><a class="col text-light text-decoration-none" href="#"><img class="d-block mb-2 mx-auto" src="img/car-finder/categories/02.png" width="168" alt="Tires">
                        <div class="fw-bold text-center pt-1">Pneus</div></a><a class="col text-light text-decoration-none" href="#"><img class="d-block mb-2 mx-auto" src="img/car-finder/categories/03.png" width="168" alt="Disks">
                        <div class="fw-bold text-center pt-1">Disques</div></a><a class="col text-light text-decoration-none" href="#"><img class="d-block mb-2 mx-auto" src="img/car-finder/categories/04.png" width="168" alt="Child Seats">
                        <div class="fw-bold text-center pt-1">Sièges Enfants</div></a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 2-->
            <div>
              <div class="card card-body p-sm-5 card-light h-100">
                <div class="row align-items-center py-3 py-sm-0">
                  <div class="col-md-6 mb-4 pb-3 mb-md-0 pb-md-0 text-center text-md-start">
                    <h2 class="text-light">Car sale in 24 hours</h2>
                    <p class="fs-lg text-light opacity-70 pb-md-4">Calculate your car's value, then choose how you want to sell.</p><a class="btn btn-primary" href="car-finder-sell-car.html">Sell my car<i class="fi-chevron-right fs-sm ms-2"></i></a>
                  </div>
                  <div class="col-md-6">
                    <div class="row row-cols-sm-3 row-cols-md-2 row-cols-lg-3 gy-4 gx-3 gx-sm-4">
                      <div class="col">
                        <div class="d-table bg-dark rounded-3 p-4 mx-auto mb-3"><img class="d-block m-sm-2" src="img/car-finder/icons/buyers.svg" width="56" alt="Vetted buyers"></div>
                        <div class="fw-bold text-center">Vetted buyers</div>
                      </div>
                      <div class="col">
                        <div class="d-table bg-dark rounded-3 p-4 mx-auto mb-3"><img class="d-block m-sm-2" src="img/car-finder/icons/tools.svg" width="56" alt="Smart tools"></div>
                        <div class="fw-bold text-center">Smart tools</div>
                      </div>
                      <div class="col">
                        <div class="d-table bg-dark rounded-3 p-4 mx-auto mb-3"><img class="d-block m-sm-2" src="img/car-finder/icons/handshake.svg" width="56" alt="Handshake"></div>
                        <div class="fw-bold text-center">The offer you deserve</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- External carousel controls-->
        <div class="tns-carousel-controls tns-carousel-light pt-4 pb-2" id="external-controls">
          <button class="me-3" type="button"><i class="fi-chevron-left"></i></button>
          <button type="button"><i class="fi-chevron-right"></i></button>
        </div>
      </section>
      <!-- Mobile app CTA-->

      @guest()
      <section class="container pb-3 pb-sm-4 pb-md-5">
        <div class="row align-items-center pb-5">
          <div class="col-md-7 col-lg-6 col-xl-5 offset-xl-1 text-center text-md-start mb-4 mb-md-0">
            <h2 class="text-light mb-4">Devenez un client !</h2>
            <p class="fs-lg text-light opacity-70 mb-md-5">Créez votre compte sur notre plateforme pour une expérience utiisateur plus personalisé et une prise en charge client de notre service après vente.</p>
            <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start">
         

              <div class="row d-flex justify-content-around">
                <div class="col-lg-3 col-md-3 col-sm-6">     
                <a class="btn btn-primary"  href="#signup-modal" data-bs-toggle="modal">S'inscrire <i class="fi-users fs-sm ms-2"></i></a>
              </div>


              <div class="col-lg-3 col-md-3 col-sm-6">     
                <a class="btn btn-primary"   href="#signin-modal" data-bs-toggle="modal">Se connecter<i class="fi-chevron-right fs-sm ms-2"></i></a>
              </div>
              </div>
 


              </div>
          </div>
          <div class="col-md-5 col-lg-6"><img class="d-block mx-auto" src="img/car-finder/home/mobile-app.png" width="460" alt="Mobile App"></div>
        </div>
      </section>    
      @endguest

      <!-- Latest news (Blog)-->
{{--       <section class="container pb-4 pb-sm-5 mb-2 mb-md-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-sm-2">
          <h2 class="h3 text-light mb-2 mb-sm-0">Pièces en stock</h2><a class="btn btn-link btn-light fw-normal px-0" href="car-finder-blog.html">Go to blog<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
        </div>


        <div class="row">
          <div class="col-12 d-flex flex-wrap justify-content-between">

            @php
            $pieces = collect([0,1,2,3,4,5,6,7,8]); 
            @endphp
            @foreach($pieces as $piece)
            <div class="col-4 mr-4">
              <article><a class="d-block rounded-3 overflow-hidden" href="car-finder-blog-single.html"><img class="d-block" src="img/car-finder/blog/04.jpg" alt="Image"></a>
                <div class="py-3"><a class="fs-xs text-uppercase text-decoration-none" href="#">Events</a>
                  <h3 class="text-light fs-base pt-1"><a class="nav-link" href="car-finder-blog-single.html">Top 10 Classic Car Events</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/08.jpg" width="44" alt="Avatar">
                    <div class="ps-2">
                      <h6 class="fs-sm text-light lh-base mb-1">Jacob Jones</h6>
                      <div class="d-flex fs-xs text-light opacity-60"><span class="me-2 pe-1"><i class="fi-calendar-alt me-1"></i>May 8</span><span><i class="fi-chat-circle me-1"></i>No comments</span></div>
                    </div></a>
                </div>
              </article>
            </div>
            @endforeach
          </div>
        </div>


      </section> --}}




      <section class="container pb-5 mb-md-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-sm-2">
          <h2 class="h3 text-light mb-2 mb-sm-0">Pièces en stock</h2><a class="btn btn-link btn-light fw-normal px-0" href="car-finder-blog.html">Go to blog<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
        </div>
        <div class="row">
            @php
            $pieces = collect([0,1,2,3,4,5,6,7,8]); 
            @endphp
            @foreach($pieces as $piece)
          <!-- Item-->
            <div class="col-4 mb-3">
              <article class="card card-light card-hover h-100" >
                <a class="d-block rounded-3 overflow-hidden" href="car-finder-blog-single.html">
                  <img class="d-block" src="img/car-finder/blog/04.jpg" alt="Image">
                </a>
   <div class="card-body position-relative pb-3">
    <div class="mb-1 fs-xs text-uppercase text-primary">Disponible</div>
    <h3 class="h6 mb-2 fs-base">
      <a href="#" class="nav-link stretched-link">Nom de la piece</a>
    </h3>
    <p class="mb-2 fs-sm text-muted">Small description</p>
    <div class="fw-bold">
      <i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>
      1000 FCFA
    </div>
  </div>
              </article>
            </div>
            @endforeach
          <!-- Item-->

        </div>
      </section>
    </main>


@endsection