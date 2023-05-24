<section class="w-100 mt-5" id="products">
    <div class="w-100 pb-5 d-flex flex-row justify-content-center">
        <h1 class="display-5 pb-2" style="font-weight: 600;text-decoration: underline;">Last Products</h1>
    </div>
    <form action="{{route('searchProduct')}}" method="GET" id="formsearch" class="w-100 pb-5 d-flex flex-row flex-wrap justify-content-center">
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
                <div id="first" style="height: 100px;" class="w-100">
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


<div class="w-100 row justify-content-center">
    <a href="{{route('allproducts')}}" style="width: 200px;background-color:#2b12ff;color:white;font-size: 19px;" class="btn py-2 mt-3">view more</a>
</div>





<!-- 
<section class="w-75 row  mx-auto">

    <div data-aos="slide-right" data-aos-duration="2000" class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  d-flex flex-row justify-content-center">
        <img  src="{{asset('home2/img/deliveryman.jpg')}}" style="width: 100%;" />
    </div>

    <div data-aos="slide-left" data-aos-duration="2000" class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 px-5 d-flex flex-column pt-xxl-5 pt-xl-5 pt-lg-5 pt-md-0 pt-sm-0 " >
        <h1 class="mb-4 mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-0 mt-sm-0 "><span style="color: #2b12ff;">Why</span> E-store ?</h1>
        <div style="height: 6px; background-color:#2b12ff" class="w-25 mb-4 "></div>
        <p class="mb-4">At Estore, we pride ourselves on being more than just another e-commerce platform. We are a destination where quality, convenience, and customer satisfaction converge to offer an extraordinary online shopping experience. Here's why choosing us sets us apart from the rest:</p>
        <h5 class="mb-3"><i style="color: green;" class="bi bi-check-circle-fill me-2"></i>Unparalleled Product Selection</h5>
        <h5 class="mb-3"><i style="color: green;" class="bi bi-check-circle-fill me-2"></i>Competitive Prices</h5>
        <h5 class="mb-3"><i style="color: green;" class="bi bi-check-circle-fill me-2"></i>Fast and Reliable Shipping</h5>
        <h5 class="mb-3"><i style="color: green;" class="bi bi-check-circle-fill me-2"></i>Secure and Trustworthy</h5>
    </div>
</section>
 -->



<section style="height: 500px;background-image: url('../home2/img/mobiles.jpg');background-size: cover;background-repeat: no-repeat;background-attachment: fixed;" class="w-100 p-0 d-flex justify-content-center align-items-center mt-5">

    <h1 style="font-weight: 800;text-shadow: 2px 4px 5px #CE5937;color: #f9f9f9;" class="display-1 text-center">
    At E-Store You Can Find Your Favorite SmartPhone

    </h1>
</section>



<section class="w-100 mt-5 mx-auto" >

    <div  class="w-100 d-flex flex-row flex-wrap justify-content-around">





        @if (!empty($phones))
        @foreach ($phones as $info)

            <div onmouseover="zoominproduct2(this)" onmouseleave="zoomoutproduct2(this)" data-pr="{{$info->id}}" class="d-flex flex-column bg-white product" style="border-radius: 8px;">
                <div class="w-100" style="overflow: hidden;">
                    <img id="productphoneimg{{$info->id}}" class="w-100" src="{{asset('admin2/products_images/'.$info->image)}}" />

                </div>
                <div id="first" style="height: 100px;" class="w-100">
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
                <div id="moredetailsphone{{$info->id}}" style="position: absolute;top: 170px;right: 5px;" class="w-100 d-none w3-animate-bottom">
                    <a href={{route('product_details',$info->id)}} class="btn btn-dark w-50">product details</a>
                </div>
            </div>

        @endforeach
        @else

        @endif




    </div>
</section>












<div class="w-100 row justify-content-center mt-5">
    <h1 class="mb-4 mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-0 mt-sm-0 text-center">Explore the world of fashion</h1>
    <div style="height: 6px; background-color:black" class="w-25 mb-4 "></div>
</div>
<section class="w-75 row mx-auto mb-5">
    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12 mb-xxl-0 mb-xl-0 mb-lg-0 mb-3" >
        <img src="{{asset('/home2/img/fashionman.jpg')}}" alt="" class="w-100 h-100">
    </div>
    <div class="col-4 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-12 mb-xxl-0 mb-xl-0 mb-lg-0 mb-3">
        <img src="{{asset('/home2/img/blondefashion.jpg')}}" alt="" class="w-100 h-100">
    </div>

    <div class="col-4 col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-12 " >
        <img src="{{asset('/home2/img/blondfashion2.jpg')}}" alt="" class="w-100 mb-4">
        <img src="{{asset('/home2/img/bearded.jpg')}}" alt="" class="w-100">
    </div>
</section>












<section class="w-75 mt-5 mx-auto" >

    <div  class="w-100 d-flex flex-row flex-wrap justify-content-around">




    @if (!empty($clothes))
        @foreach ($clothes as $info)

            <div onmouseover="zoominproduct3(this)" onmouseleave="zoomoutproduct3(this)" data-pr="{{$info->id}}" class="d-flex flex-column bg-white product" style="border-radius: 8px;">
                <div class="w-100" style="overflow: hidden;">
                    <img id="productclothesimg{{$info->id}}" class="w-100" src="{{asset('admin2/products_images/'.$info->image)}}" />

                </div>
                <div id="first" style="height: 100px;" class="w-100">
                    <div class="w-100 d-flex flex-row justify-content-end pt-2 h-50">
                        @if ($info->discount_price !==null)

                            <p class="text-decoration-line-through mt-2 me-1" style="color: #837070;">${{$info->discount_price}}</p>
                            <p class="fs-4" style="color: #2b12ff;">${{$info->price}}</p>

                        @else
                            <p class="fs-4" style="color: #2b12ff;">${{$info->price}}</p>

                        @endif

                    </div>
                    <div class="h-75">
                        <p style="font-weight: 500;" class="text-center text-d fs-5">{{$info->title}}</p>
                    </div>
                </div>
                <div id="moredetailsclothes{{$info->id}}" style="position: absolute;top: 170px;right: 5px;" class="w-100 d-none w3-animate-bottom">
                    <a href={{route('product_details',$info->id)}} class="btn btn-dark w-50">product details</a>
                </div>
            </div>

        @endforeach
        @else

        @endif




    </div>
</section>
<div class="w-100 row justify-content-center">
    <a href="{{route('allproducts')}}" style="width: 200px;background-color:#2b12ff;color:white;font-size: 19px;" class="btn py-2 mt-3">view more</a>
</div>





