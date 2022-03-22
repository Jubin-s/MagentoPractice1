<?php

namespace Example\MyModule\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

class MyHelper extends AbstractHelper
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    const XML_PATH_STORE_NAME = 'general/store_information/name';
    const XML_PATH_STORE_PHONE = 'general/store_information/phone';
    const XML_PATH_STORE_HOURS = 'general/store_information/hours';
    const XML_PATH_STORE_COUNTRY = 'general/store_information/country_id';
    const XML_PATH_STORE_REGION = 'general/store_information/region_id';
    const XML_PATH_STORE_POSTCODE = 'general/store_information/postcode';
    const XML_PATH_STORE_CITY = 'general/store_information/city';
    const XML_PATH_STORE_STREET_ADDRESS1 = 'general/store_information/street_line1';
  //const XML_PATH_STORE_STREET_ADDRESS2 = 'general/store_information/street_line2';
    const XML_PATH_STORE_VAT_NUMBER = 'general/store_information/merchant_vat_number';

//    const XML_PATH_STORE_VALIDATE_VAT_NUMBER = 'general/store_information/validate_vat_number';

    public function __construct(Context $context, ScopeConfigInterface $scopeConfig)
    {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @function get name of the store;
     * @param string path of store name;
     * @return string ;
     */

    public function getName($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_NAME, $scope);
    }

    /**
     * @function get Phone of the store;
     * @param string path of phone;
     * @return string ;
     */

    public function getPhone($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_PHONE, $scope);
    }

    /**
     * @function get hours of the store;
     * @param string path of hours ;
     * @return string ;
     */

    public function getHours($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_HOURS, $scope);
    }

    /**
     * @function get Country of the store;
     * @param string path of Country name ;
     * @return string ;
     */

    public function getCountry($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_COUNTRY, $scope);
    }

    /**
     * @function get region of the store;
     * @param string path of region ;
     * @return string ;
     */

    public function getRegion($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_REGION, $scope);
    }

    /**
     * @function get hours of the store;
     * @param string path of store name ;
     * @return string ;
     */

    public function getPostcode($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_POSTCODE, $scope);
    }

    public function getCity($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_CITY, $scope);
    }

    public function getAddress($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_STREET_ADDRESS1, $scope);
    }

    public function getAddress1($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_STREET_ADDRESS2, $scope);
    }

    public function getVat($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_VAT_NUMBER, $scope);
    }
}


