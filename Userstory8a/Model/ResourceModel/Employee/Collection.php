<?php

namespace Sanamdeep\Userstory8a\Model\ResourceModel\Employee;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Sanamdeep\Userstory8a\Model\Employee', 'Sanamdeep\Userstory8a\Model\ResourceModel\Employee');
    }
}