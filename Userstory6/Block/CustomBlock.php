<?php
namespace Sanamdeep\Userstory6\Block;

use Magento\Framework\View\Element\AbstractBlock;

class CustomBlock extends AbstractBlock
{
    protected function _toHtml()
    {
        return '<div>Hello from Your Block i.e created by Sanamdeep!</div>';
    }

    protected function _afterToHtml($html)
    {
        return $html;
    }
}