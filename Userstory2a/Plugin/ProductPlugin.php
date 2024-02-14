<?php
namespace Sanamdeep\Userstory2a\Plugin;

class ProductPlugin
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        if ($subject->getFinalPrice() < 20) {
            return $result . ' Whole Sale!';
        }
        if ($subject->getFinalPrice() < 50) {
            $price=$subject->getFinalPrice();
            $discountedPrice = $price*0.85;
            $result .= ' Super Sale (Discounted Price: ' . $discountedPrice . '$) ';
        }
        else if ($subject->getFinalPrice() > 50) {
            return $result . ' Premium!';
        }
        return $result;
    }
}
