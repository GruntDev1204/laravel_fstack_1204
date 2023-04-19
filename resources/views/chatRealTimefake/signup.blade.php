<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
  <!-- overlayScrollbars -->
  <!-- Theme style -->
  <link rel="stylesheet" href="/dogechain/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/dogechain/doge/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="/dogechain/doge/timeline.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
  @toastr_css


<body style="background-color: rgb(61, 60, 60)">
    <div id="signup" class="container mt-5">
        <div class="alert alert-info" style="border-radius: 20px">
            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input v-model="arraySIGNUP.sdt" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your phone Number with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input v-model="arraySIGNUP.full_name" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input v-model="arraySIGNUP.password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button v-on:click="createUser()" type="submit" class="btn btn-primary">Signup</button>
        </div>
    </div>
</body>
<script src="/chatSever/signup.js"></script>
<script scr="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
@jquery
@toastr_js
@toastr_render
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/dogechain/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/dogechain/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dogechain/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/dogechain/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/dogechain/plugins/raphael/raphael.min.js"></script>
<script src="/dogechain/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/dogechain/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/dogechain/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/dogechain/dist/js/demo.js"></script>

<script src="/dogechain/dist/js/pages/dashboard2.js"></script>
<script src="/dogechain/doge/main.js"></script>

{{-- <script>
  function copyFunction() {
  // Get the text field
  var copyText = document.getElementById("copyLink");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
}
</script> --}}

</html>
