<?php

namespace JJCaicedo\PlaceToPay;

use JJCaicedo\PlaceToPay\Models\Authentication;
use JJCaicedo\PlaceToPay\Models\Bank;
use JJCaicedo\PlaceToPay\Models\PSETransactionRequest;
use JJCaicedo\PlaceToPay\Models\PSETransactionResponse;
use SoapClient;

class PlaceToPay
{
    private static $auth;
    private static $wsdl;

    /**
     * Connect to PlaceToPay SOAP API
     * @param Authentication $auth - place to pay auth
     * @param $wsdl - place to pay soap wsdl
     */
    public static function connect(Authentication $auth, $wsdl)
    {
        self::$auth = $auth;
        self::$wsdl = $wsdl;
    }

    /**
     * Get list of banks
     * @return array<Bank>|exception
     */
    public static function getBankList()
    {
        $params = ["auth" => self::$auth];
        $client = new SoapClient(self::$wsdl);
        $response = $client->__soapCall('getBankList', array($params));
        $banks = [];
        foreach ($response->getBankListResult->item as $bank) {
            array_push($banks, new Bank($bank->bankCode, $bank->bankName));
        }
        return $banks;
    }

    public static function createTransaction(PSETransactionRequest $transactionRequest)
    {
        $params = ["auth" => self::$auth,
            "transaction" => $transactionRequest];
        $client = new SoapClient(self::$wsdl);
        $response = $client->__soapCall('getBankList', array($params));
        return new PSETransactionResponse($response);


    }

    public static function getTransactionInformation()
    {

    }

    public static function createTransactionMultiCredit()
    {

    }


}