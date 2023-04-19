new Vue({
    el: '#mobie',
    data: {
        chitietCart: [],
    },
    created() {
        this.loadCart();
    },
    methods: {
        loadCart() {
            axios
                .get('/data-cart')
                .then((res) => {
                    if(res.data.status == 1){
                        this.chitietCart = res.data.dataDaiLy;
                    }
                    else if(res.data.status == 2){
                        this.chitietCart = res.data.dataKhachHang;
                    }
                });
        },

        formatNumber(number) {
        return new Intl.NumberFormat('vi-VI', {
                style: 'currency',
                currency: 'VND'
            }).format(number);
        },
        createDonHang() {
            axios
                .post('/your-cart-create')
                .then((res) => {
                    if (res.data.status == 1) {
                        toastr.success("Tạo Đơn Hàng Thành Công! - Agent");
                    }
                    else if(res.data.status == 2){
                        toastr.error("Có lỗi không xác định!");
                    } else if(res.data.status == 3){
                        toastr.success("Tạo Đơn Hàng Thành Công! - User");
                    }
                    else {
                        toastr.error("Có lỗi không xác định!");
                    }

                });
        },
        totalMoney() {
            var total = 0;
            this.chitietCart.forEach((value, key) => {
                total += value.don_gia * value.so_luong
            });
            return total;
        },

    },
});
