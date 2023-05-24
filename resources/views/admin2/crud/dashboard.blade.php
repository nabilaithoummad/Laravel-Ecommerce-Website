@extends('admin2.home')
@section('content')


<div class="d-flex flex-row justify-content-around " style="margin: 0px;width:100%;flex-wrap:wrap;padding-top: 60px;">


    <div style="width: 300px;border-radius:10px;background-image: linear-gradient( #d1fae5, #6ee36e6b);    box-shadow: 0 1.15rem 1.75rem 0 rgba(58,59,69,.15)!important;" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color: #769748!important;font-size: 60px;border-radius:50%;color:white" class="bi bi-cash-coin px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Totale Revenue</h5>
            <h3>${{$totale_revenue}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background-image: linear-gradient( rgb(88 146 241 / 50%), #b1c5ff6b);box-shadow: 0 1.15rem 1.75rem 0 rgba(58,59,69,.15)!important;" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:rgb(143, 141, 248);font-size: 60px;border-radius:50%;color:white" class="bi bi-cart px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Total Products</h5>
            <h3>{{$products}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background-image: linear-gradient( #fde68a, #fef3c7);box-shadow: 0 1.15rem 1.75rem 0 rgba(58,59,69,.15)!important;" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:#ffa000;font-size: 60px;border-radius:50%;color:white" class="bi bi-cart-check px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Total Orders</h5>
            <h3>{{$orders_count}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background-image: linear-gradient( #fecaca, #fee2e2);box-shadow: 0 1.15rem 1.75rem 0 rgba(58,59,69,.15)!important;" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:rgb(228, 1, 1);font-size: 60px;border-radius:50%;color:white" class="bi bi-people px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Total Customers</h5>
            <h3>{{$clients}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background-image: linear-gradient(#fbcfe8, #fce7f3);box-shadow: 0 1.15rem 1.75rem 0 rgba(58,59,69,.15)!important;" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:#ff0091;font-size: 60px;border-radius:50%;color:white" class="bi bi-check2-square px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Totale Delivered</h5>
            <h3>{{$order_delivered}}</h3>
        </div>
    </div>

    <div style="width: 300px;border-radius:10px;background-image: linear-gradient( #b3f556, #6aff6a6b);box-shadow: 0 1.15rem 1.75rem 0 rgba(58,59,69,.15)!important;" class="d-flex flex-row py-4 mb-5 ">
        <div style="width: 35%" class="text-center">
            <i style="background-color:#96dd31;font-size: 60px;border-radius:50%;color:white" class="bi bi-truck px-3 py-1"></i>
        </div>
        <div style="width: 65%" class=" px-3 pt-2 text-center">
            <h5>Totale Processing</h5>
            <h3>{{$order_processing}}</h3>
        </div>
    </div>

</div>
@endsection
