new Vue({
    el: '#app',
    data: {
    numbers : [],
    cauchuyen:[],
    loadMember:[],
    roadmap:[],
    loadInfoToken:[],
    },
    created() {
        this.loadDataNumber();
        this.loadCauchuyen();
        this.loadThanhvien();
        this.loadRoadMap();
        this.loadTokens();
    },
    methods: {
        loadDataNumber() {
            axios
                .get('/sndg/admin/setting/number/loadNumber')
                .then((res) => {
                    this.numbers = res.data.viewnumbers;
                });
        },
        loadCauchuyen(){
            axios
            .get('/sndg/admin/setting/story/loadStr')
            .then((res) => {
                this.cauchuyen = res.data.theSTR;
            });
        },
        loadThanhvien(){
            axios
            .get('/sndg/admin/setting/members/listmembers')
            .then((res) => {
                this.loadMember = res.data.thanhvienlist;
            });
        },
        loadRoadMap(){
            axios
            .get('/sndg/admin/setting/timeline/loadData')
            .then((res) => {
                this.roadmap = res.data.roadmap;
            });
        },
        loadTokens(){
            axios
            .get('/sndg/admin/setting/tokenomics/loadToken')
            .then((res) => {
                this.loadInfoToken = res.data.tokenTS;
            });
        },
        //này là của roadMap
        formatDate(datetime) {
            const input = datetime;
            const dateObj = new Date(input);
            const year = dateObj.getFullYear();
            const month = (dateObj.getMonth() + 1).toString().padStart(2, '0');
            const date = dateObj.getDate().toString().padStart(2, '0');

            const result = `${date}/${month}/${year}`;

            return result;
        },

    },

})
