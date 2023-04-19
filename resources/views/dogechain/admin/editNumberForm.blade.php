<div class="modal fade text-left" id="updateNumber" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33"><h3>Edit Number</h3></label>
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
                                    <input v-model="numberChange.id" type="text" class="form-control" hidden>
                                    <label>followers</label>
                                    <input v-model="numberChange.followers" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>nft</label>
                                    <input v-model="numberChange.nft" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>twitter</label>
                                    <input v-model="numberChange.twitter" type="text" class="form-control"  placeholder="Nhập vào tên sản phẩm">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>holders</label>
                                    <input v-model="numberChange.holders" type="text" class="form-control"  placeholder="Nhập vào tên sản phẩm">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal" value="close">
                <input v-on:click=" updatedSoLieu()" class="btn btn-primary" data-dismiss="modal" value="xác nhận">
            </div>
        </div>
    </div>
</div>
