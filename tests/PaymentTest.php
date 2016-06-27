<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class PaymentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testPayment()
    {
        //1022

        $auth = new \JJCaicedo\PlaceToPay\Models\Authentication('6dd490faf9cb87a9862245da41170ff2', '024h1IlD', null);
        \JJCaicedo\PlaceToPay\PlaceToPay::connect($auth, 'https://test.placetopay.com/soap/pse/?wsdl');
        $person = [
            'document' => '123456',
            'documentType' => 'CC',
            'firstName' => 'AA',
            'lastName' => 'BB',
            'company' => 'NA',
            'emailAddress' => 'abc123@gmail.com',
            'address' => 'fake123',
            'city' => 'Medellin',
            'province' => 'Antioquia',
            'country' => 'Colombia',
            'phone' => '123',
            'mobile' => '123'
        ];
        $person = new \JJCaicedo\PlaceToPay\Models\Person($person);
        $transactionRequest = [
            'bankCode' => '1022',
            'bankInterface' => '0',
            'returnURL' => 'https://google.com',
            'reference' => rand(1, 1000),
            'description' => 'Hello world',
            'language' => 'es',
            'currency' => 'COP',
            'totalAmount' => '100000',
            'taxAmount' => '1000',
            'devolutionBase' => '0',
            'tipAmount' => '0',
            'payer' => $person,
            'buyer' => $person,
            'shipping' => $person,
            'additionalData' => null,
            'ipAddress' => '175.0.0.1',
            'userAgent' => 'php unit'
        ];
        $transactionRequest = new \JJCaicedo\PlaceToPay\Models\PSETransactionRequest($transactionRequest);
        \JJCaicedo\PlaceToPay\PlaceToPay::createTransaction($transactionRequest);
    }
}
