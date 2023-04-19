<div class="card">
    <div class="card-header">
        <h4 class="card-title">Danh Sách Sản Phẩm</h4>
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
        <div class="table-responsive">
            <table class="table table-bordered mb-0" id="tableSanPham">
                <thead>
                    <tr>
                        <th class="text-nowrap text-center">#</th>
                        <th class="text-nowrap text-center">Tên Sản Phẩm</th>
                        <th class="text-nowrap text-center">Slug Sản Phẩm</th>
                        <th class="text-nowrap text-center">Giá Bán</th>
                        <th class="text-nowrap text-center">Giá Khuyến Mãi</th>
                        <th class="text-nowrap text-center">Tình Trạng</th>
                        <th class="text-nowrap text-center">Danh Mục</th>
                        <th class="text-nowrap text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <template v-for="(value, key) in danhSachSanPham">
                        <tr>
                            <th class="text-nowrap text-center">@{{ key + 1 }}</th>
                            <td>@{{ value.ten_san_pham }}</td>
                            <td>@{{ value.slug_san_pham }}</td>
                            <td>@{{ value.gia_ban }}</td>
                            <td>@{{ value.gia_khuyen_mai }}</td>
                            <td>
                                <template v-if="value.is_open">
                                    <button v-on:click="changeStatus(value.id)" class="btn btn-primary">Hiển Thị</button>
                                </template>
                                <template v-else>
                                    <button v-on:click="changeStatus(value.id)" class="btn btn-danger">Tạm Tắt</button>
                                </template>
                                {{-- @{{ value.is_open == 1 ? "Hiển Thị" : "" }} --}}
                            </td>
                            <td>@{{ value.ten_danh_muc }}</td>
                            <td>
                                <button v-on:click="edit(value.id)" class="btn btn-info" data-toggle="modal" data-target="#updateModal" >Edit</button>
                                <button v-on:click="gandeleteid(value.id)" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>
</div>
