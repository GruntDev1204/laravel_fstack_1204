@extends('blogs.indexMaster.index')
@section('content')
    <div  class="row" id="post" >
        <div class="col">
            <template v-for="(v, k) in dataPrivate">
                <div class="card" style="background-color:#0d84d469">
                    <div class="card-header">
                        <div class="card-title">
                            <h3><i class="fa-solid fa-lock"></i> Your Private Post </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <button class="btn btn-info float-right" v-on:click=" changeAction(v.id)" v-if="v.action == 1" ><i class="fas fa-globe"></i> </button>
                                    <button class="btn btn-danger float-right"  v-on:click=" changeAction(v.id)" v-else  > <i class="fas fa-lock"></i></button>
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" v-bind:src="v.avatar" alt="user image">
                                        <span class="username">
                                            <a v-bind:href="'/people/profile/'+ v.id_people">@{{ v.ho_va_ten }}</a>
                                        </span>
                                        <span class="description">@{{ formatDate(v.created_at) }}</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        @{{ v.content }}
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

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i>
                                            Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i>
                                            Like</a>
                                        <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                            </a>
                                        </span>
                                    </p>
                                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                </div>

                                <!-- /.post -->
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>

            </template>
        </div>
    </div>
@endsection
@section('js')
    <script src="/blog/js/newpost.js"></script>
@endsection
