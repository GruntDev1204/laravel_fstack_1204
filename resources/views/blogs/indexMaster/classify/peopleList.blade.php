@extends('blogs.indexMaster.index')
@section('header')
    <h2>Join Gnurt'blogs </h2>
@endsection
@section('content')
    <div id="people">
        <div class="row float-center">
            <div class="col">
                <div class="card card-outline card-info" style="height: auto;width: 100%">
                    <div class="card-header text-center">
                      <b>Gnurt's </b>Blog Community
                    </div>
                    <div class="card-body">
                        <ul class="users-list clearfix">
                            <template v-for="(v,k) in peopleList">
                            <li>
                              <img class="img-fluid" style="height: 70px;width:70px" v-bind:src="v.avatar" alt="User Image">
                              <a class="users-list-name" v-bind:href="'/people/profile/' + v.id">@{{v.ho_va_ten}}</a>
                              <span class="users-list-date" v-if="v.detail == 0" ></span>
                              <span class="users-list-date" v-else >@{{v.detail}}</span>
                            </li>
                          </template>
                          </ul>
                    </div>
                    <!-- /.form-box -->
                </div>
            </div>
        </div>
@endsection
@section('js')
    <script src="/blog/js/people.js"></script>
@endsection
