<?php
namespace Sanamdeep\Userstory8\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Sanamdeep\Userstory8\Model\Employee;
use Sanamdeep\Userstory8\Model\ResourceModel\Employee as EmployeeResource;

class EmployeeCollection extends AbstractCollection
{
    protected $_idFieldName = 'employee_id';

    protected function _construct()
    {
        $this->_init(Employee::class, EmployeeResource::class);
    }
}