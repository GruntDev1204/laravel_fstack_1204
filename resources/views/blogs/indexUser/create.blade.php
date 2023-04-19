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
                        <a href="/home" class="h1"><b>Gnurt's </b>Blog</a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Register a new people</p>
                        <div class="input-group mb-3">
                            <input  v-model="arrayCreate.sdt" type="text" class="form-control" placeholder="Phone Number">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input v-model="arrayCreate.ho_va_ten" type="text" class="form-control" placeholder="Full name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input   v-model="arrayCreate.email" type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input  v-model="arrayCreate.birth" type="datetime-local" class="form-control" placeholder="BirthDay" >
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-cake-candles"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input   v-model="arrayCreate.password" type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input  v-model="arrayCreate.re_password"  type="password" class="form-control" placeholder="Retype password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms"  v-on:keyup.enter="createPeople()" v-model="arrayCreate.agree" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        I agree to the <a href="">terms</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" v-on:click="createPeople()" class="btn btn-info btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>

                        <a href="/people/login" class="text-center">I already have a membership</a>
                    </div>
                    <!-- /.form-box -->
                </div>
            </div>
        </div>
@endsection
@section('js')
    <script src="/blog/js/people.js"></script>
@endsection
