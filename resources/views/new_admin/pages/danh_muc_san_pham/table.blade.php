<div class="col-md-8">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh sách danh mục</h4>
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
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Tên Danh Mục</th>
                                    <th>Danh Mục Cha</th>
                                    <th>Tình Trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, key) in list_vue">
                                    <th class="text-center align-middle">@{{ key + 1 }}</th>
                                    <td class="align-middle">@{{ value.ten_danh_muc }}</td>
                                    <td class="text-center align-middle">@{{ value.ten_danh_muc_cha === null ? 'Không Có' : value.ten_danh_muc_cha }}</td>
                                    <td class="text-center">
                                        {{-- @{{ value.is_open == 1 ? 'Hiển Thị' : 'Tạm Tắt' }} --}}
                                        <button class="btn btn-primary" v-on:click="doiTrangThai(value.id)"  v-if="value.is_open">Hiển Thị</button>
                                        <button class="btn btn-danger" v-on:click="doiTrangThai(value.id)" v-else>Tạm Tắt</button>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal" v-on:click="editDanhMuc(value.id)">Edit</button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" v-on:click="deleteDanhMuc(value.id)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

