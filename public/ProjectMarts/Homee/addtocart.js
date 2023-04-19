$(document).ready(function(e) {
    $(".addToCart").click(function(){
        var san_pham_id = $(this).data('id');
        var payload = {
            'san_pham_id'   : san_pham_id,
            'so_luong'      : 1,
        };
        axios
            .post('/add-to-cart', payload)
            .then((res) => {
                if(res.data.status == 1) {
                    toastr.success("Đã thêm vào giỏ hàng! (Agent) ");
                }else if(res.data.status == 2){
                    toastr.success("Đã thêm vào giỏ hàng! (User)");
                } else {
                    toastr.error("Bạn chưa đăng nhập!");
                }
            })
            .catch((res) => {
                var danh_sach_loi = res.response.data.errors;
                $.each(danh_sach_loi, function(key, value){
                    toastr.error(value[0]);
                });
            });
    });
})
