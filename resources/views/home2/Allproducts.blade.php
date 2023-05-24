
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


<section class="w-100 mt-5" id="products">


    <div class="w-100 pb-5 d-flex flex-row justify-content-center">
        <h1 class="display-5 pb-2" style="font-weight: 600;text-decoration: underline;">All Products</h1>
    </div>


    <form action="{{route('searchAllProduct')}}" method="GET" id="formsearch" class="w-100 pb-5 d-flex flex-row flex-wrap justify-content-center">
        <div id="div2">
            <p class="pt-2" style="font-weight: 600;font-size: large;">chose category :</p>
            <select name="category" >
                <option></option>
                @if (!empty($category))
                    @foreach ($category as $info)
                        <option value="{{$info->category_name}}">{{$info->category_name}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div id="div1">
            <button type="submit"><i class="bi bi-search text-center"></i></button>
            <input name="title" placeholder="product name..." type="text" id="search_product"/>
        </div>

    </form>

    <div id="productsDiv" class="w-100">





        @if (!empty($data))
        @foreach ($data as $info)

            <div onmouseover="zoominproduct(this)" onmouseleave="zoomoutproduct(this)" data-pr="{{$info->id}}" class="d-flex flex-column bg-white product" style="border-radius: 8px;">
                <div class="w-100" style="overflow: hidden;">
                    <img id="productimg{{$info->id}}" class="w-100" src="{{asset('admin2/products_images/'.$info->image)}}" />

                </div>
                <div id="first" style="height: 80px;" class="w-100">
                    <div class="w-100 d-flex flex-row justify-content-end pt-2 h-50">
                        @if ($info->discount_price !==null)

                            <p class="text-decoration-line-through mt-2 me-1" style="color: #837070;">${{$info->discount_price}}</p>
                            <p class="fs-4" style="color: #2b12ff;">${{$info->price}}</p>

                        @else
                            <p class="fs-4" style="color: #2b12ff;">${{$info->price}}</p>

                        @endif

                    </div>
                    <div class="h-25">
                        <p style="font-weight: 500;" class="text-center text-d fs-5">{{$info->title}}</p>
                    </div>
                </div>
                <div id="moredetails{{$info->id}}" style="position: absolute;top: 170px;right: 5px;" class="w-100 d-none w3-animate-bottom">
                    <a href={{route('product_details',$info->id)}} class="btn btn-dark w-50">product details</a>
                </div>
            </div>

        @endforeach
        @else

        @endif




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




        


        function zoominproduct(ele){
            let id = ele.getAttribute('data-pr')
            let productimg = document.getElementById('productimg'+id);
            let moredetails = document.getElementById('moredetails'+id);

            moredetails.style.height='10%'
            productimg.style.transform='scale(1.2)'
            productimg.style.transition='0.5s all ease-in-out'
            productimg.style.opacity='0.5'
            moredetails.setAttribute('class','w-100 d-flex flex-row justify-content-center mx-auto w3-animate-bottom')


        }

        function zoomoutproduct(ele){
            let id = ele.getAttribute('data-pr')
            let productimg = document.getElementById('productimg'+id);
            let moredetails = document.getElementById('moredetails'+id);

            moredetails.setAttribute('class','d-none w3-animate-bottom')
            productimg.style.transform='scale(1)'
            productimg.style.opacity='1'
        }






    </script>

</body>
</html>
