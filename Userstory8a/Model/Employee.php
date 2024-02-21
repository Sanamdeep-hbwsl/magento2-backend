<?php

namespace Sanamdeep\Userstory8a\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Employee extends AbstractModel implements IdentityInterface
{
    protected $_idFieldName = 'employee_id';
    protected $_eventPrefix = 'Sanamdeep_employee_table';
    protected $_cacheTag = 'Sanamdeep_employee_table';

    protected function _construct()
    {
        $this->_init(\Sanamdeep\Userstory8a\Model\ResourceModel\Employee::class);
    }

    public function getIdentities()
    {
        return [$this->_cacheTag . '_' . $this->getId()];
    }

    public function beforeSave()
    {
        parent::beforeSave();

        // Validate first_name and last_name
        if (strlen($this->getFirstname()) >   30 || strlen($this->getLastname()) >   30) {
            throw new \Magento\Framework\Exception\LocalizedException(__('First name and last name should have less than   30 alphabets with no numbers.'));
        }

        // Validate email_id
        if (!filter_var($this->getEmailId(), FILTER_VALIDATE_EMAIL)) {
            throw new \Magento\Framework\Exception\LocalizedException(__('Invalid email ID.'));
        }

        // Validate address
        if (strlen($this->getAddress()) <   30) {
            throw new \Magento\Framework\Exception\LocalizedException(__('Address should be greater than   30 characters.'));
        }

        // Validate phone_number
        if (!preg_match('/^\d{10}$/', $this->getPhoneNumber())) {
            throw new \Magento\Framework\Exception\LocalizedException(__('Phone number should be   10 digits only.'));
        }

        return $this;
    }
}