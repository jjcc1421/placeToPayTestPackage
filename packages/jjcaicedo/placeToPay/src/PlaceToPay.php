<?php

namespace JJCaicedo\PlaceToPay;

use JJCaicedo\PlaceToPay\Models\Authentication;
use JJCaicedo\PlaceToPay\Models\Bank;

class PlaceToPay
{
    private static $auth;
    private static $wsdl;

    /**
     * Connect to PlaceToPay SOAP API
     * @param Authentication $auth
     * @param $wsdlc
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
        $params = array(
            "auth" => self::$auth
        );
        $client = new SoapClient(self::$wsdl);
        $response = $client->__soapCall('getBankList', array($params));
        $banks = [];
        foreach ($response->getBankListResult->item as $bank) {
            array_push($banks, new Bank($bank->bankCode, $bank->bankName));
        }
        return $banks;
    }

    public static function createTransaction()
    {

    }

    public static function getTransactionInformation()
    {

    }

    public static function createTransactionMultiCredit()
    {

    }


}