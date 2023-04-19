new Vue({
    el: '#app',
    data: {
        id_user: '',
        list: [],
        message: '',
    },
    created() {
        this.run();
    },
    methods: {
        run() {
            setInterval(() => {
                this.loadData();
            }, 500);
        },
        formatDate(datetime) {
        const input = datetime;
        const dateObj = new Date(input);
        const year = dateObj.getFullYear();
        const month = (dateObj.getMonth() + 1).toString().padStart(2, '0');
        const date = dateObj.getDate().toString().padStart(2, '0');

        const result = `${date}/${month}/${year}`;

        return result;
         },

        loadData() {
            axios
                .get('/chat/loadData')
                .then((res) => {
                    this.list = res.data.ChatData;
                    setTimeout(function() {
                        $("#msg_card_body").animate({
                            scrollTop: $('#msg_card_body').prop("scrollHeight")
                        }, 200);
                    }, 200)
                });
        },
        sendMessage() {
            var payload = {
                'content': this.message,
                'id_user': this.id_user,
            };
            axios
                .post('/chat/sendChat', payload)
                .then((res) => {
                    this.loadData();
                    this.message = '';
                });
        },
        clearChat() {
            axios
                .get('/chat/clear')
                .then((res) => {
                    if (res.data.status) {
                        alert('clear?');
                        this.loadData();
                    }
                });
        },
    },
});
