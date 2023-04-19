<script scr="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
@jquery
@toastr_js
@toastr_render
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/dogechain/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/dogechain/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dogechain/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/dogechain/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/dogechain/plugins/raphael/raphael.min.js"></script>
<script src="/dogechain/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/dogechain/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/dogechain/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/dogechain/dist/js/demo.js"></script>

<script src="/dogechain/dist/js/pages/dashboard2.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script>
<script>
    $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#tokenomics").click(function(e){
        e.preventDefault();
        var img        = $("#img").val();
        var writer       = $("#writer").val();
        var content             = $("#content").val();
        var id             = $("#id").val();

        var upToken = {
            'id'               :   id,
            'img'          :   img,
            'writer'         :   writer,
            'content'               :   content,
        };


        $.ajax({
            url     :   '/sndg/admin/setting/tokenomics/SaveContent',
            type    :   'post',
            data    :   upToken,
            success :   function(res) {
                if(res.status) {
                    toastr.success('đã chỉnh sửa token!');
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
</script>
