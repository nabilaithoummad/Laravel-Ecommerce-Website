<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;
use App\Models\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ProductModel::select('*')->get();
        $category = Category::select('category_name')->get();
        return view('admin2.crud.product',['data'=>$data,'category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = Category::select('category_name')->get();
        return view('admin2.crud.createProduct',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datatoinsert['title']=$request->title;
        $datatoinsert['description']=$request->description;
        $datatoinsert['quantity']=$request->quantity;
        $datatoinsert['category']=$request->category;
        $datatoinsert['price']=$request->price;
        $datatoinsert['discount_price']=$request->discount_price;

        $image=$request->image;
        $extension=strtolower($image->extension());
        $imagename=time().rand(1,10000).".".$extension;
        $image->move("admin2/products_images",$imagename);
        $datatoinsert['image']=$imagename;
        ProductModel::create($datatoinsert);

        return redirect()->route('product.index')->with('message','product added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, Request $request)
    {
        $data = ProductModel::select('*')->where(['title'=>$request->title])->get();
        return view('admin2.crud.product',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $cate = Category::select('category_name')->get();
        $data = ProductModel::select('*')->find($id);
        return view('admin2.crud.editproduct',['data'=>$data,'cate'=>$cate,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $datatoupdate['title']=$request->title;
        $datatoupdate['description']=$request->description;
        $datatoupdate['quantity']=$request->quantity;
        $datatoupdate['category']=$request->category;
        $datatoupdate['price']=$request->price;
        $datatoupdate['discount_price']=$request->discount_price;

        if($request->image !== null){
            $image=$request->image;
            $extension=strtolower($image->extension());
            $imagename=time().rand(1,10000).".".$extension;
            $image->move("admin2/products_images",$imagename);
            $datatoupdate['image']=$imagename;
        }

        ProductModel::where(['id'=>$id])->update($datatoupdate);
        return redirect()->route('product.index')->with('message','product updated successfuly');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        ProductModel::where(['id'=>$id])->delete();
        return redirect()->route('product.index')->with('message','product deleted successfuly');
    }
}
