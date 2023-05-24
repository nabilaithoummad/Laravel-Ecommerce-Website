<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order pdf</title>
</head>
<body>
    <h1>this is a pdf file</h1>
    <h1>client name : {{$data->name}}</h1>
    <h1>client email : {{$data->email}}</h1>
    <h1>client address : {{$data->address}}</h1>
    <h1>client phone : {{$data->phone}}</h1>
    <h1>product title : {{$data->product_title}}</h1>
    <h1>product quantity : {{$data->product_quantity}}</h1>
    <h1>total price : {{$data->product_price}}</h1>
    <h1>payment status : {{$data->payment_status}}</h1>
    <h1>delivery status : {{$data->delivery_status}}</h1>
    <h1>product image :</h1>
    <img height="250" width="450" src="{{asset('/admin2/products_images/16775029094720.jpg')}}" />
</body>
</html>
