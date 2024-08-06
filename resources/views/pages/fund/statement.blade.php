@extends('layouts.app')


@section('content')
    {{-- <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
        <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
        <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav> --}}
    <div class="mb-9">
        <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Statement</h2>
        </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><span>All </span><span class="text-body-tertiary fw-semibold">(68817)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span>Credit </span><span class="text-body-tertiary fw-semibold">(70348)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><span>Debit </span><span class="text-body-tertiary fw-semibold">(17)</span></a></li>
        </ul>
        <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
        <div class="mb-2">

            <div class="row g-3 justify-content-between mb-4">

                <div class="col-auto d-md-flex justify-content-between gap-3">
                    <div class="search-box">
                        <form class="position-relative">
                            <input class="form-control search-input search" type="search" placeholder="Search transactions" aria-label="Search" />
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                    </div>
                    <div class="filter-btn-group col-auto scrollbar overflow-hidden-y flex-grow-1 px-1">

                        <div class="btn-group position-static" role="group">

                            <div class="btn-group position-static text-nowrap">
                                <button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                Service<span class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Recharge</a></li>
                                <li><a class="dropdown-item" href="#">Bill payments</a></li>
                                <li><a class="dropdown-item" href="#">Money transfer</a></li>
                                {{-- <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li> --}}
                                </ul>
                            </div>

                            <div class="btn-group position-static text-nowrap">
                                <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                Service type<span class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Prepaid</a></li>
                                <li><a class="dropdown-item" href="#">D2H</a></li>
                                <li><a class="dropdown-item" href="#">Postpaid</a></li>
                                <li><a class="dropdown-item" href="#">Account verification</a></li>
                                <li><a class="dropdown-item" href="#">IMPS</a></li>
                                <li><a class="dropdown-item" href="#">Electricity</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#">Select type</a></li>
                                </ul>
                            </div>

                            <div class="btn-group position-static text-nowrap">
                                <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                User<span class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Retailers</a></li>
                                <li><a class="dropdown-item" href="#">Distributors</a></li>
                                <li><a class="dropdown-item" href="#">Other</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#">Select user</a></li>
                                </ul>
                            </div>

                            {{-- <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More filters</button> --}}

                        </div>
                    </div>
                </div>

                <div class="col-auto d-flex">

                    {{-- <div class="flatpickr-input-container">
                        <input class="form-control ps-6 datetimepicker flatpickr-input active" id="datepicker" type="text" data-options="{&quot;dateFormat&quot;:&quot;M j, Y&quot;,&quot;disableMobile&quot;:true,&quot;defaultDate&quot;:&quot;Mar 1, 2022&quot;}" readonly="readonly">
                    </div> --}}
                    {{-- <div class="d-flex align-items-center">
                        <span class="uil uil-calendar-alt text-body-tertiary me-2  scale-125"></span>
                        <div class="flatpickr-input-container"> --}}

                    {{-- <input class="form-control datetimepicker" id="timepicker2" type="text" placeholder="d/m/y to d/m/y" data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}' readonly="readonly" /> --}}

                            {{-- <input class="form-control datetimepicker flatpickr-input" id="timepicker2" type="text" placeholder="D/M/Y to D/M/Y" data-options="{&quot;mode&quot;:&quot;range&quot;,&quot;dateFormat&quot;:&quot;d/m/Y&quot;,&quot;disableMobile&quot;:true}" readonly="readonly" fdprocessedid="5kucrd"> --}}
                        {{-- </div>
                    </div> --}}

                    <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_4"/>
                    <button class="btn btn-link text-body me-4 px-0 mt-2 ms-2"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button>
                </div>
              </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
            <div class="table-responsive scrollbar mx-n1 px-1">
                <table id="statementsTable" class="table table-sm fs-9 mb-0">
                    <thead>
                      <tr>
                        <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:10%;">LEDGER ID</th>
                        <th class="sort align-middle pe-5" scope="col" data-sort="customer" style="width:15%;">CUSTOMER</th>
                        <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:5%;">USER ID</th>
                        <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:10%;">TRANSACTION ID</th>
                        <th class="sort align-middle ps-4" scope="col" data-sort="city" style="width:8%;">TYPE</th>
                        <th class="sort align-middle text-end" scope="col" data-sort="total-orders" style="width:10%">AMOUNT</th>
                        <th class="sort align-middle text-end ps-3" scope="col" data-sort="total-spent" style="width:10%">COMMISSION</th>
                        <th class="sort align-middle text-end ps-3" scope="col" data-sort="total-spent" style="width:10%">BALANCE</th>
                        <th class="sort align-middle ps-2" scope="col" data-sort="city" style="width:30%;">DESC</th>
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="last-order" style="width:15%;min-width: 150px;">DATETIME</th>
                      </tr>
                    </thead>
                    <tbody class="list" id="customers-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="mailto:annac34@gmail.com">LGR001</a></td>
                            <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-body-emphasis" href="../../../apps/e-commerce/admin/customer-details.html">
                                <div class="avatar avatar-m"><img class="rounded-circle" src="{{ Vite::asset('resources/img/team/32.webp') }}" alt="" />
                                </div>
                                <p class="mb-0 ms-3 text-body-emphasis fw-bold">Carry Anna</p>
                            </a></td>
                            <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="mailto:annac34@gmail.com">RT001</a></td>
                            <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="mailto:annac34@gmail.com">TR001</a></td>
                            <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">CREDIT</span></span></td>
                            <td class="total-orders align-middle white-space-nowrap fw-semibold text-end text-body-highlight">89</td>
                            <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-body-emphasis">$ 23987</td>
                            <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-body-emphasis">$ 23987</td>
                            {{-- <td class="city align-middle white-space-nowrap text-body-highlight ps-7">Budapest</td> --}}
                            <td class="tags align-middle review pb-2 ps-7" style="min-width: 225px">
                                <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">FUND</span></a>
                                <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">RECEIVED</span></a>
                                <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">ADMIN</span></a>
                                <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">ONLINE</span></a>
                            </td>
                            <td class="last-order align-middle white-space-nowrap text-body-tertiary text-end">Dec 12, 12:56 PM</td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="mailto:annac34@gmail.com">LGR001</a></td>

                            <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-body-emphasis" href="../../../apps/e-commerce/admin/customer-details.html">
                                <div class="avatar avatar-m"><img class="rounded-circle" src="{{ Vite::asset('resources/img/team/34.webp') }}" alt="" />
                                </div>
                                <p class="mb-0 ms-3 text-body-emphasis fw-bold">Carry Anna</p>
                            </a></td>
                            <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="mailto:annac34@gmail.com">RT001</a></td>
                            <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semibold" href="mailto:annac34@gmail.com">TR001</a></td>
                            <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary"><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span class="badge-label">DEBIT</span></span></td>

                            <td class="total-orders align-middle white-space-nowrap fw-semibold text-end text-body-highlight">89</td>
                            <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-body-emphasis">$ 23987</td>
                            <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-body-emphasis">$ 23987</td>
                            <td class="tags align-middle review pb-2 ps-7" style="min-width: 225px">
                                <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">RECHARGE</span></a>
                                <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">PREPAID</span></a>
                                <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">JIO</span></a>
                                <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">MOBILE</span></a>
                            </td>
                            <td class="last-order align-middle white-space-nowrap text-body-tertiary text-end">Dec 12, 12:56 PM</td>
                        </tr>


                    </tbody>
                  </table>
            </div>
            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
            <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
            <div class="col-auto d-flex">
                <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul>
                <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('scripts')
{{-- <script src="{{Vite::asset('resources/js/fund/common.js')}}"></script> --}}
<script src="{{Vite::asset('resources/js/fund/statement.js')}}" type="module"></script>
@endpush
