<div class="table-content table-responsive mb-45 container">
    <table>
        <thead>
            <tr>
                <th class="product-thumbnail"># </th>
                <th class="product-thumbnail">Ngày Đặt </th>
                <th class="product-name">Sản Phẩm</th>
                <th class="product-price">Gía Bán</th>
                <th class="product-quantity">Số lượng</th>
                <th class="product-subtotal">Phải trả</th>
            </tr>
        </thead>
        <tbody>
            <template v-for="(value, key) in list">
                <tr>
                    <td class="product-name">@{{ key+1 }}</a></td>
                    <td class="product-name">@{{ value.created_at }}</a></td>
                    <td class="product-name">@{{ value.ten_san_pham }}</a></td>
                    <td class="product-price"><span
                            class="amount">@{{ formatNumber(value.don_gia) }}</span></td>
                    <td class="product-quantity">@{{value.so_luong}}</td>
                    <td class="product-subtotal">@{{ formatNumber(value.don_gia * value.so_luong) }}</td>
                </tr>
            </template>
        </tbody>
    </table>
</div>
