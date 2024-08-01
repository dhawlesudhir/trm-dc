<nav class="navbar navbar-top navbar-slim justify-content-between fixed-top navbar-expand-lg" id="navbarTopSlim" data-navbar-appearance="darker">
    <div class="navbar-logo">

      <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopCollapse" aria-controls="navbarTopCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
      <a class="navbar-brand navbar-brand" href="{{ route('dashboard') }}" accesskey="h">phoenix <span class="text-body-highlight d-none d-sm-inline">slim</span></a>
    </div>
    <div class="collapse navbar-collapse navbar-top-collapse order-1 order-lg-0 justify-content-center" id="navbarTopCollapse">
      <ul class="navbar-nav navbar-nav-top" data-dropdown-on-hover="data-dropdown-on-hover">
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-chart-pie"></span>Home</a>
            <ul class="dropdown-menu navbar-dropdown-caret">
                <li><a class="dropdown-item" href="../index.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="shopping-cart"></span>Dashboard
                    </div>
                    </a>
                </li>

                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>ERP</span></div>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Accouting</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                    </div>
                                </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Payrolls</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                    </div>
                                </a>
                                </li>
                                <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                    </div>
                                </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Employees</span></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                                    </div>
                                </a>
                                </li>
                                <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                                    </div>
                                </a>
                                </li>
                                <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out
                                    </div>
                                </a>
                                </li>
                                <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password
                                    </div>
                                </a>
                                </li>
                                <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password
                                    </div>
                                </a>
                                </li>
                                <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen
                                    </div>
                                </a>
                                </li>
                                <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
                                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                                    </div>
                                </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="pricing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="tag"></span>Subscriptions</span></div>
                  </a>
                  <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href="../pages/pricing/pricing-grid.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Pricing
                        </div>
                      </a>
                    </li>
                    <li><a class="dropdown-item" href="../pages/pricing/pricing-column.html">
                        <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Manage pricing
                        </div>
                      </a>
                    </li>

                  </ul>
                </li>

                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="authentication" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="lock"></span>Users</span></div>
                    </a>
                    <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="simple" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Retailer</span></div>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/simple/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                            </div>
                        </a>
                        </li>
                    </ul>
                    </li>

                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="split" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Distributor</span></div>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/split/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                            </div>
                        </a>
                        </li>
                    </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="Card" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Employees</span></div>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-in.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign in
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-up.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign up
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/sign-out.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Sign out
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/forgot-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Forgot password
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/reset-password.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Reset password
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/lock-screen.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Lock screen
                            </div>
                        </a>
                        </li>
                        <li><a class="dropdown-item" href="../pages/authentication/card/2FA.html">
                            <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>2FA
                            </div>
                        </a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </li>

                <li><a class="dropdown-item" href="../apps/social/feed.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="share-2"></span>Settings
                    </div>
                    </a>
                </li>

          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-cube"></span>Services</a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li class="dropdown"><a  class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Recharge</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item"  accesskey="r" href="{{ route('mobile-recharge') }}">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Mobile
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" id="hotel" href="#">
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>D2H/TV</span></div>
                  </a>
                </li>

                <li><a class="dropdown-item" id="hotel" href="#">
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Fastag track</span></div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Bill payment</span></div>
              </a>
              <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Mobile
                    </div>
                  </a>
                </li>

                <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Broadband
                    </div>
                  </a>
                </li>

                <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Credit Card
                    </div>
                  </a>
                </li>

                <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Electricity
                    </div>
                  </a>
                </li>

                <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Water
                    </div>
                  </a>
                </li>

                <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Piped Gas
                    </div>
                  </a>
                </li>

              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Money transfer</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Domestic Money Transfer
                    </div>
                  </a>
                </li>
                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Add</span></div>
                  </a>
                  <ul class="dropdown-menu">

                    <li><a class="dropdown-item" id="admin" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Customer</span></div>
                      </a>
                    </li>

                    <li><a class="dropdown-item" id="customer" href="#" >
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Beneficiary</span></div>
                      </a>
                    </li>

                  </ul>
                </li>

                <li><a class="dropdown-item" id="admin" href="#">
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Customers</span></div>
                  </a>
                </li>

                <li><a class="dropdown-item" id="customer" href="#" >
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Beneficiaries</span></div>
                  </a>
                </li>



              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Transactions</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" id="hotel" href="#">
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>All</span></div>
                  </a>
                </li>

                <li><a class="dropdown-item" id="hotel" href="#">
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Success</span></div>
                  </a>
                </li>

                <li><a class="dropdown-item" id="hotel" href="#">
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Pending</span></div>
                  </a>
                </li>

                <li><a class="dropdown-item" id="hotel" href="#">
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Failed</span></div>
                  </a>
                </li>

                <li><a class="dropdown-item" id="hotel" href="#">
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Refund</span></div>
                  </a>
                </li>

              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-files-landscapes-alt"></span>Reports</a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            {{-- <li><a class="dropdown-item" href="../pages/starter.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="compass"></span>Statement
                </div>
              </a>
            </li> --}}
            {{-- <li><a class="dropdown-item" href="../pages/timeline.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Activities
                </div>
              </a>
            </li> --}}

            <li><a class="dropdown-item" href="../pages/timeline.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="clock"></span>Invoices
                </div>
              </a>
            </li>

            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="faq" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="help-circle"></span>Profits</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/faq/faq-accordion.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>P&L
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../pages/faq/faq-tab.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Tax P&L
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            {{-- <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="landing" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="globe"></span>Invoices</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/landing/default.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Default
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../pages/landing/alternate.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Alternate
                    </div>
                  </a>
                </li>
              </ul>
            </li> --}}

            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>Taxes</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../apps/travel-agency/landing.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>TDS
                    </div>
                  </a>
                </li>


                <li><a class="dropdown-item" id="admin" href="#">
                    <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>GST</span></div>
                  </a>
                </li>

                <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="hotel" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil"></span>Request</span></div>
                  </a>
                  <ul class="dropdown-menu">

                    <li><a class="dropdown-item" id="admin" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Form 16</span></div>
                      </a>
                    </li>

                    <li><a class="dropdown-item" id="customer" href="#" >
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>ITR Filing</span></div>
                      </a>
                    </li>

                  </ul>
                </li>

              </ul>
            </li>



            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="errors" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="users"></span>Refferals</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../pages/errors/404.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>All
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../pages/errors/403.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Retailers
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../pages/errors/500.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Distributors
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="dropdown"><a class="dropdown-item dropdown-toggle" id="layouts" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="layout"></span>Commissions</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>All services
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/vertical-sidenav.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Recharge
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/dark-mode.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Bill payment
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../demo/sidenav-collapse.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Money transfer
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        {{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-puzzle-piece"></span>Fund</a>
          <ul class="dropdown-menu navbar-dropdown-caret dropdown-menu-card py-0">
            <div class="border-0 scrollbar" style="max-height: 60vh;">
              <div class="px-3 pt-4 pb-3 img-dropdown">
                <div class="row gx-4 gy-5">
                  <div class="col-12 col-sm-6 col-md-4">
                    <div class="dropdown-item-group"><span class="me-2" data-feather="file-text" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Forms
                      </h6>
                    </div><a class="dropdown-link" href="../modules/forms/basic/form-control.html">Form control</a><a class="dropdown-link" href="../modules/forms/basic/input-group.html">Input group</a><a class="dropdown-link" href="../modules/forms/basic/select.html">Select</a><a class="dropdown-link" href="../modules/forms/basic/checks.html">Checks</a><a class="dropdown-link" href="../modules/forms/basic/range.html">Range</a><a class="dropdown-link" href="../modules/forms/basic/floating-labels.html">Floating labels</a><a class="dropdown-link" href="../modules/forms/basic/layout.html">Layout</a><a class="dropdown-link" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="dropdown-link" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="dropdown-link" href="../modules/forms/advance/editor.html">Editor</a><a class="dropdown-link" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="dropdown-link" href="../modules/forms/advance/range.html">Range</a><a class="dropdown-link" href="../modules/forms/advance/rating.html">Rating</a><a class="dropdown-link" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="dropdown-link" href="../modules/forms/validation.html">Validation</a><a class="dropdown-link" href="../modules/forms/wizard.html">Wizard</a>
                    <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="grid" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Icons
                      </h6>
                    </div><a class="dropdown-link" href="../modules/icons/feather.html">Feather</a><a class="dropdown-link" href="../modules/icons/font-awesome.html">Font awesome</a><a class="dropdown-link" href="../modules/icons/unicons.html">Unicons</a>
                    <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="bar-chart-2" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">ECharts
                      </h6>
                    </div><a class="dropdown-link" href="../modules/echarts/line-charts.html">Line charts</a><a class="dropdown-link" href="../modules/echarts/bar-charts.html">Bar charts</a><a class="dropdown-link" href="../modules/echarts/candlestick-charts.html">Candlestick charts</a><a class="dropdown-link" href="../modules/echarts/geo-map.html">Geo map</a><a class="dropdown-link" href="../modules/echarts/scatter-charts.html">Scatter charts</a><a class="dropdown-link" href="../modules/echarts/pie-charts.html">Pie charts</a><a class="dropdown-link" href="../modules/echarts/gauge-chart.html">Gauge chart</a><a class="dropdown-link" href="../modules/echarts/radar-charts.html">Radar charts</a><a class="dropdown-link" href="../modules/echarts/heatmap-charts.html">Heatmap charts</a><a class="dropdown-link" href="../modules/echarts/how-to-use.html">How to use</a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <div class="dropdown-item-group"><span class="me-2" data-feather="package" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Components
                      </h6>
                    </div><a class="dropdown-link" href="../modules/components/accordion.html">Accordion</a><a class="dropdown-link" href="../modules/components/avatar.html">Avatar</a><a class="dropdown-link" href="../modules/components/alerts.html">Alerts</a><a class="dropdown-link" href="../modules/components/badge.html">Badge</a><a class="dropdown-link" href="../modules/components/breadcrumb.html">Breadcrumb</a><a class="dropdown-link" href="../modules/components/button.html">Buttons</a><a class="dropdown-link" href="../modules/components/calendar.html">Calendar</a><a class="dropdown-link" href="../modules/components/card.html">Card</a><a class="dropdown-link" href="../modules/components/carousel/bootstrap.html">Bootstrap</a><a class="dropdown-link" href="../modules/components/carousel/swiper.html">Swiper</a><a class="dropdown-link" href="../modules/components/collapse.html">Collapse</a><a class="dropdown-link" href="../modules/components/dropdown.html">Dropdown</a><a class="dropdown-link" href="../modules/components/list-group.html">List group</a><a class="dropdown-link" href="../modules/components/modal.html">Modals</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a><a class="dropdown-link" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="dropdown-link" href="../modules/components/offcanvas.html">Offcanvas</a><a class="dropdown-link" href="../modules/components/progress-bar.html">Progress bar</a><a class="dropdown-link" href="../modules/components/placeholder.html">Placeholder</a><a class="dropdown-link" href="../modules/components/pagination.html">Pagination</a><a class="dropdown-link" href="../modules/components/popovers.html">Popovers</a><a class="dropdown-link" href="../modules/components/scrollspy.html">Scrollspy</a><a class="dropdown-link" href="../modules/components/sortable.html">Sortable</a><a class="dropdown-link" href="../modules/components/spinners.html">Spinners</a><a class="dropdown-link" href="../modules/components/toast.html">Toast</a><a class="dropdown-link" href="../modules/components/tooltips.html">Tooltips</a><a class="dropdown-link" href="../modules/components/typed-text.html">Typed text</a><a class="dropdown-link" href="../modules/components/chat-widget.html">Chat widget</a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <div class="dropdown-item-group"><span class="me-2" data-feather="columns" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Tables
                      </h6>
                    </div><a class="dropdown-link" href="../modules/tables/basic-tables.html">Basic tables</a><a class="dropdown-link" href="../modules/tables/advance-tables.html">Advance tables</a><a class="dropdown-link" href="../modules/tables/bulk-select.html">Bulk Select</a>
                    <div class="dropdown-item-group mt-5"><span class="me-2" data-feather="tool" style="stroke-width:2;"></span>
                      <h6 class="dropdown-item-title">Utilities
                      </h6>
                    </div><a class="dropdown-link" href="../modules/utilities/background.html">Background</a><a class="dropdown-link" href="../modules/utilities/borders.html">Borders</a><a class="dropdown-link" href="../modules/utilities/colors.html">Colors</a><a class="dropdown-link" href="../modules/utilities/display.html">Display</a><a class="dropdown-link" href="../modules/utilities/flex.html">Flex</a><a class="dropdown-link" href="../modules/utilities/stacks.html">Stacks</a><a class="dropdown-link" href="../modules/utilities/float.html">Float</a><a class="dropdown-link" href="../modules/utilities/grid.html">Grid</a><a class="dropdown-link" href="../modules/utilities/interactions.html">Interactions</a><a class="dropdown-link" href="../modules/utilities/opacity.html">Opacity</a><a class="dropdown-link" href="../modules/utilities/overflow.html">Overflow</a><a class="dropdown-link" href="../modules/utilities/position.html">Position</a><a class="dropdown-link" href="../modules/utilities/shadows.html">Shadows</a><a class="dropdown-link" href="../modules/utilities/sizing.html">Sizing</a><a class="dropdown-link" href="../modules/utilities/spacing.html">Spacing</a><a class="dropdown-link" href="../modules/utilities/typography.html">Typography</a><a class="dropdown-link" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="dropdown-link" href="../modules/utilities/visibility.html">Visibility</a>
                  </div>
                </div>
              </div>
            </div>
          </ul>
        </li> --}}
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle lh-1" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="uil fs-8 me-2 uil-document-layout-right"></span>Fund</a>
          <ul class="dropdown-menu navbar-dropdown-caret">
            <li><a class="dropdown-item" href="../documentation/getting-started.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="life-buoy"></span>Statement
                </div>
              </a>
            </li>
            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Add Fund</span></div>
              </a>
              <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Send Request
                    </div>
                  </a>
                </li>

                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>History</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" id="hotel" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>All</span></div>
                      </a>
                    </li>

                    <li><a class="dropdown-item" id="hotel" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Approved</span></div>
                      </a>
                    </li>

                    <li><a class="dropdown-item" id="hotel" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Pending</span></div>
                      </a>
                    </li>

                    <li><a class="dropdown-item" id="hotel" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Rejected</span></div>
                      </a>
                    </li>

                    <li><a class="dropdown-item" id="hotel" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Credit</span></div>
                      </a>
                    </li>

                  </ul>
                </li>

              </ul>
            </li>
            <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="customization" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="settings"></span>Transfer Fund</span></div>
              </a>
              <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Tranfer
                    </div>
                  </a>
                </li>

                <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Approve request
                    </div>
                  </a>
                </li>

                <li><a class="dropdown-item" href="../documentation/customization/configuration.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Debit account
                    </div>
                  </a>
                </li>

                <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="travel-agency" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="briefcase"></span>History</span></div>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" id="hotel" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>All</span></div>
                      </a>
                    </li>

                    <li><a class="dropdown-item" id="hotel" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Approved</span></div>
                      </a>
                    </li>

                    <li><a class="dropdown-item" id="hotel" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Rejected</span></div>
                      </a>
                    </li>

                    <li><a class="dropdown-item" id="hotel" href="#">
                        <div class="dropdown-item-wrapper"><span><span class="me-2 uil"></span>Credit</span></div>
                      </a>
                    </li>

                  </ul>
                </li>

              </ul>
            </li>
            {{-- <li class="dropdown dropdown-inside"><a class="dropdown-item dropdown-toggle" id="layouts-doc" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                <div class="dropdown-item-wrapper"><span class="uil fs-8 uil-angle-right lh-1 dropdown-indicator-icon"></span><span><span class="me-2 uil" data-feather="table"></span>Referrals</span></div>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../documentation/layouts/vertical-navbar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Retailers
                    </div>
                  </a>
                </li>
                <li><a class="dropdown-item" href="../documentation/layouts/horizontal-navbar.html">
                    <div class="dropdown-item-wrapper"><span class="me-2 uil"></span>Distributors
                    </div>
                  </a>
                </li>
              </ul>
            </li> --}}
            <li><a class="dropdown-item" href="../documentation/gulp.html">
                <div class="dropdown-item-wrapper"><span class="me-2 fa-brands fa-gulp ms-1 me-1 fa-lg"></span>Referral Bonus
                </div>
              </a>
            </li>
            <li><a class="dropdown-item" href="../showcase.html">
                <div class="dropdown-item-wrapper"><span class="me-2 uil" data-feather="monitor"></span>Bank Account
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons flex-row">
      <li class="nav-item">
        <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim">
          <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" />
          <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label>
          <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label>
        </div>
      </li>
      <li class="nav-item"> <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBoxModal" accesskey="/"><span class="d-inline-block" style="height:12px;width:12px;"><span data-feather="search" style="height:12px;width:12px;"></span></span></a></li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="d-inline-block" style="height:12px;width:12px;"><span data-feather="bell" style="height:12px;width:12px;"></span></span></a>

        <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
          <div class="card position-relative border-0">
            <div class="card-header p-2">
              <div class="d-flex justify-content-between">
                <h5 class="text-body-emphasis mb-0">Notifications</h5>
                <button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="scrollbar-overlay" style="height: 27rem;">
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{Vite::asset('resources/img/team/40x40/30.webp')}}" alt="" />
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown">
                      <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3">
                        <div class="avatar-name rounded-circle"><span>J</span></div>
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown">
                      <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="{{Vite::asset('resources/img/team/40x40/avatar.webp')}}" alt="" />
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown">
                      <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{Vite::asset('resources/img/team/40x40/57.webp')}}" alt="" />
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown">
                      <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{Vite::asset('resources/img/team/40x40/59.webp')}}" alt="" />
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown">
                      <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
                <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                  <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="d-flex">
                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{Vite::asset('resources/img/team/40x40/58.webp')}}" alt="" />
                      </div>
                      <div class="flex-1 me-sm-3">
                        <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                        <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                        <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                      </div>
                    </div>
                    <div class="dropdown notification-dropdown">
                      <button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                      <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer p-0 border-top border-translucent border-0">
              <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="../pages/notifications.html">Notification history</a></div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
          <svg width="10" height="10" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
          </svg></a>

        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
          <div class="card bg-body-emphasis position-relative border-0">
            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
              <div class="row text-center align-items-center gx-0 gy-0">
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/behance.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Behance</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/google-cloud.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Cloud</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/slack.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Slack</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/gitlab.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Gitlab</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/bitbucket.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">BitBucket</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/google-drive.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Drive</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/trello.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Trello</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/figma.webp')}}" alt="" width="20" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Figma</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/twitter.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Twitter</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/pinterest.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Pinterest</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/ln.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Linkedin</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/google-maps.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Maps</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/google-photos.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Photos</p>
                  </a></div>
                <div class="col-4"><a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="#!"><img src="{{Vite::asset('resources/img/nav-icons/spotify.webp')}}" alt="" width="30" />
                    <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Spotify</p>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0 white-space-nowrap" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">Olivia <span class="d-inline-block" style="height:10.2px;width:10.2px;"><span class="fa-solid fa-chevron-down fs-10"></span></span></a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
          <div class="card position-relative border-0">
            <div class="card-body p-0">
              <div class="text-center pt-4 pb-3">
                <div class="avatar avatar-xl ">
                  <img class="rounded-circle " src="{{Vite::asset('resources/img/team/72x72/57.webp')}}" alt="" />

                </div>
                <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
              </div>
              <div class="mb-3 mx-3">
                <input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" />
              </div>
            </div>
            <div class="overflow-auto scrollbar" style="height: 10rem;">
              <ul class="nav d-flex flex-column mb-2 pb-1">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="clock"></span>Activities</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
              </ul>
            </div>
            <div class="card-footer p-0 border-top border-translucent">
              <ul class="nav d-flex flex-column my-3">
                <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
              </ul>
              <hr />
              <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
              <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
            </div>
          </div>
        </div>
      </li>
    </ul>
</nav>
