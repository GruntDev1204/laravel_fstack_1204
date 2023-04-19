<div class="table-content table-responsive mb-45">
    <table>
        <thead>
            <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-subtotal">Total</th>
                <th class="product-remove">Remove</th>
            </tr>
        </thead>
        <tbody>
            <template v-for="(value, key) in listCart">
                <tr>
                    <td class="product-thumbnail">
                        <a href="#"><img v-bind:src="value.anh_dai_dien" alt="cart-image" /></a>
                    </td>
                    <td class="product-name"><a href="#">@{{ value.ten_san_pham }}</a></td>
                    <td class="product-price"><span
                            class="amount">@{{ formatNumber(value.don_gia) }}</span></td>
                    <td class="product-quantity"><input v-on:change="updateRow(value)"
                            v-model="value.so_luong" type="number" /></td>
                    <td class="product-subtotal">@{{ formatNumber(value.don_gia * value.so_luong) }}</td>
                    <td class="product-remove"> <a v-on:click="deleteRow(value)"
                            class="btn"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            </template>
        </tbody>
    </table>
</div>
<!-- Table Content Start -->
<div class="row">
    <!-- Cart Button Start -->
    <div class="col-md-8 col-sm-12">
        <div class="buttons-cart">
            <a href="/client">Continue Shopping</a>
        </div>
    </div>
    <!-- Cart Button Start -->
    <!-- Cart Totals Start -->
    <div class="col-md-4 col-sm-12">
        <div class="cart_totals float-md-right text-md-right">
            <h2><i class="fas fa-user"></i> Thanh Toán </h2>
            <br/>
            <table class="float-md-right">
                <tbody>
                    <tr class="cart-subtotal">
                        <th><i class="fa-solid fa-sack-dollar"></i> Totals</th>
                        <td><span class="amount">@{{ formatNumber(totalMoney()) }}</span></td>
                    </tr>
                </tbody>
            </table>
            <div class="wc-proceed-to-checkout">
                <a href="/your-cart"><i class="fa-solid fa-cart-shopping"></i> Đặt Hàng</a>
            </div>
        </div>
    </div>
    <!-- Cart Totals End -->
</div>
