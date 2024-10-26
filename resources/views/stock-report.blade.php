<!DOCTYPE html>

































<!-- =========================================================
* sneat - Bootstrap Dashboard PRO | v2.0.0
==============================================================

* Product Page: https://themeselection.com/item/sneat-dashboard-pro-bootstrap/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template" data-style="light">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Demo : Dashboard - Logistics | sneat - Bootstrap Dashboard PRO</title>


    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">


    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    {{-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    //   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    //   j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    //   })(window,document,'script','dataLayer','GTM-5DDHKGP');</script> --}}
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href={{ asset('front/assets/img/favicon/favicon.ico') }} />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href={{ asset('front/assets/vendor/fonts/boxicons.css') }} />
    <link rel="stylesheet" href={{ asset('front/assets/vendor/fonts/fontawesome.css') }} />
    <link rel="stylesheet" href={{ asset('front/assets/vendor/fonts/flag-icons.css') }} />

    <!-- Core CSS -->
    <link rel="stylesheet" href={{ asset('front/assets/vendor/css/rtl/core.css') }}  class="template-customizer-core-css" />
    <link rel="stylesheet" href={{ asset('front/assets/vendor/css/rtl/theme-default.css') }}  class="template-customizer-theme-css" />
    <link rel="stylesheet" href={{ asset('front/assets/css/demo.css') }}  />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href={{ asset('front/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}  />
    <link rel="stylesheet" href={{ asset('front/assets/vendor/libs/typeahead-js/typeahead.css') }} />
    <link rel="stylesheet" href={{ asset('front/assets/vendor/libs/apex-charts/apex-charts.css') }} />
<link rel="stylesheet" href={{ asset('front/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}  />
<link rel="stylesheet" href={{ asset('front/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}  />

    <!-- Page CSS -->

<link rel="stylesheet" href={{ asset('front/assets/vendor/css/pages/app-logistics-dashboard.css') }}  />

    <!-- Helpers -->
    <script src={{ asset('front/assets/vendor/js/helpers.js') }}></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src={{ asset('front/assets/vendor/js/template-customizer.js') }}></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src={{ asset('front/assets/js/config.js') }}></script>

</head>

<body>


  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe"https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">







<!-- Menu -->


<!-- / Menu -->



    <!-- Layout container -->
    <div class="layout-page">





<!-- Navbar -->
@include('layouts.partials.navbar')
<!-- / Navbar -->



      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">





<div class="row g-6">
  <!-- Card Border Shadow -->
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-primary h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-primary"><i class="bx bxs-truck bx-lg"></i></span>
          </div>
          <h4 class="mb-0">{{ $totalStock }}</h4>
        </div>
        <p class="mb-2">Total Stock</p>
        <p class="mb-0">
          {{-- <span class="text-heading fw-medium me-2">+18.2%</span> --}}
          {{-- <span class="text-muted">than last week</span> --}}
        </p>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-warning h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-error bx-lg'></i></span>
          </div>
          <h4 class="mb-0">${{ number_format($totalSales, 2) }}</h4>
        </div>
        <p class="mb-2">Total Sales</p>
        <p class="mb-0">
          {{-- <span class="text-heading fw-medium me-2">-8.7%</span>
          <span class="text-muted">than last week</span> --}}
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-danger h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-danger"><i class='bx bx-git-repo-forked bx-lg'></i></span>
          </div>
          <h4 class="mb-0">${{ number_format($totalPurchases, 2) }}</h4>
        </div>
        <p class="mb-2">Total Purchases</p>
        <p class="mb-0">
          {{-- <span class="text-heading fw-medium me-2">+4.3%</span>
          <span class="text-muted">than last week</span> --}}
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-info h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-info"><i class='bx bx-time-five bx-lg'></i></span>
          </div>
          <h4 class="mb-0">{{ $transactions->sum('total_quantity') }}</h4>
        </div>
        <p class="mb-2">Total Quantity (All Types)</p>
        <p class="mb-0">
          {{-- <span class="text-heading fw-medium me-2">-2.5%</span>
          <span class="text-muted">than last week</span> --}}
        </p>
      </div>
    </div>
  </div>
  <!--/ Card Border Shadow -->

  <div class="col-sm-6 col-md-3 col-lg-6 mb-6">
    <div class="card h-100">
      <div class="card-body pb-4">
        <span class="d-block fw-medium mb-1">Purchase Trend</span>
        <h4 class="card-title mb-0">{{ $purchaseTrends->sum('total_quantity') }}</h4>
    </div>
      <div id="sessionsChart" class="mb-4" style="min-height: 80px;"><div id="apexchartsjio02vsr" class="apexcharts-canvas apexchartsjio02vsr apexcharts-theme-light" style="width: 514px; height: 80px;"><svg id="SvgjsSvg4636" width="514" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG4638" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs4637"><clipPath id="gridRectMaskjio02vsr"><rect id="SvgjsRect4643" width="512" height="82" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskjio02vsr"></clipPath><clipPath id="nonForecastMaskjio02vsr"></clipPath><clipPath id="gridRectMarkerMaskjio02vsr"><rect id="SvgjsRect4644" width="534" height="108" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient4666" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4667" stop-opacity="0.8" stop-color="rgba(255,171,0,0.8)" offset="0"></stop><stop id="SvgjsStop4668" stop-opacity="0.25" stop-color="rgba(51,34,0,0.25)" offset="0.95"></stop><stop id="SvgjsStop4669" stop-opacity="0.25" stop-color="rgba(51,34,0,0.25)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine4642" x1="379" y1="0" x2="379" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="379" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG4672" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4673" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4684" class="apexcharts-grid"><g id="SvgjsG4685" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4687" x1="0" y1="0" x2="506" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4688" x1="0" y1="16" x2="506" y2="16" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4689" x1="0" y1="32" x2="506" y2="32" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4690" x1="0" y1="48" x2="506" y2="48" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4691" x1="0" y1="64" x2="506" y2="64" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4692" x1="0" y1="80" x2="506" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4686" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4694" x1="0" y1="80" x2="506" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4693" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4645" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG4646" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath4670" d="M 0 80L 0 26.666666666666657L 63.25000000000001 26.666666666666657L 126.50000000000001 48L 189.75 48L 253.00000000000003 69.33333333333333L 316.25 69.33333333333333L 379.5 37.33333333333334L 442.75000000000006 37.33333333333334L 506.00000000000006 10.666666666666657L 506.00000000000006 80M 506.00000000000006 10.666666666666657z" fill="url(#SvgjsLinearGradient4666)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjio02vsr)" pathTo="M 0 80L 0 26.666666666666657L 63.25000000000001 26.666666666666657L 126.50000000000001 48L 189.75 48L 253.00000000000003 69.33333333333333L 316.25 69.33333333333333L 379.5 37.33333333333334L 442.75000000000006 37.33333333333334L 506.00000000000006 10.666666666666657L 506.00000000000006 80M 506.00000000000006 10.666666666666657z" pathFrom="M -1 176L -1 176L 63.25000000000001 176L 126.50000000000001 176L 189.75 176L 253.00000000000003 176L 316.25 176L 379.5 176L 442.75000000000006 176L 506.00000000000006 176"></path><path id="SvgjsPath4671" d="M 0 26.666666666666657L 63.25000000000001 26.666666666666657L 126.50000000000001 48L 189.75 48L 253.00000000000003 69.33333333333333L 316.25 69.33333333333333L 379.5 37.33333333333334L 442.75000000000006 37.33333333333334L 506.00000000000006 10.666666666666657" fill="none" fill-opacity="1" stroke="#ffab00" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskjio02vsr)" pathTo="M 0 26.666666666666657L 63.25000000000001 26.666666666666657L 126.50000000000001 48L 189.75 48L 253.00000000000003 69.33333333333333L 316.25 69.33333333333333L 379.5 37.33333333333334L 442.75000000000006 37.33333333333334L 506.00000000000006 10.666666666666657" pathFrom="M -1 176L -1 176L 63.25000000000001 176L 126.50000000000001 176L 189.75 176L 253.00000000000003 176L 316.25 176L 379.5 176L 442.75000000000006 176L 506.00000000000006 176"></path><g id="SvgjsG4647" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG4649" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjio02vsr)"><circle id="SvgjsCircle4650" r="6" cx="0" cy="26.666666666666657" class="apexcharts-marker no-pointer-events wjo7yiwr2" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle4651" r="6" cx="63.25000000000001" cy="26.666666666666657" class="apexcharts-marker no-pointer-events w4fxk9u28g" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4652" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjio02vsr)"><circle id="SvgjsCircle4653" r="6" cx="126.50000000000001" cy="48" class="apexcharts-marker no-pointer-events wxuz460p4" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4654" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjio02vsr)"><circle id="SvgjsCircle4655" r="6" cx="189.75" cy="48" class="apexcharts-marker no-pointer-events w0umv42t2" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4656" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjio02vsr)"><circle id="SvgjsCircle4657" r="6" cx="253.00000000000003" cy="69.33333333333333" class="apexcharts-marker no-pointer-events w08pg1grcg" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4658" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjio02vsr)"><circle id="SvgjsCircle4659" r="6" cx="316.25" cy="69.33333333333333" class="apexcharts-marker no-pointer-events w55de8gtg" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4660" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjio02vsr)"><circle id="SvgjsCircle4661" r="6" cx="379.5" cy="37.33333333333334" class="apexcharts-marker no-pointer-events wbar4fhwi" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4662" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjio02vsr)"><circle id="SvgjsCircle4663" r="6" cx="442.75000000000006" cy="37.33333333333334" class="apexcharts-marker no-pointer-events w4pgm61ub" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4664" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskjio02vsr)"><circle id="SvgjsCircle4665" r="6" cx="506.00000000000006" cy="10.666666666666657" class="apexcharts-marker no-pointer-events w1ja8wkdf" stroke="#ffab00" fill="#2b2c40" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="8" j="8" index="0" default-marker-size="6"></circle></g></g></g><g id="SvgjsG4648" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine4695" x1="0" y1="0" x2="506" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4696" x1="0" y1="0" x2="506" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4697" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4698" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4699" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect4641" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG4683" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4639" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 251.525px; top: 40.8333px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">7</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 171, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series-1: </span><span class="apexcharts-tooltip-text-y-value">260</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 515px; height: 200px;"></div></div><div class="contract-trigger"></div></div></div>
  </div>

  <div class="col-sm-6 col-md-3 col-lg-6 mb-6">
  <div class="card h-100">
    <div class="card-body">
      <div class="card-title d-flex align-items-start justify-content-between mb-4">
        <div class="avatar flex-shrink-0">
          <img src="../../assets/img/icons/unicons/cube-secondary.png" alt="cube" class="rounded">
        </div>
        <div class="dropdown">
          <button class="btn p-0 show" type="button" id="cardOpt2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="bx bx-dots-vertical-rounded text-muted"></i>
          </button>

        </div>
      </div>
      <span class="d-block fw-medium mb-1">Return Trend</span>
      <h4 class="card-title mb-0">{{ $returnTrends->sum('total_quantity') }}</h4> <!-- Total quantity for returns -->
      <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -13.24%</small>
    </div>
  </div>
</div>

  <!-- transaction overview -->
  <div class="col-lg-7 col-xxl-8 mb-6 mb-lg-0">
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-sm text-nowrap table-border-top-0">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Transaction Type</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Date</th>
                        {{-- <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($transactionHistory as $transaction)
<tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('path/to/product/image.png') }}" alt="Product Image" height="32" width="32" class="me-3">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-0">{{ $transaction->product->name ?? 'N/A' }}</h6>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-label-primary rounded-pill">{{ ucfirst($transaction->type) }}</span></td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>${{ number_format($transaction->amount, 2) }}</td>
                        <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    {{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> View Details</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                </div>
                            </div>
                        </td>
                    </tr>
@endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

  <!--/ transaction overview -->

          <!-- / Content -->




<!-- Footer -->
@include('layouts.partials.footer')
<!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

  </div>
  <!-- / Layout wrapper -->


  <div class="buy-now">
    <a href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>




  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="{{ asset('front/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('front/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('front/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('front/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('front/assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('front/assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('front/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
<script src="{{ asset('front/assets/vendor/js/menu.js') }}"></script>

<!-- Vendors JS -->
<script src="{{ asset('front/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('front/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('front/assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('front/assets/js/app-logistics-dashboard.js') }}"></script>

</body>

</html>

<!-- beautify ignore:end -->
