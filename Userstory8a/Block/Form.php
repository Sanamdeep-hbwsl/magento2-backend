<?php

namespace Sanamdeep\Userstory8a\Block;

use Magento\Framework\View\Element\Template;
use Sanamdeep\Userstory8a\Model\EmployeeFactory;

class Form extends Template
{
    protected $employeeFactory;

    public function __construct(
        Template\Context $context,
        EmployeeFactory $employeeFactory,
        array $data = []
    ) {
        $this->employeeFactory = $employeeFactory;
        parent::__construct($context, $data);
    }

    public function getFormAction()
    {
        return $this->getUrl('userstory8a/index/save');
    }

    public function getEmployeeData()
    {
        // If you're editing an existing employee, load the data here
        // For example, if you have an employee ID in the request:
        $employeeId = $this->getRequest()->getParam('employee_id');
        if ($employeeId) {
            $employee = $this->employeeFactory->create()->load($employeeId);
            return $employee->getData();
        }
        return [];
    }
}