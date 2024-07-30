@extends("layouts.auth")

@section('title','OTP authenticate')

@section('content')
      <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
        <div class="bg-holder bg-auth-card-overlay" style="background-image:url(../../'{{Vite::asset('resources/assets/img/bg/37.png')}}">
        </div>
        <!--/.bg-holder-->

        <div class="row flex-center position-relative min-vh-100 g-0 py-5">
          <div class="col-11 col-sm-10 col-xl-8">
            <div class="card border border-translucent auth-card">
              <div class="card-body pe-md-0">
                <div class="row align-items-center gx-0 gy-7">
                  <div class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                    <div class="bg-holder" style="background-image:url('{{Vite::asset('resources/assets/img/bg/38.png')}}'">
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
                    <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-15"><img class="auth-title-box-img d-dark-none" src="{{Vite::asset('resources/assets/img/spot-illustrations/auth.png')}}" alt="" /><img class="auth-title-box-img d-light-none" src="{{Vite::asset('resources/assets/img/spot-illustrations/auth-dark.png')}}" alt="" /></div>
                  </div>
                  <div class="col mx-auto">
                    <div class="auth-form-box">
                      <div class="text-center"><a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                          <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{Vite::asset('resources/assets/img/icons/logo.png')}}" alt="phoenix" width="58" />
                          </div>
                        </a>
                        <h4 class="text-body-highlight">Enter the verification code</h4>
                        <p class="text-body-tertiary mb-0">An email containing a 6-digit verification code has been sent to the email address - exa*********.com </p>
                        <P class="fs-10 mb-5">Don’t have access? <a href="#!">Use another method</a></P>
                        <form class="verification-form" data-2fa-form="data-2fa-form">
                          <div class="d-flex align-items-center gap-2 mb-3">
                            <input class="form-control px-2 text-center" type="number" />
                            <input class="form-control px-2 text-center" type="number" />
                            <input class="form-control px-2 text-center" type="number" /><span>-</span>
                            <input class="form-control px-2 text-center" type="number" />
                            <input class="form-control px-2 text-center" type="number" />
                            <input class="form-control px-2 text-center" type="number" />
                          </div>
                          <div class="form-check text-start mb-4">
                            <input class="form-check-input" id="2fa-checkbox" type="checkbox" />
                            <label for="2fa-checkbox">Don’t ask again on this device</label>
                          </div>
                          <Button class="btn btn-primary w-100 mb-5" type="submit" disabled="disabled">Verify</Button><a class="fs-9" href="#!">Didn’t receive the code? </a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
