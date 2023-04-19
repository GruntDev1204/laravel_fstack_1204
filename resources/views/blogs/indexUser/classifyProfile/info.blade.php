<div class="col-md-3">
    <!-- Profile Image -->
    <div class="card card-info">
        @if(Auth::guard('people')->check())
        <div class="card-body box-profile">
            <template v-model=" MyData ">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" style="height: 70px;width:70px" v-if="MyData.id == {{$profile->id}}"  v-bind:src="MyData.avatar"
                    alt="User profile picture">
                    <img class="profile-user-img img-fluid img-circle" style="height: 70px;width:70px" v-else  src="{{$profile->avatar}}"
                    alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{$profile->ho_va_ten}}</h3>
            <p class="text-muted text-center" v-if="MyData.id == {{$profile->id}}" >@{{MyData.detail}}</p>
            <p class="text-muted text-center" v-else > {{$profile->detail}}</p>
            </template>
            <button data-toggle="modal"
                data-target="#avatar" v-if="MyData.id == {{$profile->id}}"  type="submit" class="btn btn-info btn-block"><i class="fa-solid fa-image"></i> Upload new Avatar</button>
            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Follower</b> <a class="float-right"> {{$profile->follower}}</a>
                </li>
                <li class="list-group-item">
                    <b>Following</b> <a class="float-right">0</a>
                </li>
                <template v-model=" MyData ">
                <li class="list-group-item"  v-if="MyData.id == {{$profile->id}}">
                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                    <p class="text-muted"  >@{{MyData.note}}</p>
                </li>
                <li class="list-group-item" v-else>
                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                    <p class="text-muted"> {{$profile->note}}</p>
                </li>
                </template>
            </ul>
            <template v-model=" MyData ">
                <button data-toggle="modal" v-if="MyData.id == {{$profile->id}}"  v-on:click="editInfo(MyData.id)"
                     data-target="#addInfo"  type="submit" class="btn btn-success btn-block float-right "><i class="fa-solid fa-pen "></i> Edit your information</button>
                {{-- <template v-model=" follow " v-else >
                    <button class=" btn btn-danger btn-block" v-if="follow.is_followed == 1"  v-on:click="changeFollow(follow.id,{{$profile->id}})" >Unfollow</button>
                    <a href="'/people/unfollow/' + follow.id '/iduser/{{$profile->id}}'"  v-if="follow.is_followed == 1"  class="btn btn-warning btn-block"><b>UnFollow</b></a>
                    <a href="/people/follow/{{$profile->id}}"  v-else  class="btn btn-info btn-block"><b>Follow</b></a>
                </template> --}}
           </template>

        </div>
        @else
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" style="height: 70px;width:70px" src="{{$profile->avatar}}"
                    alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{$profile->ho_va_ten}}</h3>

            <p class="text-muted text-center">{{$profile->detail}}</p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Follower</b> <a class="float-right"> 0 </a>
                </li>
                <li class="list-group-item">
                    <b>Following</b> <a class="float-right">0</a>
                </li>
                <template v-model=" MyData ">
                <li class="list-group-item">
                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                    <p class="text-muted">{{$profile->note}}</p>
                </li>
                </template>
            </ul>
            </div>
        @endif
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- About Me Box -->
    @if(Auth::guard('people')->check())
    <div class="card card-primary">
        <template v-model="MyData">
        <div class="card-header">
            <h3 class="card-title">About Me</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body"  v-if="MyData.id == {{$profile->id}}" >
            <strong><i class="fas fa-cake mr-1"></i> Birth </strong>

            <p class="text-muted">
                @{{MyData.birth}}
            </p>
            <hr>
            <strong><i class="fas fa-book mr-1"></i> Education</strong>

            <p class="text-muted">
                @{{MyData.education}}
            </p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

            <p class="text-muted">   @{{MyData.location}}</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
                <span class="tag tag-danger"> @{{MyData.skill}}</span>
            </p>
        </div>

        <div class="card-body" v-else>
            <strong><i class="fas fa-cake mr-1"></i> Birth </strong>

            <p class="text-muted">
                {{$profile->birth}}
            </p>
            <hr>
            <strong><i class="fas fa-book mr-1"></i> Education</strong>

            <p class="text-muted">
                {{$profile->education}}
            </p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

            <p class="text-muted">   {{$profile->location}}</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
                <span class="tag tag-danger"> {{$profile->skill}}</span>
            </p>
        </div>
        <!-- /.card-body -->
        </template>
    </div>
    @else
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">About Me</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <strong><i class="fas fa-cake mr-1"></i> Birth </strong>

            <p class="text-muted">
                {{$profile->birth}}
            </p>
            <hr>
            <strong><i class="fas fa-book mr-1"></i> Education</strong>

            <p class="text-muted">
                {{$profile->education}}
            </p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

            <p class="text-muted">   {{$profile->location}}</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
                <span class="tag tag-danger"> {{$profile->skill}}</span>
            </p>
        </div>
        <!-- /.card-body -->
        </template>
    </div>
    @endif
    <!-- /.card -->
</div>
