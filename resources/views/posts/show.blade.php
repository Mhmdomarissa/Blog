    @extends('layout.app');
@section('title')show @endsection
    @section('content')

    <div class="card mt-4">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title : {{$post['title']}}</h5>
            <p class="card-text">Description  : {{$post['description']}} </p>
        </div>
    </div><div class="card mt-4">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name : Omar</h5>
            <p class="card-text">Email : omarissa@gmail.com</p>
            <a >Created at : Thursday 25th of December 1975 02:15:16 PM</a>
        </div>
    </div>
    @endsection



