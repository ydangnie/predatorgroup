<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {

        return view('posts.create');
    }
    public function store(StorePost $request)
    {
        //xử lý lưu file
        if($request->hasFile('thumbnail')){
            $file = $request->file('thumbnail');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = $file->storeAs('images', $fileName);

        }

        DB::table('posts')->insert([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'created_at' => now(),
            'updated_at' => now(),
            'thumbnail' => $path
            
        ]);
        return redirect()->route('posts.index')
            ->with('message', 'Thêm bài viết thành công');
    }
    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        if (!$post) {
            abort(404);
        }
        return view('posts.edit', ['posts' => $post]);
    }
    public function update(StorePost $request, $id)
    {
        DB::table('posts')->where('id', $id)->update(
            [
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'updated_at' => now()
            ]);
            return redirect()->route('posts.index')->with('message', 'Cập nhật thành công');
    }
    public function delete($id){
        DB::table('posts')->where('id',$id)->delete();
        return back()
        ->with('message', 'Xóa thành công');
    }
}
