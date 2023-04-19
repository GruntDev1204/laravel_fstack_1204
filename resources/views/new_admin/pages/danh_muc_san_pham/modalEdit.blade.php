<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Chỉnh Sửa Danh Mục Sản Phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <input type="text" v-model="idEdit" hidden>
            <div class="position-relative form-group">
                <label>Tên Danh Mục</label>
                <input placeholder="Nhập vào tên danh mục" v-on:keyup="toSlugEdit(ten_danh_muc_edit)" v-model="ten_danh_muc_edit" type="text" class="form-control">
            </div>
            <div class="position-relative form-group">
                <label>Slug Danh Mục</label>
                <input placeholder="Nhập vào slug danh mục" v-model="slug_danh_muc_edit"  type="text" class="form-control">
            </div>
            <div class="position-relative form-group">
                <label>Hình Ảnh</label>
                <div class="input-group">
                    <input v-model="hinh_anh_edit" class="form-control" type="text">
                    <input type="button" class="btn-info lfm" data-input="hinh_anh_edit" data-preview="holder_edit" value="Upload">
                </div>
                <img id="holder_edit" style="margin-top:15px;max-height:100px;">
            </div>
            <div class="position-relative form-group">
                <label>Danh Mục Cha</label>
                <select v-model="id_danh_muc_cha_edit" class="form-control">
                    {{-- <option value=0>Root</option> --}}
                    <option value="">Root</option>
                    <template  v-for="(value, key) in danh_muc_cha_vue">
                        <option v-bind:value="value.id">@{{ value.ten_danh_muc }}</option>
                    </template>
                </select>
            </div>
            <div class="position-relative form-group">
                <label>Tình Trạng</label>
                <select v-model="is_open_edit" class="form-control">
                    <option value=1>Hiển Thị</option>
                    <option value=0>Tạm Tắt</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" data-dismiss="modal" v-on:click="acceptUpdate()">Cập Nhật Danh Mục</button>
        </div>
    </div>
</div>
