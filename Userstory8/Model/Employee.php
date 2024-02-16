<?php
namespace Sanamdeep\Userstory8\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Sanamdeep\Userstory8\Model\ResourceModel\Employee');
    }
}