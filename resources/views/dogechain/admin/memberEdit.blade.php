<div class="modal fade text-left" id="updateInfoMembers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33"><h3>Edit Member</h3></label>
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
                                    <input v-model="editMember.id" type="text" class="form-control" hidden>
                                    <label>Full Name</label>
                                    <input v-model="editMember.fullname" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>Mô tả công việc</label>
                                    <textarea cols="30" rows="10" v-model="editMember.desJob" type="text" class="form-control" ></textarea>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <fieldset class="form-group " >
                                <label>your Avatar?</label>
                                <select   v-model="editMember.sex" id="is_open" class="custom-select block">
                                    <option value=1>Male</option>
                                    <option value=0>Female</option>
                                    <option value=2>Male 2</option>
                                    <option value=3>Male 3</option>
                                </select>
                            </fieldset>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal" value="close">
                <button v-on:click=" updateThanhVien()" class="btn btn-primary" data-dismiss="modal" >Save</button>
            </div>
        </div>
    </div>
</div>
