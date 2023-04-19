new Vue({
    el: '#post',
    data: {
    dataPublic :[],
    dataPrivate:[],
    createPost : {
        id_people : 0,
        content : '',
        img : '',
        action : 0,
    },
    cmt : {
        id_people : 0,
        content : '',
        id_post : 0,
    }
    },
    created() {
        this.loadPrivate();
    },
    methods: {


        loadPrivate() {
            axios
                .get('/people/actionPostPrivate' )
                .then((res) => {
                  this.dataPrivate = res.data.DataPrivate;
                });
        },

        changeAction(id) {
            axios
                .get('/people/changeAction/' + id )
                .then((res) => {
                    if (res.data.status) {
                        alert('change status');
                        this.loadPrivate();
                        toastr.success('change successfully!');
                    }else{
                        alert('not your post');
                        toastr.error('change fail!');
                    }
                });
        },



        postCmts() {
            axios
            .post('/people/postCmt', this.cmt)
            .then((res) => {
                if (res.data.status) {
                    alert('post cmt?')
                    this.createPost.content = ""
                    toastr.success('posted successfully!');
                }
            })

        },
        createNewPost() {
            axios
            .post('/people/createPost', this.createPost)
            .then((res) => {
                if (res.data.status) {
                    alert('post?')
                    this.createPost.content = ""
                    toastr.success('posted successfully!');
                }
            })
            .catch((res) => {
                var danh_sach_loi = res.response.data.errors;
                $.each(danh_sach_loi, function (key, value) {
                    toastr.error(value[0]);
                });
            });
        },

        formatDate(datetime) {
            const input = datetime;
            const dateObj = new Date(input);
            const year = dateObj.getFullYear();
            const month = (dateObj.getMonth() + 1).toString().padStart(2, '0');
            const date = dateObj.getDate().toString().padStart(2, '0');

            const result = `${date}-${month}-${year}`;

            return result;
        },

    },

})
