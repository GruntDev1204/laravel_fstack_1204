<div class="modal fade text-left" id="updateAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33">
                    <h3>Edit Info Admins</h3>
                </label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="row">
                    <input type="text" class="form-control" placeholder="nhập vào id" v-model="AdminsEdited.id" hidden>
                </div>
                <div class="row mt-5">
                    <input type="text" class="form-control" placeholder="nhập vào họ và tên"  v-model="AdminsEdited.ho_va_ten" >
                </div>
                <div class="row mt-5">
                    <input type="text" class="form-control"  placeholder="nhập vào số điện thoại mới"  v-model="AdminsEdited.sdt">
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal"
                    value="close">
                <button v-on:click=" updateAdmins()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
