    <div class="col-md-4">
        <div class="card" style="height: auto">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-colored-form-control">Thêm mới danh mục</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                        <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <form class="form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userinput1">Tên Danh Mục</label>
                                        <input type="text" class="form-control" v-on:keyup="toSlug(ten_danh_muc)" v-model="ten_danh_muc"  name="ten_danh_muc">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userinput3">Slug Danh Mục</label>
                                        <input type="text" class="form-control" v-model="slug_danh_muc" name="slug_danh_muc">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userinput3">Hình Ảnh</label>
                                        <div class="input-group">
                                            <input v-model="hinh_anh" name="hinh_anh" class="form-control" type="text">
                                            <input type="button" class="btn-info lfm" data-input="hinh_anh" data-preview="holder" value="Upload">
                                        </div>
                                        <img style="margin-top:15px;max-height:100px;">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="issueinput6">Danh Mục Cha</label>
                                    <select v-model="id_danh_muc_cha" id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status" data-original-title="" title="">
                                        <option value="">Root</option>
                                        <template v-for="(value, key) in danh_muc_cha_vue">
                                            <option v-bind:value="value.id">@{{ value.ten_danh_muc }}</option>
                                        </template>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="issueinput6">Tình Trạng</label>
                                    <select v-model="is_open" name="status" class="form-control" >
                                        <option value="1" >Hiển Thị</option>
                                        <option value="0">Tạm Tắt</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions right">
                            <button type="button" v-on:click="create($event)" class="btn btn-primary">Thêm mới Danh Mục
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


