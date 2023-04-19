<div class="row">
    <div class="col-md-6">
    </div>
    <div class="col-md-6">
        <p class=" h1 fw-bold mb-2 mx-1 mx-md-4">
        <h4 style="color: rgb(255, 0, 0);margin-left: 5cm"> <i class="fa-solid fa-user-graduate"></i> Đăng kí Gia nhập Admin</h4>
        </p>
        <div class="alert" role="alert"
            style="background-color: rgba(172, 255, 47, 0.418);margin-bottom: 2cm;height:16cm">
            <label class="form-label"><i class="fas fa-user "></i> Họ và tên </label>
            <input type="text" v-model="newadmin.ho_va_ten" class="form-control"
                placeholder="Nhập vào Họ và tên của bạn" />

            <label class="form-label mt-3"><i class="fas fa-phone "></i> Số điện thoại </label>
            <input type="number" v-model="newadmin.sdt" class="form-control"
                placeholder="Nhập vào Số điện thoại của bạn" />

            <label class="form-label mt-3"><i class="fas fa-lock "></i> Mật Khẩu </label>
            <input type="password" v-model="newadmin.password" class="form-control"
                placeholder="Nhập vào mật khẩu của bạn" />

            <label class="form-label mt-3"><i class="fa-solid fa-calendar"></i> Ghi Chú </label>
            <textarea type="text" v-model="newadmin.ghi_chu" class="form-control" cols="10 " rows="10"
                 ></textarea>
        </div>
    </div>
</div>
<div class="row text-end" >
    <div class="col-md-12">
        <button type="submit" v-on:click="create()" style="--clr:yellow" ><span>Đăng Kí</span><i></i></button>
        <button  v-on:click="reset()" style="--clr:red"><span>Reset Form</span><i></i></button>
    </div>
</div>
