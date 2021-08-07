<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $data = Setting::first();
        return view('admin.setting', compact('data'));
    }

    public function save(Request $request)
    {
        $countData = Setting::count();

        if($countData == 0)
        {
            $data = new Setting();

            $data->logo_txt = $request->logo_txt;
            $data->blog_name = $request->blog_name;
            $data->meta_desc = $request->meta_desc;

            $data->fp_blog_limit = $request->fp_blog_limit;
            $data->fp_slider_limit = $request->fp_slider_limit;
            $data->rec_post_limit = $request->rec_post_limit;
            $data->pop_post_limit = $request->pop_post_limit;
            $data->cat_limit = $request->cat_limit;

            $data->comment = $request->comment;
            $data->comment_auto_appr = $request->comment_auto_appr;

            $data->fb_url = $request->fb_url;
            $data->inst_url = $request->inst_url;
            $data->twit_url = $request->twit_url;            

            $save = $data->save();
        }
        else
        {
            $firstData = Setting::first();
            $data = Setting::find($firstData->id);
            
            $data->logo_txt = $request->logo_txt;
            $data->blog_name = $request->blog_name;
            $data->meta_desc = $request->meta_desc;

            $data->fp_blog_limit = $request->fp_blog_limit;
            $data->fp_slider_limit = $request->fp_slider_limit;
            $data->rec_post_limit = $request->rec_post_limit;
            $data->pop_post_limit = $request->pop_post_limit;
            $data->cat_limit = $request->cat_limit;

            $data->comment = $request->comment;
            $data->comment_auto_appr = $request->comment_auto_appr;

            $data->fb_url = $request->fb_url;
            $data->inst_url = $request->inst_url;
            $data->twit_url = $request->twit_url;           

            $save = $data->save();
        }
        

        if($save)
        {
            return back()->with('success', 'Setting Changes');
        }
    }
}
