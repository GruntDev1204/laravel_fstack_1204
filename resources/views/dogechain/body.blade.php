<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> SNDG </h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">

            <!-- row statics -->
            <div class="row">
                <template v-for="(value, key) in numbers">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-success elevation-1"><i
                                    class="fa-sharp fa-solid fa-person-circle-plus"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Followers </span>
                                <span class="info-box-number">
                                    @{{ value.followers }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-primary elevation-1"><i
                                    class="fa-solid fa-chart-simple"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Proud Snope
                                    Holders</span>
                                <span class="info-box-number">
                                    @{{ value.holders }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-coins"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">NFT</span>
                                <span class="info-box-number">
                                    @{{ value.nft }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fa-brands fa-twitter"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Twitter Followers</span>
                                <span class="info-box-number">
                                    @{{ value.twitter }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </template>
            </div>

            <!-- /.row  introduce-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="height: auto;">
                        <div class="card-header text-center">
                            <h1 style="color:white;"><b>Introduce</b></h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="chart">
                                        <div class="alert alert"
                                            style="background-color:#3F475C  ; border-radius: 20px;padding:  40px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <img src="/dogechain/img/logoDoge.png" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-5 ">
                                <template v-for="(value, key) in cauchuyen">
                                    <div class="col-md-12">
                                        <p class="text-center" style="font-size:25px ;">
                                            <strong style="color:yellow;"> @{{ value.title }} </strong>
                                        </p>

                                        <div class="row">
                                            <div class="alert alert"
                                                style="width :auto ; height :auto;border-radius: 30px; background-color: rgb(22, 20, 20);">
                                                <h4>@{{ value.content }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                        <!-- ./card-body -->
                        <div class="card-footer">
                            <div class="row ">
                                <div class="container">
                                    <p class="text-center" style="font-size:25px ;">
                                        <strong style="color:yellow;">Link Token</strong>
                                    </p>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="copyLink"
                                            value="0x3944424e75d96B7d97417edEc5Cc0e85890Cf130"
                                            style="border-radius:20px ; background-color: rgb(240, 254, 255);color: black;">
                                        {{-- <label class="btn" style="background-color:rgb(72, 255, 0) ; border-radius:20px ;"
                        onclick="copyFunction()"><i class="fa-sharp fa-solid fa-copy"></i> COPY </label > --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

            <!-- row member-->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header text-center">
                            <h1 style="color:white;"><b>Members</b></h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="users-list clearfix">
                                <template v-for="(value, key) in loadMember">
                                    <li>
                                        <template v-if="value.sex == 1">
                                            <img src="/avatarMale.png" alt="User Image"> <b
                                            class="users-list-name mt-2">@{{value.fullname}}</b> <span class="users-list-date">@{{value.desJob}}</span>
                                        </template>
                                        <template v-else-if="value.sex == 2">
                                            <img src="/avatarMale2.png" alt="User Image"> <b
                                            class="users-list-name mt-2">@{{value.fullname}}</b> <span class="users-list-date">@{{value.desJob}}</span>
                                        </template>
                                        <template v-else-if="value.sex == 3">
                                            <img src="/avatarMale3.png" alt="User Image"> <b
                                            class="users-list-name mt-2">@{{value.fullname}}</b> <span class="users-list-date">@{{value.desJob}}</span>
                                        </template>
                                        <template v-else >
                                            <img src="/avatarFemale.png" alt="User Image"> <b
                                            class="users-list-name mt-2">@{{value.fullname}}</b> <span class="users-list-date">@{{value.desJob}}</span>
                                        </template>
                                    </li>
                                </template>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /.row -->
            </div>


            <!-- row roadmap -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="height: auto;">
                            <div class="card-header text-center">
                                <h1 style="color:white;"><b>Roadmap</b></h1>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="container">
                                    <template v-for="(value, key) in roadmap">
                                        <div class="timeline">
                                            <!-- Thang -->
                                            <div class="timeline-row">
                                                <div v-if="value.month == 0">

                                                </div>

                                                <div v-else>
                                                    <div class="alert text-center"
                                                        style="background-color: rgb(8, 8, 34) ;border-radius: 20px;">
                                                        <h1 class="m-0"> Month @{{ value.month }}</h1>
                                                    </div>
                                                </div>

                                            </div>


                                            <!-- Content -->
                                            <div class="timeline-row">
                                                <div class="timeline-time">
                                                    @{{ formatDate(value.created_at) }}
                                                </div>
                                                <div class="alert " style="border-radius: 30px;padding: 20px;background-color:rgba(0, 0, 0, 0.329);">
                                                    <div class="d-flex flex-row"> <h4 style="font-weight: 800 ;">@{{ value.week }}</h4></div>
                                                    <div class=" d-flex flex-column">
                                                        <h4><i class="fa-solid fa-check"  type="submit"
                                                            v-if="value.is_line_one" ></i> @{{ value.line_one }}
                                                            <i class="fa-solid fa-xmark"    type="submit"
                                                            v-else ></i> @{{ value.line_one }}
                                                        </h4>
                                                        <h4><i class="fa-solid fa-check "   type="submit"
                                                            v-if="value.is_line_two" ></i> @{{ value.line_two }}
                                                            <i class="fa-solid fa-xmark "   type="submit"
                                                            v-else ></i> @{{ value.line_two }}
                                                        </h4>
                                                        <h4><i class="fa-solid fa-check "  type="submit"
                                                            v-if="value.is_line_three" ></i> @{{ value.line_three }}
                                                            <i class="fa-solid fa-xmark "  type="submit"
                                                            v-else ></i> @{{ value.line_three }}
                                                        </h4>
                                                        <h4><i class="fa-solid fa-check "  type="submit"  v-on:click="doneline4(value.id)"
                                                            v-if="value.is_line_four" ></i> @{{ value.line_four }}
                                                            <i class="fa-solid fa-xmark "  type="submit"  v-on:click="doneline4(value.id)"
                                                            v-else ></i> @{{ value.line_four }}
                                                        </h4>
                                                        <h4><i class="fa-solid fa-check "  type="submit"  v-on:click="doneline5(value.id)"
                                                            v-if="value.is_line_five" ></i> @{{ value.line_five }}
                                                            <i class="fa-solid fa-xmark "  type="submit"  v-on:click="doneline5(value.id)"
                                                            v-else ></i> @{{ value.line_five }}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </template>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>

        <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header text-center">
                        <h1 style="color:white;"><b>Tokenomics</b></h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="container">
                            <div class="alert alert-dark">
                                <template v-for="(value, key) in loadInfoToken">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img v-bind:src="value.img"  class="img-fluid"
                                                style="border-radius: 20px">
                                        </div>
                                        <div class="col-md-6">
                                                <div class="alert alert-light" style="border-radius: 20px">
                                                    <b> @{{ value.writer }}</b>
                                                    <h2 class="mt-5"><b> @{{ value.content }}</b></h2>
                                                </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-footer -->
                </div>
                <!--/.card -->
            </div>
            <!-- /.row -->
        </div>


        <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header text-center">
                        <h1 style="color:white;"><b>Partnership</b></h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0" style="padding: 20px">
                            <ul class="users-list clearfix d-flex justify-content-center">
                                <li>
                                    <img class="img-fluid" style="height: 70px;width:70px" src="/dogechain/img/CoinGecko.png" alt="User Image"> <a href="https://www.coingecko.com" target="_blank">
                                        <h4 class="mt-3 h4">
                                            <b style="color: white"> CoinGeck </b>
                                        </h4>
                                    </a>
                                </li>
                                <li>
                                    <img class="img-fluid" style="height: 70px;width:70px" src="/dogechain/img/DogechainLogo.png" alt="User Image"> <a href="https://dogechain.dog/?fbclid=IwAR02yVYx1phBFSe8cTCq_GtjMzzdKrxj-uT8cMKit6C83jLTXYkcDoWbB14" target="_blank">
                                        <h4 class="mt-3 h4" >
                                            <b style="color: white"> DogeChain </b>
                                        </h4>
                                    </a>
                                </li>
                                <li>
                                    <img class="img-fluid" style="height: 70px;width:70px" src="/dogechain/img/MarketCap.png" alt="User Image"> <a href="" target="_blank">
                                        <h4 class="mt-3 h4">
                                            <b style="color: white"> Coin MarketCap </b>
                                        </h4>
                                    </a>
                                </li>
                            </ul>

                        <!-- /.users-list -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!--/.card -->
            </div>
            <!-- /.row -->
        </div>

        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
