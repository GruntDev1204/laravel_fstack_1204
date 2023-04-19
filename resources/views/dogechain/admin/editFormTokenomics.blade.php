<div class="modal fade text-left" id="updatedTokenomics" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33"><h3>Edit Token Content</h3></label>
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
                                    <input id="id" v-model="tokenedit.id" type="text" class="form-control" hidden >
                                    <label>Writer</label>
                                    <input id="writer"  v-model="tokenedit.writer" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>content</label>
                                    <textarea cols="30" rows="10" v-model="tokenedit.content" id="content"  type="text" class="form-control" ></textarea>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group">
                                <input v-model="tokenedit.img" id="img"  class="form-control" type="text" placeholder="upload your img here!">
                                <input type="button" class="btn-info lfm"  data-input="img" data-preview="review" value="Upload">
                                </div>
                                <img id="review" style="margin-top:15px;max-height:200px;width:100px;border-radius: 50%">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal" value="close">
                <button  id="tokenomics" class="btn btn-primary" data-dismiss="modal" >Save</button>
            </div>
        </div>
    </div>
</div>
