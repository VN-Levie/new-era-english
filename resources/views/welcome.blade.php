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
     <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
     <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />



     <!-- Material Icons -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

     <!-- CSS Files -->



     <link id="pagestyle" href="./assets/css/material-kit.css?v=3.1.0" rel="stylesheet" />


</head>

<body class="index-page bg-gray-200">


     <!-- Navbar -->
     <div class="container position-sticky z-index-sticky top-0">
          <div class="row">
               <div class="col-12">
                    <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 p-2 start-0 end-0 mx-4">
                         <div class="container-fluid px-0">
                              <a class="navbar-brand font-weight-bolder ms-sm-3 text-sm" href="https://demos.creative-tim.com/material-kit/index" rel="tooltip"
                                   title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
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
                                             <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial/material-kit" target="_blank">
                                                  <i class="fa-solid fa-circle-info me-1"></i>
                                                  <p class="d-inline text-sm z-index-1 font-weight-semibold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Về Chúng Tôi">Về Chúng Tôi
                                                  </p>
                                             </a>
                                        </li>
                                        <li class="nav-item my-auto ms-3 ms-lg-0">

                                             <a href="#" class="btn  bg-gradient-danger  mb-0 mt-2 mt-md-0">Đăng Nhập</a>

                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </nav>
                    <!-- End Navbar -->
               </div>
          </div>
     </div>


     <header class="header-2">
          <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/bg-landing.jpg')">
               <span class="mask bg-gradient-dark opacity-4"></span>
               <div class="container">
                    <div class="row">
                         <div class="col-lg-7 text-center mx-auto">
                              <h1 class="text-white font-weight-black pt-3 mt-n5">Cơ Sở Giáo Dục New Era</h1>
                              <p class="lead text-white mt-3 quote">
                                   Định hình tri thức, hướng đến tương lai
                              </p>
                         </div>
                    </div>
               </div>
          </div>
     </header>

     <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

          <section class="pt-3 pb-4" id="count-stats">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-9 mx-auto py-3">
                              <div class="row">
                                   <div class="col-md-4 position-relative">
                                        <div class="p-3 text-center">
                                             <h1 class="text-gradient text-dark"><span id="state1" countTo="5">0</span>+</h1>
                                             <h5 class="mt-3">Học viên</h5>
                                             <p class="text-sm font-weight-normal">Học sinh và phụ huynh luôn đánh giá cao chúng tôi</p>
                                        </div>
                                        <hr class="vertical dark">
                                   </div>
                                   <div class="col-md-4 position-relative">
                                        <div class="p-3 text-center">
                                             <h1 class="text-gradient text-dark"> <span id="state2" countTo="6">0</span>+</h1>
                                             <h5 class="mt-3">Giáo Viên</h5>
                                             <p class="text-sm font-weight-normal">Đội ngũ giáo viên chất lượng và đầy đủ bằng cấp chính thức</p>
                                        </div>
                                        <hr class="vertical dark">
                                   </div>
                                   <div class="col-md-4">
                                        <div class="p-3 text-center">
                                             <h1 class="text-gradient text-dark" id="state3" countTo="1">0</h1>
                                             <h5 class="mt-3">Năm hoạt động</h5>
                                             <p class="text-sm font-weight-normal">Không ngừng đổi mới và nâng cao chất lượng</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </section>
          <section>
               <div class="container py-3 mt-5">
                    <div class="row">
                         <div class="col-lg-8 mx-auto d-flex justify-content-center flex-column">
                              <h3 class="text-center">Liên Hệ Với Chúng Tôi</h3>
                              <form role="form" id="contact-form" method="post" autocomplete="off">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-md-12">
                                                  <div class="input-group input-group-dynamic mb-4">
                                                       <label class="form-label">Họ Và Tên</label>
                                                       <input class="form-control" aria-label="Tên của vị phụ huynh, học viên" type="text">
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row mb-4">
                                             <div class="col-md-6">
                                                  <div class="input-group input-group-dynamic">
                                                       <label class="form-label">Số điện thoại</label>
                                                       <input type="email" class="form-control">
                                                  </div>

                                             </div>
                                             <div class="col-md-6">
                                                  <div class="input-group input-group-dynamic">
                                                       <label class="form-label">Địa chỉ email</label>
                                                       <input type="email" class="form-control">
                                                  </div>

                                             </div>
                                             <div class="input-group mb-4 input-group-static">
                                                  <label>Lời nhắn</label>
                                                  <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                                             </div>
                                             <div class="row">
                                                  {{-- <div class="col-md-12">
                                                       <div class="form-check form-switch mb-4 d-flex align-items-center">
                                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                                                            <label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark"><u>Terms
                                                                           and
                                                                           Conditions</u></a>.</label>
                                                       </div>
                                                  </div> --}}
                                                  <div class="col-md-12">
                                                       <button type="submit" class="btn bg-gradient-dark w-100">Gửi</button>
                                                  </div>
                                             </div>
                                        </div>
                              </form>
                         </div>
                    </div>
               </div>
          </section>


     </div>




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
     <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
     <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
     <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>




     <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
     <script src="./assets/js/plugins/countup.min.js"></script>





     <script src="./assets/js/plugins/choices.min.js"></script>



     <script src="./assets/js/plugins/prism.min.js"></script>
     <script src="./assets/js/plugins/highlight.min.js"></script>



     <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
     <script src="./assets/js/plugins/rellax.min.js"></script>
     <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
     <script src="./assets/js/plugins/tilt.min.js"></script>
     <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
     <script src="./assets/js/plugins/choices.min.js"></script>
















     <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
     <!--  Google Maps Plugin    -->

     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
     <script src="./assets/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>


     <script type="text/javascript">
          if (document.getElementById('state1')) {
               const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
               if (!countUp.error) {
                    countUp.start();
               } else {
                    console.error(countUp.error);
               }
          }
          if (document.getElementById('state2')) {
               const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
               if (!countUp1.error) {
                    countUp1.start();
               } else {
                    console.error(countUp1.error);
               }
          }
          if (document.getElementById('state3')) {
               const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
               if (!countUp2.error) {
                    countUp2.start();
               } else {
                    console.error(countUp2.error);
               };
          }
     </script>


























</body>

</html>
