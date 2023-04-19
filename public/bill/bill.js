new Vue({
    el: '#bill',
    data: {
        billData: [],
        bill: {
          name:'',
          price:'',
          so_luong:'',
        },
    },
    created() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios
                .get('/apptinhtien/datashow')
                .then((res) => {
                    this.billData = res.data.dataBill;
                });
        },
        create() {
            axios
                .post('/apptinhtien/dientt', this.bill)
                .then((res) => {
                    toastr.success("Đã lưu thành công!");
                    this.loadData();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function(key, value) {
                        toastr.error(value[0]);
                    });
                });
        },


    },
});
