new Vue({
    el: '#signup',
    data: {

        arraySIGNUP: {
            full_name: '',
            sdt: '',
            password: '',
        },
    },

    methods: {
        createUser() {
            axios
                .post('/user/dangki', this.arraySIGNUP)
                .then((res) => {
                    if (res.data.status) {
                        alert('xác nhận đăng kí?')
                        toastr.info("Đã submit thành công!");
                        setTimeout(function () {
                            $(location).attr('href', '/user/index/login');;
                        }, 500);
                    }
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },


    },

})
