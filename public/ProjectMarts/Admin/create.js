new Vue({
    el: '#admin',
    data: {
        newadmin: {
            ho_va_ten: '',
            sdt : '',
            password: '',
            ghi_chu: '',
        },
    },
    methods: {
        create() {
            axios
                .post('/ceo/create', this.newadmin)
                .then((res) => {
                    if(res.data.status){
                        toastr.info("Đã submit thành công! Hãy chờ phản hồi từ Trung's Mart");
                    }
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },
        reset(){
            this.newadmin.ho_va_ten = "";
            this.newadmin.password = "" ;
            this.newadmin.ghi_chu = "" ;
        },

    },
    })
