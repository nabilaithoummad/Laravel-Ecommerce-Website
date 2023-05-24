<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Notifications\sendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use PDF;

class OrderController extends Controller
{
    //

    public function show_orders()
    {
        $data = Order::select('*')->get()->sortDesc();
        return view('admin2.crud.order',['data'=>$data]);
    }

    public function edit_order($id)
    {
        $data = Order::select('*')->find($id);
        $data->delivery_status='delivered';
        $data->payment_status='paid';
        $data->save();
        return redirect()->route('show_orders');
    }


    public function print_pdf($id)
    {
        $data = Order::select('*')->find($id);

        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);

        $pdf = \PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);

        $pdf->loadView('admin2.crud.pdf',['data'=>$data]);
        return $pdf->download('order_details.pdf');
    }


    public function send_email($id){
        $data = Order::select('*')->find($id);
        return view('admin2.crud.email_info',compact('data'));
    }


    public function send_user_email(Request $request ,$id){
        $data = Order::select('*')->find($id);

        $details = [
            'greeting'=>$request->greeting,
            'firstline'=>$request->firstline,
            'body'=>$request->body,
            'button'=>$request->button,
            'url'=>$request->url,
            'lastline'=>$request->lastline,
        ];

        Notification::send($data, new sendEmailNotification($details));

        return redirect()->back();

    }


}
