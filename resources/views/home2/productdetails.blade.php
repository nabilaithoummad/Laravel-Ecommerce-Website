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


    <section class="p-5 w-100" style="display:flex;flex-direction:row;flex-wrap:wrap;justify-content:space-around">
        <div style="overflow:hidden;width: 400px;height:100%;display:flex;align-items:center;flex-direction:column;justify-content: center;">
            <img style="width: 100%" src="{{asset('admin2/products_images/'.$data->image)}}" alt="#"/>
        </div>
        <div style="width: 400px" class="">

            <table class="table table-bordered" style="width:100%">
                <tr>
                    <td>Title</td>
                    <td>{{$data->title}}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{$data->description}}</td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>{{$data->category}}</td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td>{{$data->quantity}}</td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>{{$data->price}}</td>
                </tr>
                <tr>
                    <td>Discount Price</td>
                    <td>{{$data->discount_price}}</td>
                </tr>
                <tr>
                    <td colspan="2" class="py-3">
                        <form action="{{route('add_cart',$data->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="mr-0" type="number" name="quantity" value="1" min="1"/>
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" value="Add To Cart" />
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>

            </table>


        </div>
     </section>


    @include('home2.footer')






    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
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




        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 30,
            autoplay:{
                delay:2000,
                disableOnInteraction:false,
                reverseDirection:true
            },
            breakpoints:{
                0:{
                    slidesPerView: 1,
                },
                500:{
                    slidesPerView: 2,
                },
                768:{
                    slidesPerView: 3,
                },
                992:{
                    slidesPerView: 4,
                },
                1200:{
                    slidesPerView: 4,
                }
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });







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
