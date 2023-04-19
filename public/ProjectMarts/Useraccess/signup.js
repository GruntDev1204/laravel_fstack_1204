new Vue({
    el: '#signU',
    data: {
        newuser: {
            ho_va_ten: '',
            sdt: '',
            ghi_chu: '',
            email:'',
            password: '',
            re_password:'',
            dia_chi:'',
            agree:0,
        },

    },
    methods: {
        signupCus() {
            axios
                .post('/user/signup', this.newuser)
                .then((res) => {
                    if (res.data.status) {
                        toastr.info("Bạn đã đăng kí thành công !!! Vui lòng check mail để kích hoạt tài khoản!");
                    }
                    setTimeout(function() {
                      $(location).attr('href', '/user/login');;
                    }, 5000);
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function(key, value) {
                        toastr.error(value[0]);
                    });
                });
        },
        reset() {
            this.newadmin.ho_va_ten = "";
            this.newadmin.password = "";
        },

    }
});
