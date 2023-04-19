new Vue({
    el: '#sida',
    data: {
        userData: [],
    },
    created() {
        this.showdata()
    },
    methods: {
        showdata() {
            axios
                .get('/user/showdata', this.userData)
                .then((res) => {
                    this.userData = res.data.user;
                })
        },

        changeBlockstatus(id) {
            axios
                .get('/user/blocked/' + id)
                .then((res) => {
                    if (res.data.status) {
                        this.showdata();
                        toastr.info("đã khóa người dùng này!");
                    }
                })
        },

        khaitru(id) {
            axios
                .get('/user/destroy-access/' + id)
                .then((res) => {
                    if (res.data.user) {
                        this.showdata();
                        toastr.info("bay màu!");
                    } else {
                        toastr.error("Không tìm thấy user nào cả bro!");
                    }
                });
        },
    },
});
