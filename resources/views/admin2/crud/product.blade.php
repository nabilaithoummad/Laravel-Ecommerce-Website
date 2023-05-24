@extends('admin2.home')
@section('content')
<div style="margin: 0px;width:100%;overflow-x:scroll;padding-top: 50px;">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif


        <h1 style="text-align: center;font-size:40px;margin-bottom:30px;margin-top:13px">Products</h1>
        <div class="d-flex flex-row justify-content-center">
            <a href="{{route('product.create')}}" class="btn btn-primary">Add New Product<i class="bi bi-plus-circle-dotted ms-2"></i></a>
        </div>
        <form id="formsearch" action="{{route('product.show',1)}}" method="GET" class="w-100 pb-0 pt-4 d-flex flex-row flex-wrap justify-content-center">

            @csrf

            <div id="div1">
                <button type="submit"><i class="bi bi-search text-center"></i></button>
                <input name="title" placeholder="product name..." type="text" id="search_product"/>
            </div>

        </form>
        <table class="table table-light" style="margin: 60px auto;width:100%">
        <thead>
          <tr>
            <th scope="col" >Title</th>
            <th scope="col" >Description</th>
            <th scope="col" >Category</th>
            <th scope="col" >Quantity</th>
            <th scope="col" >Price</th>
            <th scope="col" >Discount Price</th>
            <th scope="col" >Image</th>
            <th scope="col" >Action</th>
          </tr>
        </thead>
        <tbody>
            @if (!empty($data))
                @foreach ($data as $info)
                    <tr>
                        <td style="width: 10%">{{$info->title}}</td>
                        <td style="width: 20%">{{$info->description}}</td>
                        <td style="width: 10%">{{$info->category}}</td>
                        <td style="width: 10%">{{$info->quantity}}</td>
                        <td style="width: 10%">{{$info->price}}</td>
                        <td style="width: 15%">{{$info->discount_price}}</td>
                        <td style="width: 15%"><img src="{{asset('admin2/products_images/'.$info->image)}}" alt="" style="width: 70px;height:70px" /></td>
                        <td style="width: 10%">
                            <a class="btn btn-primary bg-primary mr-3 w-75" style="text-decoration: none" href="{{route('product.edit',$info->id)}}">Edit</a>
                            <form class="w-75 mt-2" action="{{route('product.destroy',$info->id)}}" method="POST" style="padding: 0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('are you sure to delete this')" class="btn btn-danger bg-danger w-100" style="margin: 0">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>


</div>
@endsection
