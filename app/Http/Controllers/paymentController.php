<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bmatovu\MtnMomo\Products\Collection;

class paymentController extends Controller
{
    //   payment function
    public function payment(){
        $collection = new Collection();
        $momoTransactionId = $collection->requestToPay('20210208', '46733123453', 100);
        dd($momoTransactionId );

    }
}
