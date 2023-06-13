<?php

namespace Src\Strategy\PaymentDriver\Controllers;

use App\Http\Controllers\Controller;
use Src\Strategy\PaymentDriver\Methods\OnlinePayment;
use Src\Strategy\PaymentDriver\Models\Order;
use Src\Strategy\PaymentDriver\PaymentService;

class PaymentController extends Controller
{
    public function index()
    {
        $order = new Order(1200000);
        $paySrv = new PaymentService();
        $paySrv->setPaymentMethod(new OnlinePayment());
        $paySrv->doPay($order);
    }
}
