new Vue({
    el: '#people',
    data: {
        arrayCreate : {
            sdt: '',
            ho_va_ten: '',
            birth: '',
            email: '',
            password: '',
            re_password: '',
            agree: 0,
        },

        ArrayLogin:{
            email: '',
            password: '',
        },

        MyData:[],
        peopleList:[],
        follow:[],

        arrayEdit:{
            id:0,
            detail:'',
            birth : 0,
            education : '',
            avatar : '',
            skill:' ',
            note: ' ',
            location:'',
        }
    },
    created(){
        this.loadInfo();
        this.loadPeople();
    },
    methods: {
        createPeople() {
            axios
            .post('/people/create', this.arrayCreate)
            .then((res) => {
                if (res.data.status) {
                    alert('You have successfully registered an account, please check your email to active your account!')
                    setTimeout(function () {
                        $(location).attr('href', '/people/login');;
                    }, 500);
                }
            })
            .catch((res) => {
                var danh_sach_loi = res.response.data.errors;
                $.each(danh_sach_loi, function (key, value) {
                    toastr.error(value[0]);
                });
            });
        },

        loginPeople(){
            axios
                .post('/people/login', this.ArrayLogin)
                .then((res) => {
                    if (res.data.status == 2) {
                        toastr.success("Login done!");
                        setTimeout(function () {
                            $(location).attr('href', '/home');;
                        }, 300);
                    }else if(res.data.status == 1){
                        alert('you have not activated your account? Please check your email to activate your account!')
                        toastr.info("Login not done!");
                    }else{
                        alert('Your password or email is incorrect!')
                    }
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },

        loadInfo(){
            axios
                .get('/people/loadProfile')
                .then((res) => {
                    if (res.data.status) {
                       this.MyData = res.data.DataPeople;
                    }
                })
        },

        editInfo(id){
            axios
            .get('/people/editInfo/' + id)
            .then((res) => {
                if (res.data.status) {
                   this.arrayEdit = res.data.dataEdit;
                } else{
                    toastr.error('500');
                }
            })
        },


        UpdateInfo(){
            axios
            .post('/people/addInfo/' ,this.arrayEdit)
            .then((res) => {
                if (res.data.status) {
                    toastr.success('Successfully updated');
                    this.loadInfo();
                }
            })
        },

        loadPeople(){
            axios
            .get('/people/loadPeopleJoin/' )
            .then((res) => {
                if (res.data.status) {
                    this.peopleList = res.data.dataCommunity;
                }
            })
        },

        unfollow(){
            axios
            .get('/people/dataFollow/' )
            .then((res) => {
                if (res.data.status) {
                    this.follow = res.data.dataFollow;
                }
            })
        },

        changeFollow(id,id_people){
            axios
            .get('/people/unfollow/' + id + '/iduser/' +id_people )
            .then((res) => {
                if (res.data.status) {
                    toastr.success('done')
                }
            })
        }




    },

})
