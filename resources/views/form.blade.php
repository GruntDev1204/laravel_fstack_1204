<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên Sản Phẩm</th>
                <th>Slug Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Giá Khuyến Mãi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sanPham as $key => $value)
            <tr>
                <td>{{ $value->ten_san_pham }}</td>
                <td>{{ $value->slug_san_pham }}</td>
                <td>{{ $value->gia_ban }}</td>
                <td>{{ $value->gia_khuyen_mai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</html>
