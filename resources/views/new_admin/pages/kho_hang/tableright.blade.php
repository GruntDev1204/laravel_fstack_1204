<div class="card">
    <div class="card-header" style="height: auto">
        <h4 class="card-title">Nhập Kho Sản Phẩm</h4>
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
                        <th class="text-center">Tên Sản Phẩm</th>
                        <th class="text-center">Số Lượng</th>
                        <th class="text-center">Đơn Giá</th>
                        <th class="text-center">Thành Tiền</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(value, key) in danhSachKhoDangNhap">
                        <th class="text-center align-middle">@{{ key + 1 }}</th>
                        <td class="align-middle text-nowrap">@{{ value.ten_san_pham }}</td>
                        <td class="align-middle" style="width: 50px">
                            <input v-on:change="update(value)" v-model="value.so_luong" type="number" min="1" class="form-control text-center" v-bind:value="value.so_luong">
                        </td>
                        <td class="align-middle">
                            <input v-on:keyup="update(value)" v-model="value.don_gia" type="number"  class="form-control text-center" v-bind:value="value.don_gia">
                        </td>
                        <td class="align-middle">
                            @{{ value.don_gia * value.so_luong }}
                        </td>
                        <td class="text-center align-middle">
                            <button class="btn " v-on:click="destroy(value.id)"><i class="fa-solid fa-trash-can" style="color: red"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <button v-on:click="createStore()" class="m-1 btn btn-primary">Nhập Kho</button>
</div>
