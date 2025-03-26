@extends("layouts.app")
@section("title", "Trang chủ")
@section("content")


     <header class="header-2">
          <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/bg-landing.jpg')">
               <span class="mask bg-gradient-dark opacity-4"></span>
               <div class="container">
                    <div class="row">
                         <div class="col-lg-7 text-center mx-auto">
                              <h1 class="text-white font-weight-black pt-3 mt-n5">Anh ngữ New Era</h1>
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
@endsection
@push("css")
@endpush
@push("scripts")
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
@endpush
