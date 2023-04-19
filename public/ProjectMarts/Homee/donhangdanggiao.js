new Vue({
    el: '#giaohang',
    data: {
        list: [],
        list2:[],
    },
    created() {
        this.loadTada();
        this.loadTada2();
    },
    methods: {
        loadTada() {
            axios
                .get('/dat-hang-data')
                .then((res) => {
                    if(res.data.status == 1){
                        this.list = res.data.dataddhU;
                    }else if (res.data.status == 2){
                    this.list = res.data.dataddhA;
                    }
                });
        },
        formatNumber(number) {
            return new Intl.NumberFormat('vi-VI', {
                style: 'currency',
                currency: 'VND'
            }).format(number);
        },
        loadTada2() {
            axios
                .get('/dat-hang-data')
                .then((res) => {
                    if(res.data.status == 1){
                        this.list2 = res.data.donmuaU;
                    }else if (res.data.status == 2){
                    this.list2 = res.data.donmuaA;
                    }
                });
        },
        // updateRow(row) {
        //     axios
        //         .post('/add-to-cart-update', row)
        //         .then((res) => {
        //             if (res.status == 1) {
        //                 this.loadCart();
        //             }else if(res.status == 2){
        //                 this.loadCart();
        //             }
        //         });
        // },
        // deleteRow(row) {
        //     axios
        //         .post('/remove-cart', row)
        //         .then((res) => {
        //             toastr.info("Đã xóa sản phẩm trong giỏ!");
        //             this.loadCart();
        //         });
        // },
        // totalMoney() {
        //     var total = 0;
        //     this.listCart.forEach((value, key) => {
        //         total += value.don_gia * value.so_luong
        //     });
        //     return total;
        // },
        // store(){

        // }

    },
});
