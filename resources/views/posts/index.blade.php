@extends('layout.app');
@section('title') Index @endsection
@section('content')
<div class="container mt-4">
    <div class="text-center">
        <a  href="{{route('posts.create')}}" <button type="button" class="btn btn-success">Create posts</button> </a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $posts)
            <tr>
                <th scope="row">{{$posts['id']}}</th>
                <td>{{$posts['title']}}</td>
                <td>{{$posts['posted_by']}}</td>
                <td>{{$posts['created_at']}}</td>
                <td>
                    <a href="{{route('posts.show',$posts['id'])}}"   <button type="button" class="btn btn-info">View</button> </a>
                    <a href="{{route('posts.edit',$posts['id'])}}"  <button type="button" class="btn btn-primary">Edit</button> </a>
                    <form  style="display: inline" action="{{route('posts.destroy',$posts['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                          <button type="button" class="btn btn-danger">Delete</button>
                    </form>


                </td>
            </tr>

        @endforeach


        </tbody>
    </table>
@endsection
