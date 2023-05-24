<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('home2/style.css') }}" rel="stylesheet"/>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>Document</title>

    <style>





    .swiper {
      width: 90%;
      height: 300px;
      display: flex;
      flex-direction: row;
    }


    .swiper-slide {
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 300px;
      width: 260px;
      border-radius: 50%;
      align-items: center;
    }








    </style>
</head>
<body>

    @include('home2.header')


    @include('home2.main')


    @include('home2.categories')



    @include('home2.products')


    @include('home2.footer')





    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
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
                delay:3000,
                disableOnInteraction:false,
                reverseDirection:false
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
                    slidesPerView: 3,
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



        function zoominproduct2(ele){
            let id = ele.getAttribute('data-pr')
            let productimg = document.getElementById('productphoneimg'+id);
            let moredetails = document.getElementById('moredetailsphone'+id);

            moredetails.style.height='10%'
            productimg.style.transform='scale(1.2)'
            productimg.style.transition='0.5s all ease-in-out'
            productimg.style.opacity='0.5'
            moredetails.setAttribute('class','w-100 d-flex flex-row justify-content-center mx-auto w3-animate-bottom')


        }

        function zoomoutproduct2(ele){
            let id = ele.getAttribute('data-pr')
            let productimg = document.getElementById('productphoneimg'+id);
            let moredetails = document.getElementById('moredetailsphone'+id);

            moredetails.setAttribute('class','d-none w3-animate-bottom')
            productimg.style.transform='scale(1)'
            productimg.style.opacity='1'
        }
        




        
        function zoominproduct3(ele){
            let id = ele.getAttribute('data-pr')
            let productimg = document.getElementById('productclothesimg'+id);
            let moredetails = document.getElementById('moredetailsclothes'+id);

            moredetails.style.height='10%'
            productimg.style.transform='scale(1.2)'
            productimg.style.transition='0.5s all ease-in-out'
            productimg.style.opacity='0.5'
            moredetails.setAttribute('class','w-100 d-flex flex-row justify-content-center mx-auto w3-animate-bottom')


        }

        function zoomoutproduct3(ele){
            let id = ele.getAttribute('data-pr')
            let productimg = document.getElementById('productclothesimg'+id);
            let moredetails = document.getElementById('moredetailsclothes'+id);

            moredetails.setAttribute('class','d-none w3-animate-bottom')
            productimg.style.transform='scale(1)'
            productimg.style.opacity='1'
        }




    </script>

</body>
</html>
