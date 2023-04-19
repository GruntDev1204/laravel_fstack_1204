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
        <!-- /.row  introduce-->
        <div class="row mt-5">
            <div class="col-md-12">
                <template v-for="(value, key) in cauchuyen">
              <div class="card" style="height: auto;">
                <div class="card-header">
                  <h3 class="card-title" style="color:yellow;">Story :
                        @{{value.title}}
                </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                 <div class="container">
                    <div class="alert alert-info">
                          @{{value.content}}
                    </div>
                 </div>
                </div>
                <!-- ./card-body -->

                <div class="card-footer text-right">
                     <button class="btn btn-success" v-on:click="editCauchuyen(value.id)"  data-toggle="modal" data-target="#updateStr">Edit <i class="fa-solid fa-file-pen"></i></button>
                </div>
              </div>
            </template>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>

    </section>
    @include('dogechain.admin.editStrForm')
</div>
@endif
@endsection
