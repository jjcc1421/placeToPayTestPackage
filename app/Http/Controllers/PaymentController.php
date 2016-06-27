<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use JJCaicedo\PlaceToPay\Models\Authentication;
use JJCaicedo\PlaceToPay\Models\Bank;
use JJCaicedo\PlaceToPay\PlaceToPay;
use SoapClient;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    public function index()
    {
        $auth = new Authentication('6dd490faf9cb87a9862245da41170ff2', '024h1IlD', null);
        PlaceToPay::connect($auth, 'https://test.placetopay.com/soap/pse/?wsdl');
        $banks = PlaceToPay::getBankList();
        return View('index', ['banks' => $banks]);

    }
}
