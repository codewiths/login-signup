<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    //
    function addPost(Request $req){
        $post = new Post;
        $post->title = $req->title;
        $post->description = $req->description;
        $post->save();
        $req->session()->put('title', $post['title']);
        $req->session()->put('description', $post['description']);
        return redirect('posted');
    }
    function store(Request $req){
        Post::create($req->only(['title', 'description']));
    }
    public function destroy($id)  
    { 
       DB::delete('DELETE FROM posts WHERE id = ?', [$id]); 
       echo ("User Record deleted successfully."); 
       return redirect('show_posts'); 
    }
    function showPosts(){
        $posts = Post::paginate(10);
        return view('show_posts', ['posts'=>$posts]);
    }
    public function showpost($id) {
        $posts = DB::select('select * from posts where id = ?',[$id]);
        return view('edit_post',['posts'=>$posts]);
    }

    public function edit(Request $request,$id) {
        $title = $request->input('title');
        $description = $request->input('description');
        DB::update('update posts set title = ?,description=? where id = ?',[$title,$description,$id]);
        return redirect('/show_posts');
    }
}
