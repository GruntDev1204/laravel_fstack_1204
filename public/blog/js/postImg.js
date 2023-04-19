$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#submitImg").click(function(e){
        e.preventDefault();
        var img        = $("#img").val();
        var action       = $("#action").val();
        var content             = $("#content").val();

        var postImg = {
            'img'          :   img,
            'action'         :   action,
            'content'               :   content,
        };


        $.ajax({
            url     :   '/people/createPostimg',
            type    :   'post',
            data    :   postImg,
            success :   function(res) {
                if(res.status) {
                    toastr.success('up post done!');
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
