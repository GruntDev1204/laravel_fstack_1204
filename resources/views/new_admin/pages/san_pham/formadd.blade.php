<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Thêm Mới Sản Phẩm</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label>Tên Sản Phẩm</label>
                                    <input v-model="sanPhamCreate.ten_san_pham" type="text" class="form-control" placeholder="Nhập vào tên sản phẩm">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label>Slug Sản Phẩm</label>
                                    <input v-model="sanPhamCreate.slug_san_pham" type="text" class="form-control" placeholder="Nhập vào slug sản phẩm">
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <fieldset class="form-group">
                                    <label>Giá Bán</label>
                                    <input v-model="sanPhamCreate.gia_ban" type="number" class="form-control" placeholder="Nhập vào giá bán">
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset class="form-group">
                                    <label>Giá Khuyến Mãi</label>
                                    <input v-model="sanPhamCreate.gia_khuyen_mai" type="number" class="form-control" placeholder="Nhập vào giá khuyến mãi">
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset class="form-group">
                                    <label>Ảnh Đại Diện</label>
                                    <input v-model="sanPhamCreate.anh_dai_dien" type="text" class="form-control" placeholder="Nhập vào đường dẫn">
                                    {{-- <div class="input-group">
                                        <input v-model="sanPhamCreate.anh_dai_dien" name="anh_dai_dien" class="form-control" type="text">
                                        <input type="button" class="btn-info lfm" data-input="anh_dai_dien" data-preview="holder" value="Upload">
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;"> --}}
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="placeTextarea">Mô Tả Ngắn</label>
                                    <textarea v-model="sanPhamCreate.mo_ta_ngan" class="form-control" cols="30" rows="5" placeholder="Nhập vào mô tả ngắn"></textarea>
                                </fieldset>
                            </div>
                        </div>
                        <div class="position-relative form-group">
                            <label>Mô Tả Chi Tiết</label>
                            <label for="placeTextarea">Mô Tả Chi Tiết</label>
                            <textarea v-model="sanPhamCreate.mo_ta_chi_tiet" class="form-control" cols="30" rows="5" placeholder="Nhập vào mô tả chi tiết"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label>Danh Mục</label>
                                    <select v-model="sanPhamCreate.id_danh_muc" class="custom-select block">
                                    {{-- @foreach ($danhSachDanhMuc as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->ten_danh_muc }}</option>
                                    @endforeach --}}

                                    <template v-for="(value, key) in danhSachDanhMuc">
                                        <option v-bind:value="value.id">@{{ value.ten_danh_muc }}</option>
                                    </template>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label>Action</label>
                                    <select v-model="sanPhamCreate.is_open" id="is_open" class="custom-select block">
                                        <option value=1>Hiển Thị</option>
                                        <option value=0>Tạm tắt</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <button v-on:click="create()" class="mt-1 btn btn-primary">Thêm Mới Sản Phẩm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
