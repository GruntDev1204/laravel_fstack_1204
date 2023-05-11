<div class="table-content table-responsive mb-45 container">
    <table>
        <thead>
            <tr>
                <th class="product-thumbnail">Mã đơn</th>
                <th class="product-name">Sản Phẩm</th>
                <th class="product-price">Gía Bán</th>
                <th class="product-quantity">Số lượng</th>
                <th class="product-subtotal">Phải trả</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataDonHang as $donHang)
                <tr>
                    <td class="product-name">{{$donHang->don_hang_id  }}</a></td>
                    <td class="product-name">{{ $donHang->ten_san_pham  }}</a></td>
                    <td class="product-price"><span
                            class="amount">{{ $donHang->don_gia }}</span></td>
                    <td class="product-quantity">{{ $donHang->so_luong }}</td>
                    <td class="product-subtotal">{{  $donHang->so_luong*$donHang->don_gia  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
