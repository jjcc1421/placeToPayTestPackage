<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/06/2016
 * Time: 2:22 AM
 */

namespace JJCaicedo\PlaceToPay\Models;


use Mockery\Exception;

class Person
{
    private $document;
    private $documentType;
    private $firstName;
    private $lastName;
    private $company;
    private $emailAddress;
    private $city;
    private $province;
    private $phone;
    private $country;
    private $mobile;

    /**
     * Person constructor.
     * @param $params
     */
    public function __construct($params)
    {
        if (is_array($params)) {
            $this->document = $params['document'] ? $params['document'] : null;
            $this->documentType = $params['documentType'] ? $params['documentType'] : null;
            $this->firstName = $params['firstName'] ? $params['firstName'] : null;
            $this->lastName = $params['lastName'] ? $params['lastName'] : null;
            $this->company = $params['company'] ? $params['company'] : null;
            $this->emailAddress = $params['emailAddress'] ? $params['emailAddress'] : null;
            $this->city = $params['city'] ? $params['city'] : null;
            $this->province = $params['province'] ? $params['province'] : null;
            $this->phone = $params['phone'] ? $params['phone'] : null;
            $this->country = $params['country'] ? $params['country'] : null;
            $this->mobile = $params['mobile'] ? $params['mobile'] : null;
        } else {
            throwException(new Exception("Not supported params"));
        }
    }

    /**
     * @return null
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @return null
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @return null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @return null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return null
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @return null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return null
     */
    public function getMobile()
    {
        return $this->mobile;
    }


}