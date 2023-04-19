<div class="modal fade text-left" id="updateTime" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33"><h3>Edit Roadmap</h3></label>
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
                                    <input v-model="newTimeline.id" type="text" class="form-control" hidden >
                                    <label>Month</label>
                                    <input v-model="newTimeline.month" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>week</label>
                                    <input v-model="newTimeline.week" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>dòng 1</label>
                                    <input v-model="newTimeline.line_one" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>dòng 2</label>
                                    <input v-model="newTimeline.line_two" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>dòng 3</label>
                                    <input v-model="newTimeline.line_three" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>dòng 4</label>
                                    <input v-model="newTimeline.line_four" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>dòng 5</label>
                                    <input v-model="newTimeline.line_five" type="text" class="form-control" >
                                </fieldset>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal" value="close">
                <button v-on:click=" updateRoadmap()" class="btn btn-primary" data-dismiss="modal" >Save</button>
            </div>
        </div>
    </div>
</div>
