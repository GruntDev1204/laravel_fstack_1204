<div class="card">
    <div class="card-header" style="height: auto">
        <h4 class="card-title">Quản Lý Đơn Hàng</h4>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-content collapse show">
        <div class="card-body">
            <table class="table table-bordered mb-0">
                <thead>
                    <tr class="text-center">
                        <th class="text-center">#</th>
                        <th class="text-center">Mã đơn hàng</th>
                        <th class="text-center">Tên Khách Hàng</th>
                        <th class="text-center">Tổng thanh toán</th>
                        <th class="text-center">Thực trả</th>
                        <th class="text-center">Khuyến Mãi</th>
                        <th class="text-center">Ngày tạo</th>
                        <th class="text-center">Hàng nhận?</th>

                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(value, key) in donHang">
                        <th class="text-center align-middle">@{{ key + 1 }}</th>
                        <td class="align-middle text-nowrap">@{{ value.ma_don_hang }}</td>
                        <td class="align-middle text-nowrap">@{{ value.ma_don_hang }}</td>
                        <td class="align-middle text-nowrap">@{{ value.tong_tien }}</td>
                        <td class="align-middle text-nowrap">@{{ value.thuc_tra }}</td>
                        <td class="align-middle text-nowrap" >@{{ value.tien_giam_gia }}</td>
                        <td class="align-middle text-nowrap">@{{ value.created_at }}</td>
                        <td class="text-center">
                            <template v-if="value.is_giao_hang">
                                <button v-on:click="xacnhandonhang(value.id)" class="btn btn-success">
                                    Đã Nhận Hàng </button>
                            </template>
                            <template v-else>
                                <button v-on:click="xacnhandonhang(value.id)" class="btn btn-danger">
                                    Chưa Nhận Hàng </button>
                            </template>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
