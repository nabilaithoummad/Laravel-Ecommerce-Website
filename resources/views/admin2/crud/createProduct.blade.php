@extends('admin2.home')
@section('content')
<div style="margin: 0px;width:100%;    padding-top: 50px;">


        <h1 style="text-align: center;font-size:40px;margin-bottom:30px;margin-top:13px">Add Product</h1>



        <form action="{{route('product.store')}}" method="POST" enctype= "multipart/form-data" class="w-100 p-3 mx-auto" >
            @csrf

            <table class="w-100">
                <tr class="w-100">
                    <td class="w-50 pe-2">
                        <div class="mb-3">
                            <label class="label-control">Title</label>
                            <input class="form-control" type="text" name="title" />
                        </div>
                    </td>
                    <td class="w-50 ps-2">
                        <div class="mb-3">
                            <label class="label-control">Description</label>
                            <input class="form-control" type="text" name="description" />
                        </div>
                    </td>
                </tr>
                <tr class="w-100">
                    <td class="w-50 pe-2">
                        <div class="mb-3">
                            <label class="label-control">Quantity</label>
                            <input class="form-control" type="number" min="0" name="quantity" />
                        </div>
                    </td>
                    <td class="w-50 ps-2">
                        <div class="mb-3">
                            <label class="label-control">Category</label>
                            <select class="form-select" name="category" aria-label="Default select example">
                                <option selected>chose category</option>
                                @if (!empty($data))
                                    @foreach ($data as $info)
                                        <option value="{{$info->category_name}}">{{$info->category_name}}</option>
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
                            <input class="form-control" type="number" min="0" name="discount_price" />
                        </div>
                    </td>
                    <td class="w-50 ps-2">
                        <div class="mb-3">
                            <label class="label-control">Image</label>
                            <input class="form-control" type="file" name="image" />
                        </div>
                    </td>
                </tr>
                <tr class="w-100">
                    <td colspan="1" class="w-50 pe-2">
                        <div class="mb-3">
                            <label class="label-control">Price</label>
                            <input class="form-control" type="number" min="0" name="price" />
                        </div>
                    </td>
                </tr>
                <tr class="w-100">
                    <td colspan="2" >
                        <div class="mt-4 d-flex flex-row justify-content-center">
                            <button class="btn btn-primary w-25 py-2" type="submit">Add</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>


</div>
@endsection
