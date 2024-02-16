<?php

namespace Sanamdeep\Userstory7\Block;

class Message extends \Magento\Framework\View\Element\Template
{
    // this part if for the second part of userstory 7
    protected function _afterToHtml($html)
    {
        $additionalMessage = '<p>This is an additional message rendered from the block\'s _afterToHtml() method by Sanamdeep.</p>';
        return $html . $additionalMessage;
    }
}