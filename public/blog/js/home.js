new Vue({
    el: '#home',
    data: {
    dataPost : [],
    dataCmt:[],
    cmt : {
        id_people : 0,
        content : '',
        id_post : 0,
    }
    },
    created() {
        this.loadDataPost();
    },
    methods: {
        loadDataPost() {
            axios
            .get('/blog/dataPostClient')
            .then((res) => {
                this.dataPost = res.data.dataPostHome;
            });
        },

        getPostId(id) {
            axios
                .get('/people/postCmt/' + id )
                .then((res) => {
                    if(res.data.status)
                    {
                    this.dataCmt.id_post = res.data.id_post
                    }
                });
        },


        postCmts() {
            axios
            .get('/people/postCmt/', this.cmt)
            .then((res) => {
                if (res.data.status) {
                    alert('post cmt?')
                    this.createPost.content = ""
                    toastr.success('posted successfully!');
                }
            })

        },


        changeAction(id) {
            axios
                .get('/people/changeAction/' + id )
                .then((res) => {
                    if (res.data.status) {
                        alert('change status');
                        toastr.success('change successfully!');
                        this.loadDataPost()
                    }else{
                        alert('not your post');
                        toastr.error('change fail!');
                    }
                });
        },
        //này là của roadMap
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
