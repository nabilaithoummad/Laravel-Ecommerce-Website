@extends('admin2.home')
@section('content')
<div style="margin: 0px;width:100%;padding-top: 50px;">


        <h1 style="text-align: center;font-size:40px;margin-bottom:30px;margin-top:13px">Edit Product</h1>



        <form action="{{route('product.update',$data->id)}}" method="POST" enctype= "multipart/form-data" class="w-100 p-3 mx-auto" >
            @csrf
            @method('PATCH')

            <table class="w-100">
                <tr class="w-100">
                    <td class="w-50 pe-2">
                        <div class="mb-3">
                            <label class="label-control">Title</label>
                            <input class="form-control" type="text" name="title" value="{{$data->title}}"/>
                        </div>
                    </td>
                    <td class="w-50 ps-2">
                        <div class="mb-3">
                            <label class="label-control">Description</label>
                            <input class="form-control" type="text" name="description" value="{{$data->description}}"/>
                        </div>
                    </td>
                </tr>
                <tr class="w-100">
                    <td class="w-50 pe-2">
                        <div class="mb-3">
                            <label class="label-control">Quantity</label>
                            <input class="form-control" type="number" min="0" name="quantity" value="{{$data->quantity}}"/>
                        </div>
                    </td>
                    <td class="w-50 ps-2">
                        <div class="mb-3">
                            <label class="label-control">Category</label>
                            <select class="form-select" name="category" aria-label="Default select example">
                                <option value="{{$data->category}}" selected>{{$data->category}}</option>
                                @if (!empty($cate))
                                    @foreach ($cate as $category)
                                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach
                                @else

                                @endif
                            </select>
                        </div>
                    </td>
                </tr>
                <tr class="w-100">
                    <td class="w-50 pe-2">
                        <div class="mb-3">
                            <label class="label-control">Discount Price</label>
                            <input class="form-control" type="number" min="0" name="discount_price" value="{{$data->discount_price}}"/>
                        </div>
                    </td>
                    <td class="w-50 ps-2">
                        <div class="mb-3">
                            <label class="label-control">Change Product Image</label>
                            <input class="form-control" type="file" name="image" />
                        </div>
                    </td>
                </tr>
                <tr class="w-100">
                    <td colspan="1" class="w-50 pe-2">
                        <div class="mb-3">
                            <label class="label-control">Price</label>
                            <input class="form-control" type="number" min="0" name="price" value="{{$data->price}}" />
                        </div>
                    </td>
                </tr>
                <tr class="w-100">
                    <td colspan="2" >
                        <div class="mt-4 d-flex flex-row justify-content-center">
                            <button class="btn btn-primary w-25 py-2" type="submit">Edit</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>


</div>
@endsection
