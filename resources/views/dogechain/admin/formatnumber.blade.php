@extends('dogechain.admin.indexAdmin')
@section('indexSetting')
@if (Auth::guard('AdminSndg')->check())
<div class="content-wrapper" id="editAdmin">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Form information </h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row mt-5">
            <template v-for="(value, key) in thongso">
            <div class="col-md-12">
              <div class="card card-info" style="height: auto;">
                <div class="card-header">
                  <h3 class="card-title" style="color:yellow;"> <i class="fa-solid fa-hashtag"></i> Edit Number</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="background-color:rgba(49, 49, 49, 0.411) ">
                    <div class="row">
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
                    </div>
                </div>
                <!-- ./card-body -->
                <div class="card-footer text-right">
                    <button v-on:click="editNumber(value.id)" class="btn btn-success" data-toggle="modal" data-target="#updateNumber" ><i class="fa-solid fa-hashtag"></i> Change Number</button>
                </div>
              </div>
            </template>
              <!-- /.card -->
            </div>
          </div>
    </section>

    @include('dogechain.admin.editNumberForm')
</div>
@else
@include('dogechain.admin.errors')
@endif

@endsection
