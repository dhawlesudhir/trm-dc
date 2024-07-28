@extends('layouts.auth')
@section('title','logged out')

@section('content')
        <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
          <div class="bg-holder bg-auth-card-overlay" style="background-image:url({{ Vite::asset('resources/assets/img/bg/37.png')}})">
          </div>
          <!--/.bg-holder-->

          <div class="row flex-center position-relative min-vh-100 g-0 py-5">
            <div class="col-11 col-sm-10 col-xl-8">
              <div class="card border border-translucent auth-card">
                <div class="card-body pe-md-0">
                  <div class="row align-items-center gx-0 gy-7">
                    <div class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                      <div class="bg-holder" style="background-image:url({{ Vite::asset('resources/assets/img/bg/38.png')}})">
                      </div>
                      <!--/.bg-holder-->

                      <div class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7">
                        <h3 class="mb-3 text-body-emphasis fs-7">Phoenix Authentication</h3>
                        <p class="text-body-tertiary">Give yourself some hassle-free development process with the uniqueness of Phoenix!</p>
                        <ul class="list-unstyled mb-0 w-max-content w-md-auto">
                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Fast</span></li>
                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Simple</span></li>
                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-body-tertiary fw-semibold">Responsive</span></li>
                        </ul>
                      </div>
                      <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15"><img class="auth-title-box-img d-dark-none" src="{{ Vite::asset('resources/assets/img/spot-illustrations/auth.png')}}" alt="" /><img class="auth-title-box-img d-light-none" src="{{ Vite::asset('resources/assets/img/spot-illustrations/auth-dark.png')}}"
                         alt="" /></div>
                    </div>
                    <div class="col mx-auto">
                      <div class="auth-form-box">
                        <div class="text-center mb-6 mx-auto"><img class="mb-7 d-dark-none" src="{{ Vite::asset('resources/assets/img/spot-illustrations/1.png')}}" alt="phoenix" /><img class="mb-7 d-light-none" src="{{ Vite::asset('resources/assets/img/spot-illustrations/dark_1.png')}}" alt="phoenix" />
                          <div class="mb-6">
                            <h4 class="text-body-highlight">Come back soon!</h4>
                            <p class="text-body-tertiary">Thanks for using Phoenix. <br class="d-lg-none" />You are now successfully <br class="d-sm-none" />signed out.</p>
                          </div>
                          <div class="d-grid"><a class="btn btn-primary" href="{{ route('sign-in') }}"><span class="fas fa-angle-left me-2"></span>Go to sign in page</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script>
          var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
          var navbarTop = document.querySelector('.navbar-top');
          if (navbarTopStyle === 'darker') {
            navbarTop.setAttribute('data-navbar-appearance', 'darker');
          }

          var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
          var navbarVertical = document.querySelector('.navbar-vertical');
          if (navbarVertical && navbarVerticalStyle === 'darker') {
            navbarVertical.setAttribute('data-navbar-appearance', 'darker');
          }
        </script>



@endsection

