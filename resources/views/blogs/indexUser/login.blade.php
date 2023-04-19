@extends('blogs.indexMaster.index')
@section('header')
    <h2>Login to Gnurt'blogs </h2>
@endsection
@section('content')
    <div id="people">
        <div class="row float-center">
            <div class="col">
                <div class="card card-outline card-info" style="height: auto;width: 100%">
                    <div class="card-header text-center">
                        <a href="/home" class="h1"><b>Gnurt's </b>Blog</a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Login</p>

                        <div class="input-group mb-3">
                            <input   v-model="ArrayLogin.email" type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input   v-model="ArrayLogin.password"  v-on:keyup.enter="loginPeople()" type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" v-on:click="loginPeople()" class="btn btn-success btn-block">Login</button>
                            </div>
                            <!-- /.col -->
                        </div>
                            <!-- /.col -->
                            <a href="/people/signup" class="text-center mt-5" style="color: rgba(223, 4, 4, 0.753)">I don't have an account yet?</a>
                            <!-- /.col -->

                    </div>
                    <!-- /.form-box -->
                </div>
            </div>
        </div>
@endsection
@section('js')
    <script src="/blog/js/people.js"></script>
@endsection
