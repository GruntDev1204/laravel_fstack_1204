<div class="modal fade text-left" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33"><h3>Chỉnh Sửa Sản Phẩm</h3></label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>Tên Sản Phẩm</label>
                                    <input v-model="sanPhamUpdate.ten_san_pham" type="text" class="form-control" id="ten_san_pham_edit" placeholder="Nhập vào tên sản phẩm">
                                    <input v-model="sanPhamUpdate.id" type="number" class="form-control" id="id_edit" hidden>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>Slug Sản Phẩm</label>
                                    <input v-model="sanPhamUpdate.slug_san_pham"  type="text" class="form-control" id="slug_san_pham_edit" placeholder="Nhập vào slug sản phẩm">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label>Giá Bán</label>
                                    <input v-model="sanPhamUpdate.gia_ban"  type="number" class="form-control" id="gia_ban_edit" placeholder="Nhập vào giá bán">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label>Giá Khuyến Mãi</label>
                                    <input v-model="sanPhamUpdate.gia_khuyen_mai"  type="number" class="form-control" id="gia_khuyen_mai_edit" placeholder="Nhập vào giá khuyến mãi">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>Ảnh Đại Diện</label>
                                    <input type="text" v-model="sanPhamUpdate.anh_dai_dien" class="form-control" >
                                    {{-- <div class="input-group">
                                        <input id="anh_dai_dien_edit" name="anh_dai_dien" class="form-control" type="text">
                                        <input type="button" class="btn-info lfm" data-input="anh_dai_dien_edit" data-preview="holder_edit" value="Upload">
                                    </div>
                                    <img id="holder_edit" style="margin-top:15px;max-height:100px;"> --}}
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="placeTextarea">Mô Tả Ngắn</label>
                                    <textarea v-model="sanPhamUpdate.mo_ta_ngan" class="form-control" id="mo_ta_ngan_edit" cols="30" rows="5" placeholder="Nhập vào mô tả ngắn"></textarea>
                                </fieldset>
                            </div>
                        </div>
                        <div class="position-relative form-group">
                            <label>Mô Tả Chi Tiết</label>
                            <textarea class="form-control" v-model="sanPhamUpdate.mo_ta_chi_tiet" cols="30" rows="10"></textarea>
                            {{-- <input name="mo_ta_chi_tiet_edit" id="mo_ta_chi_tiet_edit" placeholder="Nhập vào mô tả chi tiết" type="text" class="form-control"> --}}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label>Danh Mục</label>
                                    <select v-model="sanPhamUpdate.id_danh_muc" class="custom-select block">
                                        <template v-for="(value, key) in danhSachDanhMuc">
                                            <option v-bind:value="value.id">@{{ value.ten_danh_muc }}</option>
                                        </template>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label>Tùy chọn</label>
                                    <select v-model="sanPhamUpdate.is_open" class="custom-select block">
                                        <option value=1>Hiển Thị</option>
                                        <option value=0>Tạm tắt</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal" value="close">
                <input v-on:click="update()" class="btn btn-outline-primary" data-dismiss="modal" value="Chỉnh sửa">
            </div>
        </div>
    </div>
</div>
