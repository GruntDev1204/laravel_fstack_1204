<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <table class="table table-bordered" id="view">
        <thead>
            <tr>
                <th>Tên Sản Phẩm</th>
                <th>Slug Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Giá Khuyến Mãi</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){

        function hienThiDuLieu()
        {
            $.ajax({
                url     :   '/api/data',
                type    :   'get',
                success :   function(res) {
                    var sanPham = res.sanPham;
                    var duLieuTable = '';
                    $.each(sanPham, function(key, value) {
                        duLieuTable += '<tr>';
                        duLieuTable += '<td>'+ value.ten_san_pham +'</td>';
                        duLieuTable += '<td>'+ value.slug_san_pham +'</td>';
                        duLieuTable += '<td>'+ value.gia_ban +'</td>';
                        duLieuTable += '<td>'+ value.gia_khuyen_mai +'</td>';
                        duLieuTable += '</tr>';
                    });
                    $("#view tbody").html(duLieuTable);
                },
            });
        }

        hienThiDuLieu();


    });
</script>
</html>
