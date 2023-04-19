<div class="table-content table-responsive mb-45 container mt-4">
    <table>
        <tbody>
            <template v-for="(value, key) in list2">
                <tr>
                    <td class="product-name">@{{ value.created_at }}</a></td>
                    <td class="product-name">@{{ value.ma_don_hang }}</a></td>
                    <td class="product-subtotal">@{{ formatNumber(value.thuc_tra) }}</td>
                </tr>
            </template>
        </tbody>
    </table>
</div>
