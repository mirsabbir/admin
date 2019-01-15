<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function PaypalIndex(){
        return view('payment.paypal');
    }
    public function CardIndex(){
        return view('payment.card');
    }
}
