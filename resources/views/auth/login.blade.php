@extends("layouts.app")
@section("title", "Đăng nhập")
@section("content")

     <div class="page-header align-items-start min-vh-100"
          style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');"
          loading="lazy">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container my-auto">
               <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                         <div class="card z-index-0 fadeIn3 fadeInBottom">
                              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                   <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">
                                             Đăng nhập
                                        </h4>
                                        <div class="row mt-3">

                                        </div>
                                   </div>
                              </div>
                              <div class="card-body">
                                   <form class="form-auth text-center" id="login_form" autocomplete="off" method="POST">
                                        <div class="input-group input-group-outline my-3">
                                             <label class="form-label">SĐT hoặc Email</label>
                                             <input type="text" class="form-control" name="login">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                             <label class="form-label">Mật khẩu</label>
                                             <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-check form-switch d-flex align-items-center mb-3">
                                             <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                                             <label class="form-check-label mb-0 ms-3" for="rememberMe">Nhớ đăng nhập</label>
                                        </div>
                                        <div class="text-center">
                                             <button class="btn bg-gradient-primary w-100 my-4 mb-2" type="submit" id="login_btn">
                                                  Đăng nhập
                                             </button>
                                        </div>
                                        <p class="mt-4 text-sm text-center">
                                             Không có tài khoản? <a href="{{ route("register") }}" class="text-dark font-weight-bolder">Đăng ký</a>
                                        </p>
                                   </form>

                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

@endsection
@push("css")
@endpush
@push("scripts")
     <script>
          $.ajaxSetup({
               headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Accept': 'application/json'
               }
          });

          $(document).ready(function() {
               // --- ĐĂNG NHẬP ---
               $("#login_form").validate({
                    rules: {
                         login: {
                              required: true
                         },
                         password: {
                              required: true,
                              minlength: 6
                         }
                    },
                    messages: {
                         login: {
                              required: "Vui lòng nhập SĐT hoặc Email"
                         },
                         password: {
                              required: "Vui lòng nhập mật khẩu",
                              minlength: "Mật khẩu ít nhất 6 ký tự"
                         }
                    },
                    submitHandler: function(form) {
                         let data = {
                              login: $('[name="login"]').val(),
                              password: $('[name="password"]').val(),
                              remember: $('#rememberMe').is(':checked') ? 1 : 0
                         };

                         $.ajax({
                              url: '{{ route("login") }}',
                              type: 'POST',
                              data: data,
                              dataType: 'json',
                              beforeSend: function() {
                                   $("#login_btn").html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop('disabled', true);
                              },
                              success: function(data) {
                                   $("#login_btn").html('Đăng nhập').prop('disabled', false);
                                   if (data.status === 'success') {
                                        Swal.fire("Thành công", data.message, "success").then(() => {
                                             window.location.href = data.redirect;
                                        });
                                   } else {
                                        Swal.fire("Lỗi", data.message, "error");
                                   }
                              },
                              error: function(xhr) {
                                   $("#login_btn").html('Đăng nhập').prop('disabled', false);
                                   let msg = 'Đăng nhập thất bại!';
                                   if (xhr.status === 422) {
                                        msg = Object.values(xhr.responseJSON.errors).map(err => err[0]).join("\n");
                                   } else if (xhr.status === 401) {
                                        msg = xhr.responseJSON.message;
                                   }
                                   Swal.fire("Lỗi", msg, "error");
                              }
                         });

                         return false;
                    }
               });
          });
     </script>
@endpush
