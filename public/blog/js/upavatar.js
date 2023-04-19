$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#saveAvatar").click(function(e){
        e.preventDefault();

        var avatar        = $("#avatar").val();

        var avatarData = {
            'avatar'          :   avatar,
        };

        $.ajax({
            url     :   '/people/upImg',
            type    :   'post',
            data    :   avatarData,
            success :   function(res) {
                console.log(res);
                if(res.status) {
                    toastr.success('up avatar done!');
                }
            },
            error   :   function(res) {
                var errros = res.responseJSON.errors;
                $.each(errros, function(key, value){
                    toastr.error(value[0]);
                });
            }
        });
    });

});
