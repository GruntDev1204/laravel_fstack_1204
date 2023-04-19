new Vue({
    el: '#sida',
    data: {
        agentDaTa: [],
    },
    created() {
        this.showdata()
    },
    methods: {
        showdata() {
            axios
                .get('/agent/showdata', this.agentDaTa)
                .then((res) => {
                    this.agentDaTa = res.data.listData;
                })
        },
        changeBlockstatus(id) {
            axios
                .get('/agent/blocked/' + id)
                .then((res) => {
                    if (res.data.status) {
                        this.showdata();
                        toastr.info("đã khóa đại lý  này!");
                    }
                })
        },
        khaitru(id) {
            axios
                .get('/agent/khai-tru/' + id)
                .then((res) => {
                    if (res.data.agent) {
                        this.showdata();
                        toastr.info("bay màu!");
                    } else {
                        toastr.error("Không tìm thấy agent nào cả bro!");
                    }
                });
        },
    },
});
