<div class="table-content table-responsive mb-45 container">
    <table>
        <thead>
            <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-subtotal">Total</th>
            </tr>
        </thead>
        <tbody>
            <template v-for="(value, key) in chitietCart">
                <tr>
                    <td class="product-thumbnail">
                        <a href="#"><img v-bind:src="value.anh_dai_dien" alt="cart-image" /></a>
                    </td>
                    <td class="product-name"><a href="#">@{{ value.ten_san_pham }}</a></td>
                    <td class="product-price"><span
                            class="amount">@{{ formatNumber(value.don_gia) }}</span></td>
                    <td class="product-quantity">@{{value.so_luong}}</td>
                    <td class="product-subtotal">@{{ formatNumber(value.don_gia * value.so_luong) }}</td>
                </tr>
            </template>
        </tbody>
    </table>
</div>
<!-- Table Content Start -->
