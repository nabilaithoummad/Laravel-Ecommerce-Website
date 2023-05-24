<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Category::select('*')->get();
        return view('admin2.crud.category',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datatoinsert['category_name']=$request->category_name;

        
        $image=$request->image;
        $extension=strtolower($image->extension());
        $imagename=time().rand(1,10000).".".$extension;
        $image->move("admin2/categories_images",$imagename);
        $datatoinsert['image']=$imagename;


        Category::create($datatoinsert);
        return redirect()->route('category.index')->with('message','category added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Category::select('*')->find($id);

        return view('admin2.crud.editcategory',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datatoupdate['category_name']=$request->category_name;

        if($request->exists('image')){
            $image=$request->image;
            $extension=strtolower($image->extension());
            $imagename=time().rand(1,10000).".".$extension;
            $image->move("admin2/categories_images",$imagename);
            $datatoupdate['image']=$imagename;
        }
        
        Category::where(['id'=>$id])->update($datatoupdate);
        return redirect()->route('category.index')->with('message','category updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Category::where(['id'=>$id])->delete();
        return redirect()->route('category.index')->with('message','category deleted successfuly');
    }
}




