new Vue({
    el: '#mobie',
    data: {
        chitietCart: [],
        listCart: [],
        countAgent:''
    },
    created() {
        this.loadCart();
        this.loadCart2();


    },
    methods: {
        loadCart() {
            axios
                .get('/data-cart')
                .then((res) => {
                    if(res.data.status == 1){
                        this.chitietCart = res.data.dataDaiLy;
                        this.countAgent = res.data.countAgent;

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

        totalMoney() {
            var total = 0;
            this.chitietCart.forEach((value, key) => {
                total += value.don_gia * value.so_luong
            });
            return total;
        },
        loadCart2() {
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
        formatDate(datetime) {
            const input = datetime;
            const dateObj = new Date(input);
            const year = dateObj.getFullYear();
            const month = (dateObj.getMonth() + 1).toString().padStart(2, '0');
            const date = dateObj.getDate().toString().padStart(2, '0');
            const hours = dateObj.getHours().toString().padStart(2, '0');
            const minutes = dateObj.getMinutes().toString().padStart(2, '0');
            const seconds = dateObj.getSeconds().toString().padStart(2, '0');
            const result = `${date}/${month}/${year} - ${hours}:${minutes}:${seconds}`;
            return result;
        },
        totalMoney() {
            var total = 0;
            this.listCart.forEach((value, key) => {
                total += value.don_gia * value.so_luong
            });
            return total;
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

        
    },
});
