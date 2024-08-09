<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
          ['id' => 1 , 'title'=>'PHP','posted_by'=>'AHMED','created_at'=>'2022-01-10 09:00:00'],
            ['id' => 2 , 'title'=>'java','posted_by'=>'ali','created_at'=>'2012-01-10 09:00:00'],
            ['id' => 3 , 'title'=>'CSS','posted_by'=>'omar','created_at'=>'2009-01-10 09:00:00'],
            ['id' => 4 , 'title'=>'go','posted_by'=>'khaled','created_at'=>'2011-01-10 09:00:00']
        ];
        return view('posts.index',['posts'=>$allPosts]);
    }
    public function show($postId)
    {
        $singlePost =
            ['id' => 1 , 'title'=>'java','description'=>'java is a cool language','posted_by'=>'AHMED','created_at'=>'2022-01-10 09:00:00']
        ;
        return view('posts.show',['post'=>$singlePost]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
//        $request = request();
//        dd($request->all());

        $data = request()->all();
        $title = $data['title'];
        $description = $data['description'];
        $post_creator = $data['post_creator'];
//        return $data ;
//        dd($data , $post_creator , $title , $description);
        return to_route('posts.index');
    }
    public function edit(){
        return view('posts.edit');
    }
    public function update()
    {
//        $request = request();
//        dd($request->all());

        $data = request()->all();
        $title = $data['title'];
        $description = $data['description'];
        $post_creator = $data['post_creator'];
//        return $data ;
      //  dd($data , $post_creator , $title , $description);
        return to_route('posts.show',1);
    }
}
