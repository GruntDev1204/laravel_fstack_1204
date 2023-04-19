new Vue({
    el: '#donhangmanager',
    data: {
        donHang: [],
    },
    created() {
        this.loadHangdi();
    },
    methods: {
        loadHangdi() {
            axios
                .get('/admin/dataHang')
                .then((res) => {
                    this.donHang = res.data.SIDA;
                });
        },
        xacnhandonhang(id) {
            axios
                .get('/admin/xac-nhan/'+ id)
                .then((res) => {
                    this.loadHangdi();
                    toastr.success("Đã xác nhận đơn hàng!");
                });
        },

        // formatNumber(number) {
        // return new Intl.NumberFormat('vi-VI', {
        //         style: 'currency',
        //         currency: 'VND'
        //     }).format(number);
        // },
        // createDonHang() {
        //     axios
        //         .post('/your-cart-create')
        //         .then((res) => {
        //             if (res.data.status == 1) {
        //                 toastr.success("Tạo Đơn Hàng Thành Công! - Agent");
        //             }
        //             else if(res.data.status == 2){
        //                 toastr.error("Có lỗi không xác định!");
        //             } else if(res.data.status == 3){
        //                 toastr.success("Tạo Đơn Hàng Thành Công! - User");
        //             } else {
        //                 toastr.error("Có lỗi không xác định!");
        //             }
        //         });
        // },
        // totalMoney() {
        //     var total = 0;
        //     this.chitietCart.forEach((value, key) => {
        //         total += value.don_gia * value.so_luong
        //     });
        //     return total;
        // },

    },
});
