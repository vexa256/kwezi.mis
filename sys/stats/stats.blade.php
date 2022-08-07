
      <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
               <div class="col">
                <div class="page-pretitle">
                  Snow Hikes Wildlife Safaris
                </div>
                <h2 class="page-title">
                 {{ $Title }}
                </h2>
              </div>

            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">


              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body bg-danger">
                    <div class="d-flex align-items-center">
                      <div class="subheader text-light">Destinations</div>
                      <div class="ms-auto lh-1">
                      <i class="fas fa-map-marker-alt fa-3x"></i>
                      </div>
                    </div>
                    <div class="h1 mb-3">{{ $Destinations }}</div>
                    <a href="{{ route('MgtDestinations') }}" class="card-btn btn-sm btn-light">View Details</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body bg-success">
                    <div class="d-flex align-items-center">
                      <div class="subheader text-light">Packages</div>
                      <div class="ms-auto lh-1">
                        <i class="fas fa-box-open fa-3x"></i>
                      </div>
                    </div>
                    <div class="h1 mb-3">{{ $Packages }}</div>
                    <a href="{{ route('MgtPackages') }}" class="card-btn btn-sm btn-light">View Details</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body bg-warning">
                    <div class="d-flex align-items-center">
                      <div class="subheader text-light">Car Hire</div>
                      <div class="ms-auto lh-1">
                        <i class="fas fa-car-side fa-3x"></i>
                      </div>
                    </div>
                    <div class="h1 mb-3">{{ $Cars }}</div>
                    <a href="{{ route('MgtCars') }}" class="card-btn btn-sm btn-light">View Details</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body bg-azure">
                    <div class="d-flex align-items-center">
                      <div class="subheader text-light">Blogs</div>
                      <div class="ms-auto lh-1">
                        <i class="fas fa-book-reader fa-3x"></i>
                      </div>
                    </div>
                    <div class="h1 mb-3">{{ $Blogs }}</div>
                    <a href="{{ route('MgtBlogs') }}" class="card-btn btn-sm btn-light">View Details</a>
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>

@include('stats.stats2')
@include('stats.stats3')
@include('stats.MgtAdmins')
