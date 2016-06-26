<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/06/2016
 * Time: 5:04 PM
 */

namespace JJCaicedo\PlaceToPay\Models;

use JJCaicedo\PlaceToPay\Models\Person;

class PSETransactionRequest
{
    protected $bankCode;
    protected $bankInterface;
    protected $returnURL;
    protected $reference;
    protected $description;
    protected $language;
    protected $currency;
    protected $totalAmount;
    protected $taxAmount;
    protected $devolutionBase;
    protected $tipAmount;
    protected $payer;
    protected $buyer;
    protected $shipping;
    protected $ipAddress;
    protected $userAgent;
    protected $additionalData;

    /**
     * PSETransactionRequest constructor.
     * @param $bankCode
     * @param $bankInterface
     * @param $returnURL
     * @param $reference
     * @param $description
     * @param $language
     * @param $currency
     * @param $totalAmount
     * @param $taxAmount
     * @param $devolutionBase
     * @param $tipAmount
     * @param \JJCaicedo\PlaceToPay\Models\Person $payer
     * @param \JJCaicedo\PlaceToPay\Models\Person $buyer
     * @param \JJCaicedo\PlaceToPay\Models\Person $shipping
     * @param $ipAddress
     * @param $userAgent
     * @param $additionalData
     */
    public function __construct($bankCode, $bankInterface, $returnURL, $reference, $description, $language, $currency, $totalAmount, $taxAmount, $devolutionBase, $tipAmount, Person $payer, Person $buyer, Person $shipping, $ipAddress, $userAgent, $additionalData)
    {
        $this->bankCode = $bankCode;
        $this->bankInterface = $bankInterface;
        $this->returnURL = $returnURL;
        $this->reference = $reference;
        $this->description = $description;
        $this->language = $language;
        $this->currency = $currency;
        $this->totalAmount = $totalAmount;
        $this->taxAmount = $taxAmount;
        $this->devolutionBase = $devolutionBase;
        $this->tipAmount = $tipAmount;
        $this->payer = $payer;
        $this->buyer = $buyer;
        $this->shipping = $shipping;
        $this->ipAddress = $ipAddress;
        $this->userAgent = $userAgent;
        $this->additionalData = $additionalData;
    }


}