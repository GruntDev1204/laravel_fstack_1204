new Vue({
    el: '#giaohang',
    data: {
        list2:[],
    },
    created() {
        this.loadTada2();
    },
    methods: {

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


    },
});
