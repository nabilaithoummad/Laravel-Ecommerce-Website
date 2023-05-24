














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('home2/style.css') }}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>Document</title>
</head>
<body>

    @include('home2.header')





    <section class="w-100 py-5">
        <div class="w-100">
           <div class="w-100">
              <h2 style="text-align: center">
                 My <span>orders</span>
              </h2>
           </div>
           <div class="100%" style='overflow-x:scroll'>
                <table class="table table-bordered" style="margin: 60px auto;width:100%">
                    <thead>
                        <tr>
                            <th scope="col" >Product Title</th>
                            <th scope="col" >Product Quantity</th>
                            <th scope="col" >Product Total Price</th>
                            <th scope="col" >Payment Status</th>
                            <th scope="col" >Delivery Status</th>
                            <th scope="col" >Image</th>
                            <th scope="col" >Cancel Order</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if (!empty($data))
                            @foreach ($data as $info)
                                <tr>
                                    <td style="width: 10%">{{$info->product_title}}</td>
                                    <td style="width: 20%">{{$info->product_quantity}}</td>
                                    <td style="width: 10%">${{$info->product_price}}</td>
                                    <td style="width: 10%">{{$info->payment_status}}</td>
                                    <td style="width: 10%">{{$info->delivery_status}}</td>
                                    <td style="width: 15%"><img src="{{asset('admin2/products_images/'.$info->product_image)}}" alt="" style="width: 100%;" /></td>
                                    <td style="width: 10%">
                                        @if ($info->delivery_status!=='processing')
                                            <p class="text-primary">not allowed</p>
                                        @else
                                            <a href="{{route('cancel_order',$info->id)}}" class="btn btn-danger">cancel</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>


           </div>
        </div>
     </section>


    @include('home2.footer')





    <script>
        let menubtn = document.getElementById('menubtn');
        let menucount = 0;
        let dropmenu = document.getElementById('dropmenu');

        menubtn.addEventListener('click',()=>{
            if(menucount===0){
                dropmenu.setAttribute('class','px-4 pt-2 d-md-flex d-sm-flex d-flex flex-column d-lg-none d-xl-none d-xxl-none bg-white');
                menucount=1;
            }else{
                if(menucount===1){
                    dropmenu.setAttribute('class','px-4 pt-2 d-md-none d-sm-none d-none flex-column d-lg-none d-xl-none d-xxl-none bg-white');
                    menucount=0;
                }
            }
        })
    </script>

</body>
</html>
