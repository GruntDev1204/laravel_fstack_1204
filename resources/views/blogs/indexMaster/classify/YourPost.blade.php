<div class="card">
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="activity">
                <!-- Post -->

                <div class="post">
                    <div class="user-block">
                        <button class="btn btn-info float-right"  v-if="v.action == 1" ><i class="fas fa-globe"></i> </button>
                        <img class="img-circle img-bordered-sm" v-bind:src="v.avatar" alt="user image">
                        <span class="username">
                            <a v-bind:href="'/people/profile/'+ v.id_people">@{{v.ho_va_ten}}</a>
                        </span>
                        <span class="description">@{{v.created_at }}</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                        @{{v.content}}
                    </p>


                    <div class="row mb-3" v-if="v.img == null">

                        <!-- /.col -->
                    </div>
                    <div class="row mb-3" v-else>
                        <div class="col-md-12">
                            <div class="container">
                                <div class="alert alert-info "style="width : 100%; height: auto;border-radius: 20px">
                                    <img class="img-fluid" v-bind:src="v.img" alt="Photo" >
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                    {{-- <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                            Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                            Like</a>
                        <span class="float-right">
                            <a href="#" class="link-black text-sm">
                                <i class="far fa-comments mr-1"></i> Comments (5)
                            </a>
                        </span>
                    </p> --}}



                    {{-- <input class="form-control form-control-sm" type="text" v-model="cmt.content"
                        placeholder="Type a comment" v-on:keyup.enter="postCmts()"  v-on:click="getPostId(v.id)" > --}}
                </div>

                <!-- /.post -->
            </div>
        </div>
        <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
