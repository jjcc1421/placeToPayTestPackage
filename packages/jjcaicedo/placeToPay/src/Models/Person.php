<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/06/2016
 * Time: 2:22 AM
 */

namespace JJCaicedo\PlaceToPay\Models;


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
     * @param $document
     * @param $documetnType
     * @param $firstName
     * @param $lastName
     * @param $company
     * @param $emailAddress
     * @param $city
     * @param $province
     * @param $phone
     * @param $country
     * @param $mobile
     */
    public function __construct($document, $documentType, $firstName, $lastName, $company, $emailAddress, $city, $province, $phone, $country, $mobile)
    {
        $this->document = $document;
        $this->documentType = $documentType;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->company = $company;
        $this->emailAddress = $emailAddress;
        $this->city = $city;
        $this->province = $province;
        $this->phone = $phone;
        $this->country = $country;
        $this->mobile = $mobile;
    }


}