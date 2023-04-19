@extends('blogs.indexMaster.index')
@section('header')
    <h2>Profile</h2>
@endsection
@section('content')
    <div id="people">
        <div class="row">
           @include('blogs.indexUser.classifyProfile.info')
            <div class="col-md-9">
                <div class="card" >
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                          <!-- Post -->
                        @foreach ($DataProfile as $key => $value)
                            <div class="post">
                                <div class="user-block">
                                @if ($value->action == 1)
                                <button class="btn btn-info float-right"><i class="fas fa-globe"></i> </button>
                                @else
                                <button class="btn btn-danger float-right"> <i class="fas fa-lock"></i></button>
                                @endif
                                <img  type="submit" class="img-circle img-bordered-sm" src="{{$profile->avatar}}" alt="user image">
                                <span class="username">
                                    <a href="/people/profile/{{$profile->id}}">{{$value->ho_va_ten}}</a>
                                </span>
                                @if ($value->created_at == null)
                                <span class="description">No Time To die</span>
                                @else
                                <span class="description">{{$value->created_at}}</span>
                                @endif

                                </div>


                                <!-- /.user-block -->
                                <p>
                                    {{$value->content}}
                                </p>

                                @if ($value->img == null)
                                <div class="row mb-3" >

                                    <!-- /.col -->
                                </div>
                                @else
                                <div class="row mb-3" >
                                    <div class="col">
                                        <img class="img-fluid" src="{{$value->img}}" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                </div>
                                @endif
                                {{-- <p>
                                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                <span class="float-right">
                                    <a href="#" class="link-black text-sm">
                                    <i class="far fa-comments mr-1"></i> Comments (5)
                                    </a>
                                </span>
                                </p>
                                <input class="form-control form-control-sm" type="text" placeholder="Type a comment"> --}}
                            </div>
                        @endforeach
                          <!-- /.post -->
                        </div>
                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
            </div>
        </div>
        @include('blogs.indexUser.classifyProfile.addInfo')
    </div>
    @include('blogs.indexUser.classifyProfile.upAvatar')
@endsection
@section('js')
<script src="/blog/js/people.js"></script>
@endsection
