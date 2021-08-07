<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::orderby('id', 'desc')->get();
        return view('admin.post.index', compact('post'));
    }

    public function add()
    {
        $cat = Category::where('status', 1)->get();
        return view('admin.post.add', compact('cat'));
    }

    public function save(Request $request)
    {
        // return $request->input();

        $data = new Post();

        if($request->file('img'))
        {
            $image = $request->file('img');
            $imageName = time().'.'.$image->extension();  
            $post = $image->move(public_path('images/post'), $imageName);

            $data->thumb = $imageName;
        }
        else
        {
            $data->thumb = '0';
        }
        
        $data->category_id = $request->category_id;
        $data->title =  $request->title;
        $data->meta_desc =  $request->meta_desc;
        $data->permalink =  $request->permalink;
        $data->body =  $request->body;
        

        $data->user_id = '0';
        $data->views = '0';
        $data->status = '1';

        $data->save();

        return back()->with('success', 'post added');


    }

    public function edit($id)
    {
        $data = post::find($id);
        $cat = Category::all();
        return view('admin.post.edit', compact('data', 'cat'));
    }


    public function update(Request $request, $id)
    {

        $data = Post::find($id);

        $request->validate([
            'permalink' => [Rule::unique('posts')->ignore($data->id)],
        ]);

        if($request->file('img'))
        {
            $image = $request->file('img');
            $imageName = time().'.'.$image->extension();  
            $post = $image->move(public_path('images/post'), $imageName);

            $data->thumb = $imageName;
        }
        else
        {
            $data->thumb = $data->thumb;
        }
        
        $data->category_id = $request->category_id;
        $data->title =  $request->title;
        $data->meta_desc =  $request->meta_desc;
        $data->permalink =  $request->permalink;
        $data->body =  $request->body;
        
        $data->user_id = $data->user_id;
        $data->views = $data->views;
        $data->status = $data->status;

        $data->save();

        return back()->with('success', 'Post has been edited');
    }

    public function status(Request $request, $id, $status)
    {
        $data = Post::find($id);

        $data->status = $status;
        $data->save();
        return back();
    }

    public function delete($id)
    {
        $data = Post::find($id);
        $data->delete();

        return back();
    }
}
