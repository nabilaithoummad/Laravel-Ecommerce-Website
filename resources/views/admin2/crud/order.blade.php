@extends('admin2.home')
@section('content')
<div style="margin: 0px;width:100%;overflow-x:scroll;padding-top: 50px;">



        <h1 style="text-align: center;font-size:40px;margin-bottom:30px;margin-top:13px">Orders</h1>

        <table class="table table-light" style="margin: 60px auto;width:100%">
        <thead>
          <tr>
            <th scope="col" >Client Name</th>
            <th scope="col" >Client Email</th>
            <th scope="col" >Client Address</th>
            <th scope="col" >Client Pehone</th>
            <th scope="col" >Product Title</th>
            <th scope="col" >Quantity</th>
            <th scope="col" >Price</th>
            <th scope="col" >Payment Status</th>
            <th scope="col" >Delivery Status</th>
            <th scope="col" >Image</th>
            <th scope="col" >Delivered</th>
            <th scope="col" >pdf</th>
            <th scope="col" >send email</th>
          </tr>
        </thead>
        <tbody>
            @if (!empty($data))
                @foreach ($data as $info)
                    <tr>
                        <td style="width: 10%">{{$info->name}}</td>
                        <td style="width: 10%">{{$info->email}}</td>
                        <td style="width: 10%">{{$info->address}}</td>
                        <td style="width: 10%">{{$info->phone}}</td>
                        <td style="width: 10%">{{$info->product_title}}</td>
                        <td style="width: 10%">{{$info->product_quantity}}</td>
                        <td style="width: 10%">${{$info->product_price}}</td>
                        <td style="width: 20%">{{$info->payment_status}}</td>
                        <td style="width: 10%">{{$info->delivery_status}}</td>
                        <td style="width: 15%"><img src="{{asset('admin2/products_images/'.$info->product_image)}}" alt="" style="width: 70px;height:70px" /></td>
                        <td style="width: 15%;text-align:center">
                            @if($info->delivery_status=='processing')
                                <a onclick="return confirm('are you sure this product is delivered !!')" class="btn btn-primary bg-primary w-100" style="text-decoration: none" href="{{route('edit_order',$info->id)}}">Delivered</a>
                            @elseif ($info->delivery_status=='delivered')
                                <i style="color: green;font-size:30px;text-align:center" class="bi bi-check-circle-fill w-100"></i>
                            @elseif ($info->delivery_status=='canceled order')
                                <i style="color: rgb(252, 11, 11);font-size:30px;text-align:center" <i class="bi bi-x-circle-fill w-100"></i></i>
                            @endif
                        </td>
                        <td style="width: 10%">
                            <a style="background-color: green"  class="btn text-white w-100" style="text-decoration: none" href="{{route('print_pdf',$info->id)}}"><i class="bi bi-download"></i></a>
                        </td>
                        <td style="width: 15%;text-align:center">
                            <a class="btn btn-primary text-white w-100" style="text-decoration: none" href="{{route('send_email',$info->id)}}">send&nbsp;email</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      </table>


</div>
@endsection
