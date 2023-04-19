new Vue({
    el: '#editAdmin',
    data: {
        thongso: [],
        cauchuyen: [],
        roadmapData: [],
        loadMember: [],
        loadAdmins: [],
        loadtokenomics:[],
        numberChange: {
            id: 0,
            followers: '',
            nft: '',
            twitter: 0,
            holders: 0,
        },
        newStr: {
            id: 0,
            title: '',
            content: '',
        },
        timeline: {
            month: 0,
            week: '',
            line_one: '',
            is_line_one:0,
            line_two: '',
            is_line_two:0,
            line_three: '',
            is_line_three:0,
            line_five: '',
            line_four: '',
        },
        newTimeline: {
            id: 0,
            month: 0,
            week: '',
            line_one: '',
            is_line_one:0,
            line_two: '',
            is_line_two:0,
            line_three: '',
            is_line_three:0,
            line_five: '',
            line_four: '',
        },
        addMember: {
            fullname: '',
            desJob: '',
            sex: 0,
        },
        editMember: {
            id: 0,
            fullname: '',
            desJob: '',
            sex: 0,
        },

        arraySIGNUP: {
            ho_va_ten: '',
            agree: 0,
            sdt: '',
            password: '',
            ghi_chu: '',
        },
        arrayLogin: {
            sdt: '',
            password: '',
        },
        AdminsEdited: {
            id: 0,
            ho_va_ten: '',
            sdt: '',
        },

        tokenedit:{
            id : 0,
            writer: '',
            content:'',
        },


        ChatClientArrays:{
            message: '',
        },

    },
    created() {
        this.loadtable();
        this.loadTokens();
        this.loadCauchuyen();
        this.loadRoadMap()
        this.loadThanhvien()
        this.loadAdmin()
    },
    methods: {


        //Number

        loadtable() {
            axios
                .get('/sndg/admin/setting/number/loadNumber')
                .then((res) => {
                    this.thongso = res.data.viewnumbers;
                });
        },

        editNumber(id) {
            axios
                .get('/sndg/admin/setting/number/edit/' + id)
                .then((res) => {
                    if (res.data.status) {
                        this.numberChange = res.data.socanchinhsua;
                    }
                });
        },

        updatedSoLieu() {
            axios
                .post('/sndg/admin/setting/number/update', this.numberChange)
                .then((res) => {
                    toastr.success("Đã cập nhật số liệu thành công!!!");
                    this.loadtable();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },




        //post câu chuyện
        loadCauchuyen() {
            axios
                .get('/sndg/admin/setting/story/loadStr')
                .then((res) => {
                    this.cauchuyen = res.data.theSTR;
                });
        },

        editCauchuyen(id) {
            axios
                .get('/sndg/admin/setting/story/editStr/' + id)
                .then((res) => {
                    if (res.data.status) {
                        this.newStr = res.data.newCauchuyen;
                    }
                });
        },
        updateCauchuyen() {
            axios
                .post('/sndg/admin/setting/story/update', this.newStr)
                .then((res) => {
                    toastr.success("Đã cập nhật cốt chuyện thành công!!!");
                    this.loadCauchuyen();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },


        //roadmap
        loadRoadMap() {
            axios
                .get('/sndg/admin/setting/timeline/loadData')
                .then((res) => {
                    this.roadmapData = res.data.roadmap;
                });
        },
        postTimeline() {
            axios
                .post('/sndg/admin/setting/timeline/addTimeline', this.timeline)
                .then((res) => {
                    toastr.success("Đã lưu thành công!");
                    this.loadRoadMap();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });

        },
        editRoadMap(id) {
            axios
                .get('/sndg/admin/setting/timeline/editTimeline/' + id)
                .then((res) => {
                    if (res.data.status) {
                        this.newTimeline = res.data.roadmapTimeline;
                    }
                });
        },
        updateRoadmap() {
            axios
                .post('/sndg/admin/setting/timeline/updateTimeline/', this.newTimeline)
                .then((res) => {
                    toastr.success("Đã cập nhật roadMap thành công!!!");
                    this.loadRoadMap();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },
        xoaRoadmap(id) {
            axios
                .get('/sndg/admin/setting/timeline/deletedTimeline/' + id)
                .then((res) => {
                    if (res.data.status) {
                        alert('Xóa dòng timeLINE này?');
                        toastr.success("Đã xóa timeline thành công!!!");
                        this.loadRoadMap();
                    } else {
                        toastr.error("Vui lòng không chơi ngu");
                    }
                });
        },
        doneline1(id){
            axios
            .get('/sndg/admin/setting/timeline/isLine1/' + id)
            .then((res) => {
                if (res.data.status) {
                    toastr.success("Done");
                    this.loadRoadMap();
                }
                else {
                    toastr.error('Vui lòng không can thiệp hệ thống!');
                }

            });
        },
        doneline2(id){
            axios
            .get('/sndg/admin/setting/timeline/isLine2/' + id)
            .then((res) => {
                if (res.data.status) {
                    toastr.success("Done");
                    this.loadRoadMap();
                }
                else {
                    toastr.error('Vui lòng không can thiệp hệ thống!');
                }

            });
        },
        doneline3(id){
            axios
            .get('/sndg/admin/setting/timeline/isLine3/' + id)
            .then((res) => {
                if (res.data.status) {
                    toastr.success("Done");
                    this.loadRoadMap();
                }
                else {
                    toastr.error('Vui lòng không can thiệp hệ thống!');
                }

            });
        },
        doneline4(id){
            axios
            .get('/sndg/admin/setting/timeline/isLine4/' + id)
            .then((res) => {
                if (res.data.status) {
                    toastr.success("Done");
                    this.loadRoadMap();
                }
                else {
                    toastr.error('Vui lòng không can thiệp hệ thống!');
                }

            });
        },
        doneline5(id){
            axios
            .get('/sndg/admin/setting/timeline/isLine5/' + id)
            .then((res) => {
                if (res.data.status) {
                    toastr.success("Done");
                    this.loadRoadMap();
                }
                else {
                    toastr.error('Vui lòng không can thiệp hệ thống!');
                }

            });
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



        //addmember
        addThanhvien() {
            axios
                .post('/sndg/admin/setting/members/addmembers', this.addMember)
                .then((res) => {
                    toastr.success("Đã lưu thành công!");
                    this.loadThanhvien();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },
        loadThanhvien() {
            axios
                .get('/sndg/admin/setting/members/listmembers')
                .then((res) => {
                    this.loadMember = res.data.thanhvienlist;
                });
        },
        xoaThanhvien(id) {
            axios
                .get('/sndg/admin/setting/members/membersDeleted/' + id)
                .then((res) => {
                    if (res.data.status) {
                        alert('Xóa thành viên này?');
                        toastr.success("Đã xóa thành công!!!");
                        this.loadThanhvien();
                    } else {
                        toastr.error("Vui lòng không chơi ngu");
                    }
                });
        },
        editThanhVien(id) {
            axios
                .get('/sndg/admin/setting/members/editMember/' + id)
                .then((res) => {
                    if (res.data.status) {
                        this.editMember = res.data.MemberEdit;
                    }
                });
        },
        updateThanhVien() {
            axios
                .post('/sndg/admin/setting/members/updateMember', this.editMember)
                .then((res) => {
                    toastr.success("Đã cập nhật thông tin thành viên!!!");
                    this.loadThanhvien();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },


        //editToken
        loadTokens(){
            axios
                .get('/sndg/admin/setting/tokenomics/loadToken')
                .then((res) => {
                    this.loadtokenomics = res.data.tokenTS;
                });
        },
        editToken(id){
            axios
                .get('/sndg/admin/setting/tokenomics/editInfoToken/' + id)
                .then((res) => {
                    if (res.data.status) {
                        this.tokenedit = res.data.tokenInfo;
                    }
                });
        },


        //tạo tài khoản Admin
        createdAdmin() {
            axios
                .post('/sndg/admin/setting/manager/signup', this.arraySIGNUP)
                .then((res) => {
                    if (res.data.status) {
                        alert('xác nhận đăng kí?')
                        toastr.info("Đã submit thành công! Hãy chờ được Admin duyệt để được truy cập!");
                        setTimeout(function () {
                            $(location).attr('href', '/sndg/admin/setting/manager/login');;
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

        loginAdmin() {
            axios
                .post('/sndg/admin/setting/manager/login', this.arrayLogin)
                .then((res) => {
                    if (res.data.status == 2) {
                        toastr.success("Login thành công");
                        setTimeout(function () {
                            $(location).attr('href', '/sndg/admin/setting/home');;
                        }, 2000);
                    }
                    else if (res.data.status == 1) {
                        alert('bạn chưa được cấp phép?')
                        toastr.warning("Vui lòng liên hệ lại với Admin để tìm hiểu nguyên nhân!");
                    }
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },

        loadAdmin() {
            axios
                .get('/sndg/admin/setting/manager/loadAdminData')
                .then((res) => {
                    this.loadAdmins = res.data.listAdmins;
                });
        },
        changeAllow(id) {
            axios
                .get('/sndg/admin/setting/manager/allowedAdmin/' + id)
                .then((res) => {
                    if (res.data.status) {
                        alert('xác nhận thay đổi quyền truy cập?')
                        toastr.info("Đã thay đổi quyền thành công");
                        this.loadAdmin();
                    }
                    else {
                        toastr.error('Vui lòng không can thiệp hệ thống!');
                    }

                });
        },
        isOwn(id) {
            axios
                .get('/sndg/admin/setting/manager/isOwner/' + id)
                .then((res) => {
                    if (res.data.status) {
                        alert('xác nhận là chủ sỡ hữu?')
                        toastr.success("Đã cấp quyền thành công");
                        this.loadAdmin();
                    }
                    else {
                        toastr.error('Vui lòng không can thiệp hệ thống!');
                    }

                });
        },
        DeletedAdmin(id) {
            axios
                .get('/sndg/admin/setting/manager/isDeleted/' + id)
                .then((res) => {
                    if (res.data.status) {
                        alert('Xóa Admins này?');
                        toastr.success("Đã xóa Admins ");
                        this.loadAdmin();
                    } else {
                        toastr.error("Vui lòng không chơi ngu");
                    }
                });
        },
        editAdmin(id) {
            axios
                .get('/sndg/admin/setting/manager/editAdmins/' + id)
                .then((res) => {
                    if (res.data.status) {
                        this.AdminsEdited = res.data.AdminsEdit;
                    }
                });
        },
        updateAdmins() {
            axios
                .post('/sndg/admin/setting/manager/updateIfAdmins', this.AdminsEdited)
                .then((res) => {
                    toastr.success("Đã cập nhật thông tin Admins!!!");
                    this.loadAdmin();
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },


        sendChatMess() {
            axios
                .post('/sndg/admin/setting/chat/index', this.ChatClientArrays)
                .then((res) => {
                    toastr.success("Send!");
                })
                .catch((res) => {
                    var danh_sach_loi = res.response.data.errors;
                    $.each(danh_sach_loi, function (key, value) {
                        toastr.error(value[0]);
                    });
                });
        },


        //reset input
        resetTimeline()
        {
          this.timeline.month = 0,
          this.timeline.week = '',
          this.timeline.line_one= '',
          this.timeline.line_two= '',
          this.timeline.line_three= '',
          this.timeline.line_five= '',
          this.timeline.line_four= ''
        },

        resetFormMem()
        {
          this.addMember.fullname = '',
          this.addMember.desJob = '',
          this.addMember.sex= 0
        },

    },

})
