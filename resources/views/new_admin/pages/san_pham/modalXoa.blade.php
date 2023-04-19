<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger">
            <input type="text" name="" id="idCanXoa" class="form-control" hidden>
            <h5 class="modal-title text-white" id="exampleModalLabel">Xoá Sản Phẩm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" v-on:click="deleteSanPham(id_delete)" class="btn btn-danger" data-dismiss="modal">Xóa Sản Phẩm</button>
        </div>
      </div>
    </div>
</div>
