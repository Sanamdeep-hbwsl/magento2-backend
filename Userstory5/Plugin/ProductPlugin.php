<?php
namespace Sanamdeep\Userstory5\Plugin;

class ProductPlugin
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        if ($subject->getFinalPrice() < 60) {
            return $result . 'Sanamdeep from user story 5';
        }
        return $result;
    }
}
