@extends('admin2.home')
@section('content')

<div style="margin: 0px;width:100%;padding-top: 50px;">

    <h1 style="text-align: center;font-size:40px;margin-bottom:100px;margin-top:100px">Edit Category</h1>
    <form action="{{route('category.update',$data->id)}}" enctype= "multipart/form-data" method="POST" style="width: 60%;margin: auto;">
        @csrf
        @method('PUT')
        <div style="display: flex;flex-direction:row">
          <input type="text" name="category_name" style="width: 100%;color:black" placeholder="Category name" id="category_name" value="{{$data->category_name}}">
        </div>
        <div class="mt-3">
          <label class="label-control">Change Category Image</label>
          <input class="form-control" type="file" name="image" />
        </div>
        <div class="mt-3">
            <input type="submit" class="btn btn-primary" value="Submit"/>
        </div>
    </form>

</div>
@endsection
