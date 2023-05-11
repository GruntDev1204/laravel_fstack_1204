<div class="table-content table-responsive mb-45 container mt-4" style="overflow-x: scroll">
    <table style="width: 1400px">
        <thead>
            <th class="product-subtotal">Created at</th>
            <th class="product-subtotal">Mã đơn hàng</th>
            <th class="product-subtotal">Tổng tiền</th>
            <th class="product-subtotal">Sale</th>
            <th class="product-subtotal">Phải trả</th>
            <th class="product-subtotal">Đã giao hàng</th>
            <th class="product-subtotal">xem chi tiết</th>



        </thead>
        <tbody>
            <template v-for="(value, key) in list2">
                <tr>
                    <td class="product-name">@{{formatDate( value.created_at )}}</a></td>
                    <td class="product-name">@{{ value.ma_don_hang }}</a></td>
                    <td class="product-subtotal">@{{ formatNumber(value.tong_tien) }}</td>
                    <td class="product-subtotal"> - @{{ formatNumber(value.tien_giam_gia) }}</td>

                    <td class="product-subtotal"> @{{ formatNumber(value.thuc_tra) }}</td>

                    <td class="product-subtotal" v-if="value.is_giao_hang == 1">đã giao</td>
                    <td class="product-subtotal" v-else>chưa giao</td>

                    <td class="product-subtotal" ><a target="_blank" v-bind:href=" `/dat-hang/chi-tiet/` + value.id ">Xem chi tiết </a></td>

                </tr>
            </template>
        </tbody>
    </table>
</div>

