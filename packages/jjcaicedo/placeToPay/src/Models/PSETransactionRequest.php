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

    /**
     * @return mixed
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @return mixed
     */
    public function getBankInterface()
    {
        return $this->bankInterface;
    }

    /**
     * @return mixed
     */
    public function getReturnURL()
    {
        return $this->returnURL;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @return mixed
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @return mixed
     */
    public function getDevolutionBase()
    {
        return $this->devolutionBase;
    }

    /**
     * @return mixed
     */
    public function getTipAmount()
    {
        return $this->tipAmount;
    }

    /**
     * @return \JJCaicedo\PlaceToPay\Models\Person
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @return \JJCaicedo\PlaceToPay\Models\Person
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @return \JJCaicedo\PlaceToPay\Models\Person
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @return mixed
     */
    public function getAdditionalData()
    {
        return $this->additionalData;
    }



}