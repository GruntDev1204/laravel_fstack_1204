<div class="modal fade text-left" id="postImg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <label class="modal-title text-text-bold-600 text-white" id="myModalLabel33">
                    <h3>Add a Post </h3>
                </label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="card-body">

                    <div class="row">
                        <div class="container">
                            @if( Auth::guard('people')->check())
                            <div class="alert alert-info" style="border-radius: 30px" >
                                    <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" style="width: 150px;height: 150px;" src="{{Auth::guard('people')->user()->avatar}}" alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"> {{Auth::guard('people')->user()->ho_va_ten}}</h3>
                                    <h4 class="profile-username text-center"> {{Auth::guard('people')->user()->sdt}}</h4>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mt-2">
                                <label for="img">Img </label>
                                <div class="input-group">
                                    <input id="img" name="img" class="form-control" type="text" placeholder="up img for post">
                                    <input type="button" class="btn-info lfm" data-input="img"
                                        data-preview="avatar_holder" value="Upload">
                                </div>
                                <img id="avatar_holder" style="margin-top:15px;max-height:100px;">
                            </div>

                            <div class="row mt-2">
                                <div class="form-group" style="width:100% ">
                                    <label for="exampleSelectRounded0">Action </label>
                                    <select id="action" class="custom-select rounded-0" id="exampleSelectRounded0">
                                        <option value=1><i class="fa-solid fa-earth-asia"></i> Public</option>
                                        <option value=0><i class="fa-solid fa-lock"></i> Private</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row  mt-2">
                                    <label for="content">Content</label>
                                    <textarea id="content" name="content" class="form-control" cols="10" rows="10" ></textarea>
                            </div>
                       </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <input type="reset" id="closeModal" class="btn btn-outline-secondary" data-dismiss="modal"
                        value="close">
                    <button type="submit" data-dismiss="modal" id="submitImg" class="btn btn-primary">Save</button>
                </div>
        </div>
    </div>
</div>
