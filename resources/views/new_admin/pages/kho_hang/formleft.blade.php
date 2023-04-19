<div class="card" style="height: auto">
    <div class="card-header">
        <h4 class="card-title" id="basic-layout-colored-form-control">Nhập Kho Sản Phẩm</h4>
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
            <fieldset class="form-group position-relative">
                <input v-on:keyup="search()" v-model="inputSearch" type="text" class="form-control form-control mb-1" placeholder="Nhập vào tên sản phẩm">
                <div class="form-control-position">
                    <i v-on:click="search()" class="feather icon-search info font-medium-4"></i>
                </div>
            </fieldset>
            <table class="table table-bordered mb-0 mt-1">
                <thead>
                    <tr class="text-center">
                        <th class="text-center">#</th>
                        <th class="text-center">Tên Sản Phẩm</th>
                        <th class="text-center">Thêm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(value, key) in danhSachSanPham">
                        <th class="text-center">@{{ key + 1 }}</th>
                        <td>@{{ value.ten_san_pham }}</td>
                        <td class="text-center">
                            <button v-on:click="addKhoHang(value.id)" class="btn"><i class="fa-solid fa-plus" style="color: greenyellow"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
