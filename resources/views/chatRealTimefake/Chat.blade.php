<!DOCTYPE html>
<html>

<head>
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js">
    </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
  <!-- overlayScrollbars -->
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="/dogechain/doge/timeline.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
  <link rel="stylesheet" href="/chatSever/chat.css">
</head>
<!--Coded With Love By Mutiullah Samim-->

<body>
    @if (Auth::guard('UserChat')->check())
    <div id="app" class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-12 col-xl-12 chat">
                <div class="card">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img src="/chatavatar.png"
                                    class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                                <span>Server chat by Trung</span>
                                <a href="/user/logout" class="btn btn-info">Logout</a>
                                <button v-on:click="clearChat()"  class="btn btn-danger">Clear</button >
                            </div>
                        </div>
                    </div>
                    <div class="card-body msg_card_body">
                        <template v-for="(v, k) in list">
                            <div class="d-flex justify-content-end mb-4" v-if="v.id_user  == {{$id_user}}">
                                <div class="msg_cotainer_send">
                                    @{{ v.content }}
                                    <span class="msg_time_send">@{{ formatDate(v.created_at) }}</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="https://thumbs.dreamstime.com/b/icon-profile-color-green-icon-profile-color-green-circle-color-dark-green-background-color-white-194702090.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4" v-else>
                                <div class="img_cont_msg">
                                    <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png"
                                        class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    @{{ v.content }}
                                    <span class="msg_time">@{{ formatDate(v.created_at) }}</span>
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <input class="form-control type_msg"  v-on:keyup.enter="sendMessage()" v-model="message" placeholder="Type your message...">
                            <div class="input-group-append">
                                <span v-on:click="sendMessage()" class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div id="app" class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-12 col-xl-12 chat">
                <div class="card">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img src="/chatavatar.png"
                                    class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                                <span>Server chat by Trung</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body msg_card_body">
                        <template v-for="(v, k) in list">
                            <div class="d-flex justify-content-end mb-4" v-if="v.id_user  == {{$id_user}}">
                                <div class="msg_cotainer_send">
                                    @{{ v.content }}
                                    <span class="msg_time_send">@{{ formatDate(v.created_at) }}</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="https://thumbs.dreamstime.com/b/icon-profile-color-green-icon-profile-color-green-circle-color-dark-green-background-color-white-194702090.jpg"
                                        class="rounded-circle user_img_msg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4" v-else>
                                <div class="img_cont_msg">
                                    <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png"
                                        class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    @{{ v.content }}
                                    <span class="msg_time">@{{ formatDate(v.created_at) }}</span>
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="card-footer text-center">
                       <div class="row">
                        <div class="col">
                            <a href="/user/index/login" class="btn btn-info">Đăng nhập để tiếp tục </a>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</body>
<script src="/chatSever/chat.js"> </script>
</html>
