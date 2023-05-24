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





    <section class="w-100 pt-5">
        <h1>contact</h1>
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
