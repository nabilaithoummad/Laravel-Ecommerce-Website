<section class="w-100" id="categories">
    <div class="w-100 py-5 d-flex flex-row justify-content-center">
    </div>
    <div class="w-100 d-flex flex-row">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @if (!empty($category))
                    @foreach ($category as $info)
                        <div class="swiper-slide">
                            <img  src="{{asset('admin2/categories_images/'.$info->image)}}" style="width: 50%;" />
                            <div class="w-100 h-auto">
                                <h4 class="mt-3 fw-bold">{{$info->category_name}}</h4>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
</section>




