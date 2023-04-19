<div class="col-md-6">
    <div class="buttons-cart">
        <a href="/client">Continue Shopping</a>
        <a   href="/dat-hang"> Xem đơn đặt</a>

    </div>
</div>

<div class="col-md-6">
    <div class="cart_totals float-md-right text-md-right">
        <h3><i class="fa-solid fa-cart-shopping"></i> Thanh Toán </h3>
        <br />
        <table class="float-md-right">
            <tbody>
                <tr class="cart-subtotal">
                    <th><i class="fa-solid fa-sack-dollar"></i> Tổng tiền </th>
                    <td><span class="amount">@{{ formatNumber(totalMoney()) }}</span></td>
                </tr>
            </tbody>
        </table>
        <div class="wc-proceed-to-checkout ">
            <a v-on:click="createDonHang()" type="button" class="btn btn-success"> Xác Nhận</a>
        </div>
    </div>
</div>
