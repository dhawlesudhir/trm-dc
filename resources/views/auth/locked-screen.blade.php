@extends("layouts.auth")

@section('title','Insert Password')

@section('content')

        <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
          <div class="bg-holder bg-auth-card-overlay" style="background-image:url({{ Vite::asset('resources/assets/img/bg/37.png')}}">
          </div>
          <!--/.bg-holder-->

          <div class="row flex-center position-relative min-vh-100 g-0 py-5">
            <div class="col-11 col-sm-10 col-xl-8">
              <div class="card border border-translucent auth-card">
                <div class="card-body pe-md-0">
                  <div class="row align-items-center gx-0 gy-7">
                    <div class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                      <div class="bg-holder" style="background-image:url({{ Vite::asset('resources/assets/img/bg/38.png')}}">
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
                      <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15"><img class="auth-title-box-img d-dark-none" src="{{ Vite::asset('resources/assets/img/spot-illustrations/auth.png')}}" alt="" /><img class="auth-title-box-img d-light-none" src="{{ Vite::asset('resources/assets/img/spot-illustrations/auth-dark.png')}}" alt="" /></div>
                    </div>
                    <div class="col mx-auto">
                      <div class="auth-form-box">
                        <div class="text-center mb-5">
                          <div class="avatar avatar-4xl mb-4"><img class="rounded-circle" src="{{ Vite::asset('resources/assets/img/team/30.webp')}}" alt="" /></div>
                          <h2 class="text-body-highlight"> <span class="fw-normal">Hello </span>John Smith</h2>
                          <p class="text-body-tertiary">Enter your password to access <br class="d-sm-none d-md-block d-xxl-none" />the admin</p>
                        </div>
                        <div class="position-relative" data-password="data-password">
                          <input class="form-control mb-3" id="password" type="password" placeholder="Enter Password" data-password-input="data-password-input" />
                          <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                        </div><a class="btn btn-primary w-100" href="{{ Vite::asset('resources/index.html')}}">Sign In</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
