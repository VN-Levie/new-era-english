<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}" itemscope itemtype="http://schema.org/WebPage">

<head>
     <meta charset="utf-8" />
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="./assets/img/favicon.png">

     <title>@yield("title", "Home") | New Era Education</title>
     <!--     Fonts and icons     -->
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
     <!-- Nucleo Icons -->
     <link href="{{ asset("assets/css/nucleo-icons.css") }}" rel="stylesheet" />
     <link href="{{ asset("assets/css/nucleo-svg.css") }}" rel="stylesheet" />
     <!-- Material Icons -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
     <!-- CSS Files -->
     <link id="pagestyle" href="{{ asset("assets/css/material-kit.css?v=3.1.0") }}" rel="stylesheet" />
</head>

<body class="index-page bg-gray-200">


     <!-- Navbar -->
     <div class="container position-sticky z-index-sticky top-0">
          <div class="row">
               <div class="col-8">
                    <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 p-2 start-0 end-0 mx-4">
                         <div class="container-fluid px-0">
                              <a class="navbar-brand font-weight-bolder ms-sm-3 text-sm" href="/" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom"
                                   target="">
                                   New Era Education
                              </a>
                              <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                                   aria-label="Toggle navigation">
                                   <span class="navbar-toggler-icon mt-2">
                                        <span class="navbar-toggler-bar bar1"></span>
                                        <span class="navbar-toggler-bar bar2"></span>
                                        <span class="navbar-toggler-bar bar3"></span>
                                   </span>
                              </button>
                              <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                                   <ul class="navbar-nav navbar-nav-hover ms-auto">



                                        <li class="nav-item ms-lg-auto">
                                             <a class="nav-link nav-link-icon me-2" href="#" target="_blank">
                                                  <i class="fa-solid fa-circle-info me-1"></i>

                                                  <p class="d-inline text-sm z-index-1 font-weight-semibold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Về Chúng Tôi">Về Chúng Tôi
                                                  </p>
                                             </a>
                                        </li>
                                        @if (Route::has("auth.login.form"))
                                             @auth
                                                  <li class="nav-item dropdown dropdown-hover mx-2">
                                                       <a class="nav-link ps-2 d-flex cursor-pointer align-items-center font-weight-semibold" id="dropdownMenuPages" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="material-symbols-rounded opacity-6 me-2 text-md">person</i>

                                                            <span class="me-1">Tài Khoản</span>
                                                            {{-- <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2"> --}}
                                                            <i class="fa-solid fa-caret-down ms-auto arrow ms-auto ms-md-1"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-animation ms-n1 dropdown-md p-3 border-radius-xl mt-0 mt-lg-1" aria-labelledby="dropdownMenuPages">
                                                            <div class="d-none d-lg-block">
                                                                 <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                                      Cá Nhân
                                                                 </h6>
                                                                 {{-- <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                                                                      <span>About Us</span>
                                                                 </a>
                                                                 <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                                                      <span>Contact Us</span>
                                                                 </a> --}}
                                                                 <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                                                      <span>Author</span>
                                                                 </a>
                                                                 @if (Auth::user()->hasPermission("dashboard.access"))
                                                                      <a href="{{ route("dashboard") }}" class="dropdown-item border-radius-md">
                                                                           <span>Quản Trị</span>
                                                                      </a>
                                                                 @endif
                                                                 <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                                                      Thao Tác
                                                                 </h6>
                                                                 <a href="#" class="dropdown-item border-radius-md logout-btn">
                                                                      <span>Đăng Xuất</span>
                                                                 </a>
                                                            </div>
                                                            <div class="d-lg-none">
                                                                 <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                                      Cá Nhân
                                                                 </h6>
                                                                 {{-- <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                                                                      <span>About Us</span>
                                                                 </a>
                                                                 <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                                                      <span>Contact Us</span>
                                                                 </a> --}}
                                                                 <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                                                      <span>Author</span>
                                                                 </a>
                                                                 <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                                                      Thao Tác
                                                                 </h6>
                                                                 <a href="#" class="dropdown-item border-radius-md logout-btn">
                                                                      <span>Đăng Xuất</span>
                                                                 </a>
                                                            </div>
                                                       </div>
                                                  </li>
                                             @else
                                                  <li class="nav-item my-auto ms-3 ms-lg-0 me-1">

                                                       <a href="{{ route("auth.login.form") }}" class="btn  bg-gradient-success  mb-0 mt-2 mt-md-0">Đăng Nhập</a>

                                                  </li>
                                                  @if (Route::has("auth.register.form"))
                                                       <li class="nav-item my-auto ms-3 ms-lg-0">

                                                            <a href="{{ route("auth.register.form") }}" class="btn  bg-gradient-primary  mb-0 mt-2 mt-md-0">Đăng Ký</a>

                                                       </li>
                                                  @endif
                                             @endauth
                                        @endif
                                   </ul>
                              </div>
                         </div>
                    </nav>
                    <!-- End Navbar -->
               </div>
          </div>
     </div>

     @yield("content")

     <footer class="footer pt-5 mt-5">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="text-center">
                              <a href="/">
                                   <img src="{{ asset("/assets/img/logo.jpg") }}" class="mb-3 w-20 rounded-circle" alt="main_logo">
                              </a>
                              <h6 class="font-weight-bolder mb-4">New Era Education</h6>
                         </div>
                    </div>
                    <div class="col-12">
                         <div class="text-center">
                              <p class="text-dark my-4 text-sm font-weight-normal">
                                   All rights reserved. New Era Education ©
                                   <script>
                                        document.write(new Date().getFullYear())
                                   </script>
                                   Make with
                                   <i class="fa fa-heart" data-bs-toggle="tooltip" data-bs-placement="top" title="Love"></i> &
                                   <i class="fa fa-coffee" data-bs-toggle="tooltip" data-bs-placement="top" title="Coffee"></i>.
                              </p>
                         </div>
                    </div>
               </div>
          </div>
     </footer>
     <!--   Core JS Files   -->
     <script src="{{ asset("assets/js/core/popper.min.js") }}" type="text/javascript"></script>
     <script src="{{ asset("assets/js/core/bootstrap.min.js") }}" type="text/javascript"></script>
     <script src="{{ asset("assets/js/plugins/perfect-scrollbar.min.js") }}"></script>
     <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
     <script src="{{ asset("assets/js/plugins/countup.min.js") }}"></script>
     <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
     <script src="{{ asset("assets/js/plugins/rellax.min.js") }}"></script>
     <script src="{{ asset("assets/js/plugins/tilt.min.js") }}"></script>
     <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
     <script src="{{ asset("assets/js/plugins/choices.min.js") }}"></script>
     <!-- Place this tag in your head or just before your close body tag. -->
     <script async defer src="https://buttons.github.io/buttons.js"></script>
     <script src="./assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
          $(".logout-btn").click(function() {
               Swal.fire({
                    title: "Xác nhận",
                    text: "Bạn có chắc muốn đăng xuất không?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Đăng xuất",
                    cancelButtonText: "Huỷ"
               }).then((result) => {
                    if (result.isConfirmed) {
                         $.post('{{ route("auth.logout") }}', {
                              _token: $('meta[name="csrf-token"]').attr('content')
                         }, function() {
                              window.location.href = '{{ route("auth.login.form") }}';
                         });
                    }
               });
          });
     </script>
     @stack("scripts")


</body>

</html>
