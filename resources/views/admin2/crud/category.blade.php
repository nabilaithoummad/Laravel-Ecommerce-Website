@extends('admin2.home')
@section('content')
<div style="margin: 0px;width:100%;padding-top: 50px;">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif

    <h1 style="text-align: center;font-size:40px;margin-bottom:30px;margin-top:13px">Add Category</h1>
    <form action="{{route('category.store')}}" method="POST" enctype= "multipart/form-data" style="width: 60%;margin: auto;">
        @csrf
        <div style="display: flex;flex-direction:row">
          <input type="text" name="category_name" style="width: 100%;color:black" placeholder="Category name" id="category_name">
        </div>
        <div class="mt-3">
            <label class="label-control mb-2">Category Image</label>
            <input class="form-control" type="file" name="image" />
        </div>
        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="Submit"/>
        </div>
    </form>


    <table class="table table-light" style="margin: 60px auto;width:80%">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col" style="text-align: center;">Category Name</th>
            <th scope="col" style="text-align: center;">Category Image</th>
            <th scope="col" style="text-align: center;">Action</th>
          </tr>
        </thead>
        <tbody>

            @if (!empty($data))
                @foreach ($data as $info)
                    <tr>
                        <th style="text-align: center;" scope="row">{{$info->id}}</th>
                        <td style="text-align: center;">{{$info->category_name}}</td>
                        <td style="width: 15%"><img src="{{asset('admin2/categories_images/'.$info->image)}}" alt="" style="width: 70px;height:70px" /></td>

                        <td style="display:flex;flex-direction:row;justify-content:center">
                            <a class="btn btn-primary bg-primary mr-3" style="text-decoration: none" href="{{route('category.edit',$info->id)}}">Edit</a>
                            <form action="{{route('category.destroy',$info->id)}}" method="POST" style="padding: 0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger bg-danger" style="margin: 0">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else

            @endif

        </tbody>
      </table>


</div>
@endsection
