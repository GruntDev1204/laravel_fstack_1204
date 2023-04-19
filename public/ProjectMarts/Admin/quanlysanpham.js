new Vue({
    el  :   '#app',
    data:   {
        danhSachDanhMuc :   [],
        danhSachSanPham :   [],
        sanPhamCreate   :   {
            ten_san_pham    :   '',
            slug_san_pham   :   '',
            gia_ban         :   0,
            gia_khuyen_mai  :   0,
            anh_dai_dien    :   '',
            mo_ta_ngan      :   '',
            mo_ta_chi_tiet  :   '',
            id_danh_muc     :   0,
            is_open         :   0,
        },
        sanPhamUpdate   :   {
            id              :   0,
            ten_san_pham    :   '',
            slug_san_pham   :   '',
            gia_ban         :   0,
            gia_khuyen_mai  :   0,
            anh_dai_dien    :   '',
            mo_ta_ngan      :   '',
            mo_ta_chi_tiet  :   '',
            id_danh_muc     :   0,
            is_open         :   0,
        },
        id_delete       :   0,
    },
    created() {
        this.loadData();
    },
    methods :   {
        gandeleteid(id) {
            this.id_delete = id;
        },
        loadData() {
            axios
                .get('/admin/san-pham/loadData')
                .then((res) => {
                    this.danhSachDanhMuc = res.data.danhSachDanhMuc;
                    this.danhSachSanPham = res.data.danhSachSanPham;
                });
        },
        create() {
            axios
                .post('/admin/san-pham/create', this.sanPhamCreate)
                .then((res) => {
                    toastr.success("Đã thêm mới sản phẩm thành công!!!");
                    this.loadData();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function(key, value){
                        toastr.error(value[0]);
                    });
                });
        },
        update() {
            axios
                .post('/admin/san-pham/update', this.sanPhamUpdate)
                .then((res) => {
                    toastr.success("Đã cập nhật sản phẩm thành công!!!");
                    this.loadData();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function(key, value){
                        toastr.error(value[0]);
                    });
                });
        },
        edit(id) {
            axios
                .get('/admin/san-pham/edit/' + id)
                .then((res) => {
                    if(res.data.status) {
                        this.sanPhamUpdate = res.data.sanPham;
                    }
                });
        },
        deleteSanPham(id) {
            axios
                .get('/admin/san-pham/delete/' + id)
                .then((res) => {
                    if(res.data.status) {
                        toastr.success("Đã xóa sản phẩm thành công!!!");
                        this.loadData();
                    } else {
                        toastr.error("Vui lòng liên hệ mr Long!");
                    }
                });
        },
        changeStatus(id) {
            axios
                .get('/admin/changeStatus' + id)
                .then((res) => {
                    if(res.data.status) {
                        this.loadData();
                    }
                });
        },
    },
});
