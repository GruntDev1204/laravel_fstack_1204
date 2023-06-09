<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>Admin Page</title>
<link rel="apple-touch-icon" href="/new_assets_admin/app-assets/images/ico/apple-icon-120.png">
<link rel="shortcut icon" type="image/x-icon" href="/new_assets_admin/app-assets/images/ico/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="/new_assets_admin/app-assets/vendors/css/vendors.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="/new_assets_admin/app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/new_assets_admin/app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="/new_assets_admin/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="/new_assets_admin/app-assets/css/components.css">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="/new_assets_admin/app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="/new_assets_admin/app-assets/css/core/colors/palette-gradient.css">

<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="/new_assets_admin/assets/css/style.css">


<!-- END: Custom CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
@toastr_css
</head>
<body>


<div class="row">
    <div class="col">
        <div class="container mt-5">
            <form action="/postimg" method="post">
                @csrf
                <input id="avatar_input" name="img" class="form-control" type="text">
                <input type="button" class="btn-info lfm"  data-input="avatar_input" data-preview="avatar_holder" value="Upload">
                <img id="avatar_holder" style="margin-top:15px;max-height:100px;">
                <button type="submit" class="btn btn-primary">
                    Cập Nhật ảnh đại diện
                </button>
            </form>
        </div>
    </div>
</div>





</body>
@jquery
@toastr_js
@toastr_render
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/new_assets_admin/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/new_assets_admin/app-assets/js/core/app-menu.js"></script>
<script src="/new_assets_admin/app-assets/js/core/app.js"></script>
<script src="/new_assets_admin/app-assets/js/scripts/customizer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('.lfm').filemanager('image');
</script>
</html>
