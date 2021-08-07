<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $cat = Category::orderby('id', 'desc')->get();
        return view('admin.category.index', compact('cat'));
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function save(Request $request)
    {
        // return $request->input();
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required|unique:categories',
            'img' => 'required',
        ]);

        $cat = new Category();

        if($request->hasFile('img'))
        {
            $image = $request->file('img');
            // $reImage1 = time().'.'.$image->getClientOriginalExtension();
            // $dest = public_path('/images');
            // $image->move($dest, $reImage1);

            $imageName = time().'.'.$image->extension();  
            $category = $image->move(public_path('images/category'), $imageName);

            $cat->img = $imageName;
        
        }
        else{
            $cat->img = 1;
        }


        $cat->name = $request->name;
        $cat->description = $request->description;
        $cat->slug = $request->slug;
        $cat->status = '1';

        $save = $cat->save();

        return redirect()->back()->with('success', 'Category has been added');

    }

    public function edit($id)
    {
        $data = Category::find($id);
        return view('admin.category.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {

        $data = Category::find($id);

        $request->validate([
            'slug' => [Rule::unique('categories')->ignore($data->id)],
        ]);

        if($request->hasFile('img'))
        {
            $image = $request->file('img');
            $imageName = time().'.'.$image->extension();  
            $category = $image->move(public_path('images/category'), $imageName);

            $data->img = $imageName;
        
        }

        $data->name = $request->name;
        $data->description = $request->description;
        $data->slug = $request->slug;
        $data->img = $data->img;

        $save = $data->save();

        return back()->with('success', 'Data has been edited');
    }

    public function status(Request $request, $id, $status)
    {
        $data = Category::find($id);

        $data->status = $status;
        $data->save();
        return back();
    }

    public function destroy($id)
    {
        $cat = Category::find($id);

        $data = $cat->delete();

        if($data)
        {
            return back()->with('success', 'Category Deleted');
        }
    }
}
