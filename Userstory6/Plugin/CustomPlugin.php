<?php

namespace Sanamdeep\Userstory6\Plugin;

class CustomPlugin
{
    public function afterToHtml(
        \Magento\Catalog\Block\Product\View\Description $subject,
        $result
    ) {
        // Modify the description to a custom value
        $customDescription = '<p>Custom description by Sanamdeep</p>';
        
        // Append the custom description to the existing result
        $result = $customDescription;

        return $result;
    }
}
