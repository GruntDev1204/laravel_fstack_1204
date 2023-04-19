<form>
    <div class="card text-black" style="background-image: url('/loginview2.jpg');margin-bottom: 11cm">
        <div class="card-body" style="height: 500px;">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <p class=" h1 fw-bold mb-2 mx-1 mx-md-4">
                    <h4 style="color: rgb(115, 255, 0);margin-left: 70px"> <i class="fa-solid fa-user-group"></i> Đăng
                        Nhập Tài Khoản Agent</h4>
                    </p>
                    <div class="alert" role="alert"
                        style="background-color: rgba(172, 255, 47, 0.418);margin-bottom: 2cm;height:5cm">
                        <label class="form-label"><i class="fas fa-envelope "></i> Email</label>
                        <input type="email" id="email" class="form-control"
                            placeholder="Nhập vào Email của bạn" />

                        <label class="form-label mt-3"><i class="fas fa-lock "></i> Mật Khẩu</label>
                        <input type="password" id="password" class="form-control"
                            placeholder="Nhập vào mật khẩu của bạn" />
                    </div>
                </div>
            </div>
            <div class="row text-right" style="margin-bottom: 4cm">
                <div class="col-md-12">
                    <button class="btn btn-success" id="loginAgent"><i class="fas fa-user"></i> Đăng Nhập</button>
                    <a href="/agent/register" class="btn btn-info" style="margin-left:10px"><i
                            class="fas fa-user-plus"></i> Đăng Kí</a>
                </div>
            </div>
        </div>
    </div>
</form>
