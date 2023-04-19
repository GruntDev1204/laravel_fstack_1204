$(document).ready(function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#loginAgent").click(function(e) {
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        var payload = {
            'email'     : email,
            'password'  : password,
        };
        $.ajax({
            url     :   '/agent/login',
            data    :   payload,
            type    :   'post',
            success :   function(res) {
                if(res.status == 2) {
                    toastr.success('Đăng nhập  thành công!');
                    setTimeout(function(){
                        $(location).attr('href','/client');;
                    }, 100);
                } else if(res.status == 1) {
                    toastr.warning("Bạn chưa kích hoạt email! vui lòng check mail để kích hoạt tài khoản (loại tài khoản : Agent)");
                } else {
                    toastr.error("Email hoặc mật khẩu của bạn không đúng! (loại tài khoản : Agent)");
                }
            },
            error   :   function(res) {
                var danh_sach_loi = res.responseJSON.errors;
                $.each(danh_sach_loi, function(key, value){
                    toastr.error(value[0]);
                });
            }
        });
    });

    $("#loginUser").click(function(e) {
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        var payload = {
            'email'     : email,
            'password'  : password,
        };
        $.ajax({
            url     :   '/user/loginStatus',
            data    :   payload,
            type    :   'post',
            success :   function(res) {
                if(res.status == 2) {
                    toastr.success('Đăng nhập thành công! Loại tài khoản : User');
                    setTimeout(function(){
                        $(location).attr('href','/client');;
                    }, 100);
                } else if(res.status == 1) {
                    toastr.warning("Bạn chưa kích hoạt email! vui lòng check mail để kích hoạt tài khoản (loại tài khoản : User)");
                } else {
                    toastr.error("Email hoặc mật khẩu của bạn không đúng! (loại tài khoản : User)");
                }
            },
            error   :   function(res) {
                var danh_sach_loi = res.responseJSON.errors;
                $.each(danh_sach_loi, function(key, value){
                    toastr.error(value[0]);
                });
            }
        });
    });

});
