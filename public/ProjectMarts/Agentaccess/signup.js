new Vue({
    el: '#loginA',
    data: {
        newagent: {
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
        signupAgent() {
            axios
                .post('/agent/register', this.newagent)
                .then((res) => {
                    if (res.data.status) {
                        toastr.info("Bạn đã đăng kí thành công !!! Vui lòng check mail để kích hoạt tài khoản!");
                    }
                    setTimeout(function() {
                      $(location).attr('href', '/agent/login');;
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
