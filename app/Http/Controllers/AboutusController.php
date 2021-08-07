<?php

namespace App\Http\Controllers;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $data = Aboutus::first();
        return view('admin.pages.aboutus', compact('data'));
    }

    public function save(Request $request)
    {
        $countData = Aboutus::count();

        if($countData == 0)
        {
            $data = new Aboutus();

            $data->heading = $request->heading;
            $data->meta_desc = $request->meta_desc;
            $data->text = $request->text;

            if($request->file('head_img'))
            {
                $image = $request->file('head_img');
                $imageName = time().'.'.$image->extension();  
                $post = $image->move(public_path('images/aboutus'), $imageName);

                $data->head_img = $imageName;
            }

            $data->c_one_head = $request->c_one_head;
            $data->c_one_text = $request->c_one_text;
            $data->c_two_head = $request->c_two_head;
            $data->c_two_text = $request->c_two_text;

            $data->c_three_head = $request->c_three_head;
            $data->c_three_text = $request->c_three_text;
            $data->c_four_head = $request->c_four_head;
            $data->c_four_text = $request->c_four_text;


            $save = $data->save();
        }
        else
        {
            $firstData = Aboutus::first();
            $data = Aboutus::find($firstData->id);
            
            $data->heading = $request->heading;
            $data->meta_desc = $request->meta_desc;
            $data->text = $request->text;

            if($request->file('head_img'))
            {
                $image = $request->file('head_img');
                $imageName = time().'.'.$image->extension();  
                $post = $image->move(public_path('images/aboutus'), $imageName);

                $data->head_img = $imageName;
            }
            else
            {
                $data->head_img = $data->head_img;
            }

            $data->c_one_head = $request->c_one_head;
            $data->c_one_text = $request->c_one_text;
            $data->c_two_head = $request->c_two_head;
            $data->c_two_text = $request->c_two_text;

            $data->c_three_head = $request->c_three_head;
            $data->c_three_text = $request->c_three_text;
            $data->c_four_head = $request->c_four_head;
            $data->c_four_text = $request->c_four_text;


            $save = $data->save();

        }
        

        if($save)
        {
            return back()->with('success', 'Setting Changes');
        }
    }
}
