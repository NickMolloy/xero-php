<?php

namespace XeroPHP\Models\PayrollAU\Employee;

use XeroPHP\Remote;


class HomeAddress extends Remote\Object {

    /**
     * Address line 1 for employee home address (max length = 50)
     *
     * @property string AddressLine1
     */

    /**
     * Address line 2 for employee home address (max length = 50)
     *
     * @property string AddressLine2
     */

    /**
     * Suburb for employee home address (max length = 50)
     *
     * @property string City
     */

    /**
     * State abbreviation for employee home address
     *
     * @property string Region
     */

    /**
     * PostCode for employee home address (max length = 4)
     *
     * @property string PostalCode
     */

    /**
     * Country of HomeAddress
     *
     * @property string Country
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    *
    * @return string
    */
    public static function getResourceURI(){
        return null;
    }


    /*
    * Get the root node name.  Just the unqualified classname
    *
    * @return string
    */
    public static function getRootNodeName(){
        return 'HomeAddress';
    }


    /*
    * Get the guid property
    *
    * @return string
    */
    public static function getGUIDProperty(){
        return '';
    }


    /**
    * Get the stem of the API (core.xro) etc
    *
    * @return string|null
    */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Hintable type
     *
     * @return array
     */
    public static function getProperties(){
        return array(
            'AddressLine1' => array (false, null),
            'AddressLine2' => array (false, null),
            'City' => array (false, null),
            'Region' => array (false, null),
            'PostalCode' => array (false, null),
            'Country' => array (false, null)
        );
    }


    /**
     * @return string
     */
    public function getAddressLine1(){
        return $this->_data['AddressLine1'];
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setAddressLine1($value){
        $this->_data['AddressLine1'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2(){
        return $this->_data['AddressLine2'];
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setAddressLine2($value){
        $this->_data['AddressLine2'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(){
        return $this->_data['City'];
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setCity($value){
        $this->_data['City'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion(){
        return $this->_data['Region'];
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setRegion($value){
        $this->_data['Region'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(){
        return $this->_data['PostalCode'];
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setPostalCode($value){
        $this->_data['PostalCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(){
        return $this->_data['Country'];
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setCountry($value){
        $this->_data['Country'] = $value;
        return $this;
    }


}