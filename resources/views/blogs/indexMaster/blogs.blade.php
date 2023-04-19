@extends('blogs.indexMaster.index')
@section('content')
    <div id="home" class="row">
        <div class="col">
            <template v-for="(v, k) in dataPost">
                <div v-if="v.id_people == {{ $id_people_me }}">
               @include('blogs.indexMaster.classify.MyPost')
                </div>
                <div v-else>
             @include('blogs.indexMaster.classify.YourPost')
                </div>
            </template>
        </div>
    </div>
@endsection
@section('js')
    <script src="/blog/js/home.js"></script>
@endsection
