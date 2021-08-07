<?php

namespace App\Http\Controllers;
use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {
        $data = Contactus::first();
        return view('admin.pages.contactus', compact('data'));
    }

    public function save(Request $request)
    {
        $countData = Contactus::count();

        if($countData == 0)
        {
            $data = new Contactus();

            $data->heading = $request->heading;
            $data->meta_desc = $request->meta_desc;

            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->address = $request->address;
           
            $data->map = $request->map;

            $save = $data->save();
        }
        else
        {
            $firstData = Contactus::first();
            $data = Contactus::find($firstData->id);
            
            $data->heading = $request->heading;
            $data->meta_desc = $request->meta_desc;

            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->address = $request->address;

            $data->map = $request->map;

            $save = $data->save();
        }
        

        if($save)
        {
            return back()->with('success', 'Changes Apply');
        }
    }
}
