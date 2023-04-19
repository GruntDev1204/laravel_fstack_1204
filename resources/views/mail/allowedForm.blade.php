<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gnurt Blogs</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/dogechain/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/dogechain/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dogechain/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/dogechain/doge/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/dogechain/doge/timeline.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body class=" dark-mode" style="width:100%;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="card card-outline mt-3" style="background-color: rgba(4, 113, 133, 0.712);border-radius: 20px">
                        <div class="card-header">
                          <h3 class="card-title"><b> Active Status </b> </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <div class="mailbox-read-info">
                            <h5> Title : Active Your  Account <i class="fa-sharp fa-solid fa-square-check"></i> </h5>
                            <h6 class="mt-2">From: Gnrunt's Blogs Admins.
                          </div>
                          <!-- /.mailbox-controls -->
                          <div class="mailbox-read-message">
                            <p>Hello user <b> {{ $ho_va_ten }} </b>,</p>
                            <p>You have successfully confirmed your email : <b>{{$email}}</b> <i class="fa-solid fa-circle-check"></i> </p>
                            <p>To continue accessing your account!
                            Please click " Active your account now! " below!</p>
                            <p class="text-center"><a href="/people-allow/{{$hash}}"  class="btn btn-success btn-lg"> Active your account now!</a></p>
                            <p>or visit the link :  <a href="/people-allow/{{$hash}}" style="color: rgb(0, 255, 242) ">{{env('APP_URL')}}/people-allow/{{$hash}} </a> </p>
                            <h4>Thank you!</h4>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ./wrapper -->
</body>
</html>



