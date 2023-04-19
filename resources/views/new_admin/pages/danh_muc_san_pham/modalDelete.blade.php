<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Xóa Danh Mục Sản Phẩm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="text" class="form-control" v-model="idDelete"  placeholder="Nhập vào id cần xóa" hidden>
            Bạn có chắc chắn muốn xóa? Điều này không thể hoàn tác.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger" v-on:click="acceptDelete()" data-dismiss="modal">Xóa Danh Mục</button>
        </div>
    </div>
</div>
