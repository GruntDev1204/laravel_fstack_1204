new Vue({
    el  :   '#app',
    data:   {
        danhSachSanPham     :   [],
        danhSachKhoDangNhap :   [],
        inputSearch         :   '',
    },
    created() {
        this.loadSanPham();
        this.loadTableBenPhai();
    },
    methods :   {
        loadTableBenPhai() {
            axios
                .get('/admin/nhap-kho/loadData')
                .then((res) => {
                    this.danhSachKhoDangNhap = res.data.nhapKho;
                });
        },
        loadSanPham() {
            axios
                .get('/admin/san-pham/loadData')
                .then((res) => {
                    this.danhSachSanPham = res.data.danhSachSanPham;
                });
        },
        addKhoHang(id) {
            axios
                .get('/admin/nhap-kho/add/' + id)
                .then((res) => {
                    if(res.data.status == false) {
                        toastr.error("Sản phẩm không tồn tại!");
                    } else {
                        this.loadTableBenPhai();
                    }
                });
        },
        search() {
            var payload = {
                'tenSanPham'    :   this.inputSearch,
            };
            axios
                .post('/admin/san-pham/search', payload)
                .then((res) => {
                    this.danhSachSanPham    = res.data.dataProduct;
                });
        },
        destroy(id) {
            axios
                .get('/admin/nhap-kho/remove/' + id)
                .then((res) => {
                    if(res.data.status == false) {
                        toastr.error("Sản phẩm không tồn tại!");
                    } else {
                        this.loadTableBenPhai();
                    }
                });
        },
        update(row) {
            axios
                .post('/admin/nhap-kho/update', row)
                .then((res) => {
                    this.loadTableBenPhai();
                });
        },
        createStore() {
            axios
                .get('/admin/nhap-kho/create')
                .then((res) => {
                    toastr.success("Đã Nhập Kho Thành Công!!!");
                    this.loadTableBenPhai();
                });
        },
    },
});
