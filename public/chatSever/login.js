new Vue({
    el: '#loginUser',
    data: {
        arrayLogin: {
            sdt: '',
            password: '',
        },
    },

    methods: {

        loginUser() {
            axios
                .post('/user/login', this.arrayLogin)
                .then((res) => {
                    if (res.data.status ) {
                        toastr.success("Login thành công");
                        setTimeout(function () {
                            $(location).attr('href', '/chat/view');;
                        }, 300);
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
