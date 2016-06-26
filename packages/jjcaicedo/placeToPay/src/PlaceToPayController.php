<?php

namespace JJCaicedo\PlaceToPay;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use JJCaicedo\PlaceToPay\Models\Authentication;
use JJCaicedo\PlaceToPay\Models\Bank;
use JJCaicedo\PlaceToPay\PlaceToPay;
use SoapClient;

class PlaceToPayController extends Controller
{
    public function index()
    {
        $auth = new Authentication('6dd490faf9cb87a9862245da41170ff2', '024h1IlD', null);
        PlaceToPay::connect($auth,"https://test.placetopay.com/soap/pse/?wsdl");
        dd(PlaceToPay::getBankList());

    }

}
