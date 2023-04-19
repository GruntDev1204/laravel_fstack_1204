<div class="modal fade text-left" id="updateStr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33"><h3>Edit Story</h3></label>
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
                                    <input v-model="newStr.id" type="text" class="form-control" hidden>
                                    <label>title</label>
                                    <input v-model="newStr.title" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>content</label>
                                    <textarea cols="30" rows="10" v-model="newStr.content" type="text" class="form-control" ></textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal" value="close">
                <button v-on:click=" updateCauchuyen()" class="btn btn-primary" data-dismiss="modal" >Save</button>
            </div>
        </div>
    </div>
</div>
