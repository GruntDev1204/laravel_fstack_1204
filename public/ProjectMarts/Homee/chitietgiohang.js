new Vue({
    el: '#app',
    data: {
        listCart: [],
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
                        this.listCart = res.data.dataDaiLy;
                    }
                    else if(res.data.status == 2){
                        this.listCart = res.data.dataKhachHang;
                    }
                });
        },
        formatNumber(number) {
            return new Intl.NumberFormat('vi-VI', {
                style: 'currency',
                currency: 'VND'
            }).format(number);
        },
        updateRow(row) {
            axios
                .post('/add-to-cart-update', row)
                .then((res) => {
                    if (res.status == 1) {
                        this.loadCart();
                    }else if(res.status == 2){
                        this.loadCart();
                    }
                });
        },
        deleteRow(row) {
            axios
                .post('/remove-cart', row)
                .then((res) => {
                    toastr.info("Đã xóa sản phẩm trong giỏ!");
                    this.loadCart();
                });
        },
        totalMoney() {
            var total = 0;
            this.listCart.forEach((value, key) => {
                total += value.don_gia * value.so_luong
            });
            return total;
        },
        store(){

        }

    },
});
