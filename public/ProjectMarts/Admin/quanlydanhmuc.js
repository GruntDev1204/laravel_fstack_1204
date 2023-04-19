new Vue({
    el              : "#app",
    data            : {
        ten_danh_muc            :   '',
        slug_danh_muc           :   '',
        hinh_anh                :   '',
        id_danh_muc_cha         :   0,
        is_open                 :   1,
        list_vue                :   [],
        danh_muc_cha_vue        :   [],
        danh_muc_edit           :   {},
        idDelete                :   0,
        idEdit                  :   0,
        ten_danh_muc_edit       :   '',
        slug_danh_muc_edit      :   '',
        hinh_anh_edit           :   '',
        id_danh_muc_cha_edit    :   0,
        is_open_edit            :   1,
    },

    created(){
        this.getData();
    },

    methods         : {
        toSlug(str) {
            str = str.toLowerCase();
            str = str
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '');
            str = str.replace(/[đĐ]/g, 'd');
            str = str.replace(/([^0-9a-z-\s])/g, '');
            str = str.replace(/(\s+)/g, '-');
            str = str.replace(/-+/g, '-');
            str = str.replace(/^-+|-+$/g, '');

            this.slug_danh_muc = str;
        },
        toSlugEdit(str) {
            str = str.toLowerCase();
            str = str
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '');
            str = str.replace(/[đĐ]/g, 'd');
            str = str.replace(/([^0-9a-z-\s])/g, '');
            str = str.replace(/(\s+)/g, '-');
            str = str.replace(/-+/g, '-');
            str = str.replace(/^-+|-+$/g, '');

            this.slug_danh_muc_edit = str;
        },

        create(e){
            e.preventDefault();
            var payload = {
                'ten_danh_muc'      :   this.ten_danh_muc,
                'slug_danh_muc'     :   this.slug_danh_muc,
                'hinh_anh'          :   this.hinh_anh,
                'id_danh_muc_cha'   :   this.id_danh_muc_cha,
                'is_open'           :   this.is_open,
            };

            axios
                .post('/admin/danh-muc-san-pham/index', payload)
                .then((res) => {
                    // console.log(res);
                    toastr.success('Thêm mới thành công danh mục!');
                    this.getData();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function(key, value){
                        toastr.error(value[0]);
                    });
                });
        },

        getData(){
            axios
                .get('/admin/danh-muc-san-pham/data')
                .then((res) => {
                    this.list_vue           = res.data.list;
                    this.danh_muc_cha_vue   = res.data.danh_muc_cha;
                })
        },

        doiTrangThai(id) {
            axios
                .get('/admin/danh-muc-san-pham/doi-trang-thai/' + id)
                .then((res) => {
                    if(res.data.trangThai) {
                        toastr.success('Đã đổi trạng thái thành công!');
                        // Tình trạng mới là true
                        this.getData();
                    } else {
                        toastr.error('Vui lòng không can thiệp hệ thống!');
                    }
                })
        },

        deleteDanhMuc(id){
            this.idDelete = id;
        },

        acceptDelete(){
            axios
                .get('/admin/danh-muc-san-pham/delete/' + this.idDelete)
                .then((res) => {
                    if(res.data.status) {
                        toastr.success('Đã xóa danh mục thành công');
                        this.getData();
                    } else {
                        toastr.error('Danh mục không tồn tại');
                    }
                })
        },

        editDanhMuc(id){
            this.idEdit = id;
            axios
                .get('/admin/danh-muc-san-pham/edit/' + id)
                .then((res) => {
                    console.log(res);
                    if(res.data.status) {
                        this.ten_danh_muc_edit      =   res.data.data.ten_danh_muc;
                        this.slug_danh_muc_edit     =   res.data.data.slug_danh_muc;
                        this.hinh_anh_edit          =   res.data.data.hinh_anh;
                        this.id_danh_muc_cha_edit   =   res.data.data.id_danh_muc_cha;
                        this.is_open_edit           =   res.data.data.is_open;
                    } else {
                        toastr.error('Danh mục không tồn tại');
                    }
                })
        },

        acceptUpdate() {
            var payload = {
                'id'                 :   this.idEdit,
                'ten_danh_muc'       :   this.ten_danh_muc_edit,
                'slug_danh_muc'      :   this.slug_danh_muc_edit,
                'hinh_anh'           :   this.hinh_anh_edit,
                'id_danh_muc_cha'    :   this.id_danh_muc_cha_edit,
                'is_open'            :   this.is_open_edit,
            };

            // console.log(payload);

            axios
                .post('/admin/danh-muc-san-pham/update', payload)
                .then((res) => {
                    // console.log(res);
                    toastr.success('Cập thành công danh mục!');
                    this.getData();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function(key, value){
                        toastr.error(value[0]);
                    });
                });
        },
    },
});
