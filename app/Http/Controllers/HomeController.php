<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contactus;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $set = Setting::first();

        if($request->has('search'))
        {
            $search = $request->search;
            $post = Post::where('title', 'like', '%'.$search.'%')->orderby('id', 'desc')->get();
        }
        else
        {
            
            $fp_blog_limit = $set->fp_blog_limit;
            $post = Post::where('status', 1)->orderby('id', 'desc')->take($fp_blog_limit)->get();            
        }

        $fp_slider_limit = $set->fp_slider_limit;
        $slider = Post::where('status', 1)->orderby('id', 'desc')->take($fp_slider_limit)->get();
        return view('welcome', compact('post', 'slider'));
    }

    public function detail(Request $request, $permalink)
    {
        // Post::find('permalink', $permalink)->increment('views');
        $detail = Post::where('permalink', $permalink)->first();
        Post::find($detail->id)->increment('views');
        return view('front.detail', compact('detail'));
    }

    public function about()
    {
        $about = Aboutus::first();
        $url = Setting::first();
        return view('front.about', compact('about', 'url'));
    }

    public function blog()
    {
        $post = Post::where('status', 1)->orderby('id', 'desc')->get();   
        return view('front.blog', compact('post'));
    }

    public function contact()
    {
        $contact = Contactus::first();   
        return view('front.contact', compact('contact'));
    }

    public function save_message(Request $request)
    {
        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;

        $data = $message->save();

        return back()->with('success', 'Message sent successfully!!');
    }

    public function save_comment(Request $request, $id)
    {
        $setting = Setting::first();
        $com_auto = $setting->comment_auto_appr;

        $request->validate([
            'comment' => 'required',
        ]);

        $data = new Comment();

        $data->user_id = $request->user()->id;
        $data->post_id = $id;
        $data->comment = $request->comment;

        if($com_auto == 1)
        {
            $data->status = 1;
        }  
        else
        {
            $data->status = 0;
        }
        

        $save = $data->save();

        if($save)
        {
            return back()->with('success', 'Your Comment Has Been Submitted!!');
        }
    }

    public function category($slug)
    {
        
        if($slug)
        {
            $slg = Category::where('slug', $slug)->first();
            $id = $slg->id;
            $post = Post::where('category_id', $id)->orderby('id', 'desc')->get();
        }

        return view('front.category', compact('post'));
    }

}
