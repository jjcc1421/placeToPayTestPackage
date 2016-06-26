<?php

namespace JJCaicedo\PlaceToPay;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use JJCaicedo\PlaceToPay\Models\Authentication;
use JJCaicedo\PlaceToPay\Models\Bank;
use SoapClient;

class PlaceToPayController extends Controller
{
    public function index()
    {
        $auth = new Authentication('6dd490faf9cb87a9862245da41170ff2', '024h1IlD', null);
        $this->getBankList($auth, "https://test.placetopay.com/soap/pse/?wsdl");
        //echo "hola";
    }

    private function getBankList(Authentication $auth, $wsdl)
    {
        $params = array(
            "auth" => $auth
        );
        $client = new SoapClient($wsdl);
        $response = $client->__soapCall('getBankList', array($params));
        $banks = [];
        foreach ($response->getBankListResult->item as $bank) {
            array_push($banks, new Bank($bank->bankCode, $bank->bankName));
        }
        return $banks;
        //return null;
    }
}
