<?php
// app/code/Sanamdeep/Userstory8/Block/Table.php

namespace Sanamdeep\Userstory8\Block;

use Magento\Framework\View\Element\Template;
use Sanamdeep\Userstory8\Model\ResourceModel\EmployeeCollection;

class Table extends Template
{
    protected $employeeCollectionFactory;

    public function __construct(
        Template\Context $context,
        EmployeeCollection $employeeCollectionFactory,
        array $data = []
    ) {
        $this->employeeCollectionFactory = $employeeCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getEmployeeCollection()
    {
        return $this->employeeCollectionFactory->getItems();
    }
}
