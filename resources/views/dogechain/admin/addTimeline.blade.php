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
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="height: auto;">
              <div class="card-header">
                <h3 class="card-title" style="color:yellow;">Add Roadmap</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="chart">
                      <div class="alert alert"
                        style="background-color:#5c3f3f  ; border-radius: 20px;padding:  40px;">
                        <div class="container">
                            <div class="row">
                                <label for="str"> Tháng </label>
                                <input type="number" v-model="timeline.month" class="form-control" id="str" placeholder="Nhập vào số tháng">
                            </div>
                            <div class="row">
                                <p><small style="color: yellow"><i class="fa-sharp fa-solid fa-triangle-exclamation"></i> Lưu ý! Nếu đang trong tháng thì vui lòng để trống trường này  </small></p>
                              </div>
                            <div class="row mt-3 ">
                            <label for="strC"> Title </label>
                            <input class="form-control" v-model="timeline.week"  id="strC" placeholder="Nhập vào Title" >
                          </div>
                          <div class="row mt-5 ">
                            <label for="strC"> Dòng 1 </label>
                            <textarea class="form-control" v-model="timeline.line_one"  id="strC"></textarea>
                          </div>
                          <div class="row mt-5 ">
                            <label for="strC"> Dòng 2 </label>
                            <textarea class="form-control" v-model="timeline.line_two"  id="strC"></textarea>
                          </div>
                          <div class="row mt-5 ">
                            <label for="strC"> Dòng 3 </label>
                            <textarea class="form-control" v-model="timeline.line_three"  id="strC"></textarea>
                          </div>
                          <div class="row mt-5 ">
                            <label for="strC"> Dòng 4 </label>
                            <textarea class="form-control" v-model="timeline.line_four"  id="strC"></textarea>
                          </div>
                          <div class="row mt-5 ">
                            <label for="strC"> Dòng 5 </label>
                            <textarea class="form-control" v-model="timeline.line_five"  id="strC"></textarea>
                          </div>
                          <div class="row mt-5 ">
                             <button class="btn btn-success"  v-on:click=" postTimeline()"><i class="fa-solid fa-plus"></i> ADD A RoadMap</button>
                             <button class="btn btn-warning ml-5"  v-on:click=" resetTimeline()"><i class="fa-solid fa-rotate-right"></i> Clear</button>
                          </div>
                          <div class="row mt-5">
                            <p><small style="color: yellow"><i class="fa-sharp fa-solid fa-triangle-exclamation"></i> Lưu ý! Chỉ có tối đa 3 dòng nên là hạn chế nội dung sao cho vừa 3 dòng nha! </small></p>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ./card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        <div class="container">
            <div class="row mt-5">
              <div class="col-md-12">
                <div class="card" style="height: auto;">
                  <div class="card-header">
                    <h3 class="card-title" style="color:yellow;">Roadmap</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="container">
                    <template v-for="(value, key) in roadmapData">
                        <div class="timeline">
                            <button class="btn btn-success  mb-5" v-on:click=" editRoadMap(value.id)" data-toggle="modal" data-target="#updateTime" >Edit</button>
                            <button class="btn btn-danger  mb-5" v-on:click=" xoaRoadmap(value.id)" >Delete</button>
                            <!-- Thang -->
                            <div class="timeline-row">
                                <div v-if="value.month == 0">

                                </div>

                                <div v-else>
                                    <div class="alert text-center" style="background-color: rgb(8, 8, 34) ;border-radius: 20px;" >
                                        <h1 class="m-0"> Month @{{value.month}}</h1>
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
                                        <h4><i class="fa-solid fa-check"  type="submit" v-on:click="doneline1(value.id)"
                                            v-if="value.is_line_one" ></i> @{{ value.line_one }}
                                            <i class="fa-solid fa-xmark"    type="submit"  v-on:click="doneline1(value.id)"
                                            v-else ></i> @{{ value.line_one }}
                                        </h4>
                                        <h4><i class="fa-solid fa-check "   type="submit"  v-on:click="doneline2(value.id)"
                                            v-if="value.is_line_two" ></i> @{{ value.line_two }}
                                            <i class="fa-solid fa-xmark "   type="submit"  v-on:click="doneline2(value.id)"
                                            v-else ></i> @{{ value.line_two }}
                                        </h4>
                                        <h4><i class="fa-solid fa-check "  type="submit"  v-on:click="doneline3(value.id)"
                                            v-if="value.is_line_three" ></i> @{{ value.line_three }}
                                            <i class="fa-solid fa-xmark "  type="submit"  v-on:click="doneline3(value.id)"
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
                    </template>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
          </div>


    </section>
    @include('dogechain.admin.formUpdateTimeline')

</div>
@else
@include('dogechain.admin.errors')
@endif
@endsection
