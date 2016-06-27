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
     * @param $params
     */
    public function __construct($params)
    {
        if (is_array($params)) {
            $this->bankCode = $params['bankCode'];
            $this->bankInterface = $params['bankInterface'];
            $this->returnURL = $params['returnURL'];
            $this->reference = $params['reference'];
            $this->description = $params['description'];
            $this->language = $params['language'];
            $this->currency = $params['currency'];
            $this->totalAmount = $params['totalAmount'];
            $this->taxAmount = $params['taxAmount'];
            $this->devolutionBase = $params['devolutionBase'];
            $this->tipAmount = $params['tipAmount'];
            $this->payer = $params['payer'];
            $this->buyer = $params['buyer'];
            $this->shipping = $params['shipping'];
            $this->ipAddress = $params['ipAddress'];
            $this->userAgent = $params['userAgent'];
            $this->additionalData = $params['additionalData'];
        } else {
            throwException(new \Exception("Not supported params"));
        }
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