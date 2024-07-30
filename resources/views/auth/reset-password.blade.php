@extends("layouts.auth")

@section('title','Forgot Password')

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
                        <div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                            <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{ Vite::asset('resources/assets/img/icons/logo.png')}}" alt="phoenix" width="58" />
                            </div>
                          </a>
                          <h4 class="text-body-highlight">Reset new password</h4>
                          <p class="text-body-tertiary">Type your new password</p>
                        </div>
                        <form class="mt-5">
                          <div class="position-relative mb-2" data-password="data-password">
                            <input class="form-control form-icon-input pe-6" id="password" type="password" placeholder="Type new password" data-password-input="data-password-input" />
                            <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                          </div>
                          <div class="position-relative mb-4" data-password="data-password">
                            <input class="form-control form-icon-input pe-6" id="confirmPassword" type="password" placeholder="Cofirm new password" data-password-input="data-password-input" />
                            <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                          </div>
                          <button class="btn btn-primary w-100" type="submit">Set Password</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection