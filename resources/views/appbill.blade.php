<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
    @toastr_css
    <title>App Bill Cafe</title>
</head>
<body style="background-image:url('https://scontent.fhan4-1.fna.fbcdn.net/v/t39.30808-6/272153452_1388565151612849_1834027980322537450_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=174925&_nc_ohc=_88ZUd7nrugAX-uu4Cp&_nc_oc=AQnO4AnvlY9nceUuUVRpftXKzCbh0wlZU6vPdARjHIpi67vZiEmSK40UpCZ9-OMoXuY&tn=5ucONLpWweCdqfy5&_nc_ht=scontent.fhan4-1.fna&oh=00_AT93wmVK2d1KXkFxDmqcr0GB3214skQ9TUKgA5kG7rSibA&oe=62FA5C85') ;background-size:auto">
    <div id="bill">
        <div class="container mt-5">
           <div class="alert text-center" style="background-color: rgba(255, 174, 0, 0.726)"><h1><b style="color:red"> App Bill</b></h1></div>
            <div class="alert " style="background-color: rgba(0, 60, 255, 0.664)">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="background-color:rgba(61, 216, 14, 0.301);">
                            <div class="card-header">
                                <div class="card-tile">
                                    Form dien thong tin
                                </div>
                            </div>
                            <div class="card-body">
                                 <div class="title">
                                    name:
                                 </div>
                                 <input  v-model="bill.name" type="text" class="form-control" required>
                                 <div class="title">
                                    gia ca:
                                 </div>
                                 <input type="number" class="form-control" placeholder="gia ca phai > 0 " required v-model="bill.price">
                                 <div class="title">
                                    so luong:
                                 </div>
                                 <input v-model="bill.so_luong" type="number" class="form-control" placeholder="so luong > 0" required>
                            </div>
                            <div class="card-footer">
                            <button class="btn btn-info" type="submit" v-on:click="create()" > Submit </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ml-5">
                        <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">So luong</th>
                                <th scope="col">don gia</th>
                              </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, key) in billData">
                              <tr>
                                <th >@{{key+1}}</th>
                                <td >@{{value.name}}</td>
                                <td >@{{value.price}}</td>
                                <td >@{{value.so_luong}}</td>
                              </tr>
                                </template>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/bill/bill.js"></script>
@jquery
@toastr_js
@toastr_render
</html>
