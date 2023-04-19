<div class="modal fade text-left" id="addInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33"><h3>Add Your Info</h3></label>
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
                                    <input v-model="arrayEdit.id"  type="text" class="form-control" hidden >
                                    <label>Detail</label>
                                    <input  v-model="arrayEdit.detail" name="detail" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>Location</label>
                                    <input v-model="arrayEdit.location" name="location" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>Birth</label>
                                    <input v-model="arrayEdit.birth" name="birth" type="datetime-local" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>Education</label>
                                    <input v-model="arrayEdit.education" name="education" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>Skills</label>
                                    <input name="skill"   v-model="arrayEdit.skill" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>Note</label>
                                    <textarea   v-model="arrayEdit.note" name="note" cols="10" rows="10" type="text" class="form-control" ></textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal" value="close">
                <button v-on:click=" UpdateInfo()" type="submit" class="btn btn-primary" data-dismiss="modal" >Save</button>
            </div>
        </div>
    </div>
</div>
