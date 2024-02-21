<?php

namespace Sanamdeep\Userstory8a\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Employee extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('Sanamdeep_employee_table', 'employee_id');
    }
}