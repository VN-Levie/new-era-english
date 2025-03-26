@extends("layouts.app")
@section("title", "Đăng ký")
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
                                             Đăng ký
                                        </h4>
                                        <div class="row mt-3">
                                        </div>
                                   </div>
                              </div>
                              <div class="card-body">
                                   <form class="form-auth text-center" id="register_form" autocomplete="off" method="POST">
                                        <div class="input-group input-group-outline my-3">
                                             <label class="form-label">Họ và tên</label>
                                             <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="input-group input-group-outline my-3">
                                             <label class="form-label">SĐT hoặc Email</label>
                                             <input type="text" class="form-control" name="contact">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                             <label class="form-label">Mật khẩu</label>
                                             <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                             <label class="form-label">Nhập lại mật khẩu</label>
                                             <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                        <div class="text-center">
                                             <button class="btn bg-gradient-primary w-100 my-4 mb-2" type="submit" id="register_btn">
                                                  Đăng ký
                                             </button>
                                        </div>
                                        <p class="mt-4 text-sm text-center">
                                             Đã có tài khoản? <a href="{{ route("auth.login.form") }}" class="text-dark font-weight-bolder">Đăng nhập</a>
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

          $("#register_form").validate({
               rules: {
                    name: {
                         required: true,
                         maxlength: 255
                    },
                    contact: {
                         required: true
                    },
                    password: {
                         required: true,
                         minlength: 6
                    },
                    password_confirmation: {
                         equalTo: '[name="password"]'
                    }
               },
               messages: {
                    name: {
                         required: "Vui lòng nhập tên",
                         maxlength: "Tên không được vượt quá 255 ký tự"
                    },
                    contact: {
                         required: "Vui lòng nhập SĐT hoặc Email"
                    },
                    password: {
                         required: "Vui lòng nhập mật khẩu",
                         minlength: "Mật khẩu ít nhất 6 ký tự"
                    },
                    password_confirmation: {
                         equalTo: "Xác nhận mật khẩu không khớp"
                    }
               },
               submitHandler: function(form) {
                    let contact = $('[name="contact"]').val().trim();
                    let isEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(contact);
                    let data = {
                         name: $('[name="name"]').val(),
                         password: $('[name="password"]').val(),
                         password_confirmation: $('[name="password_confirmation"]').val()
                    };

                    if (isEmail) {
                         data.email = contact;
                    } else if (/^\d{9,12}$/.test(contact)) {
                         data.phone = contact;
                    } else {
                         Swal.fire("Lỗi", "SĐT hoặc Email không hợp lệ", "error");
                         return false;
                    }

                    $.ajax({
                         url: '{{ route("auth.register.submit") }}',
                         type: 'POST',
                         data: data,
                         dataType: 'json',
                         beforeSend: function() {
                              $("#register_btn").html('<i class="fa fa-spinner fa-spin"></i> Đang xử lý...').prop('disabled', true);
                         },
                         success: function(data) {
                              $("#register_btn").html('Đăng ký').prop('disabled', false);
                              if (data.status === 'success') {
                                   Swal.fire("Thành công", data.message, "success").then(() => {
                                        window.location.href = data.redirect;
                                   });
                              } else {
                                   Swal.fire("Lỗi", data.message, "error");
                              }
                         },
                         error: function(xhr) {
                              $("#register_btn").html('Đăng ký').prop('disabled', false);
                              let msg = 'Đăng ký thất bại!';
                              if (xhr.status === 422) {
                                   msg = Object.values(xhr.responseJSON.errors).map(err => err[0]).join("\n");
                              }
                              Swal.fire("Lỗi", msg, "error");
                         }
                    });

                    return false;
               }
          });
     </script>
@endpush
