<?php


namespace Sanamdeep\Userstory8a\Block;

use Magento\Framework\View\Element\Template;
use Sanamdeep\Userstory8a\Model\ResourceModel\Employee\CollectionFactory;

class Table extends Template
{
    protected $employeeCollectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $employeeCollectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->employeeCollectionFactory = $employeeCollectionFactory;
    }

    public function getEmployeeCollection()
    {
        $collection = $this->employeeCollectionFactory->create();
        $orderField = $this->getRequest()->getParam('order_field');
        $orderDirection = $this->getRequest()->getParam('order_direction');
        if ($orderField && $orderDirection) {
            $collection->setOrder($orderField, $orderDirection);
        }
        return $collection;
    }
}