@extends('layout.app');
@section('title') Create @endsection
@section('content')
    <form method="POST" action="{{route('posts.store')}}" class="mt-4">
        @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
        <label for="exampleFormControlInput1" class="form-label">POST Creator</label>
    <select name="post_creator" class="form-select" aria-label="Default select example">
        <option selected>Creators menu</option>
        <option value="1">ahmad</option>
        <option value="2">omar</option>
        <option value="3">ali</option>
    </select>

        <br>
        <button  class="btn btn-success">Submit</button>
    </form>


@endsection
