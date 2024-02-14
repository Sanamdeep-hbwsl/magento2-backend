<?php
namespace Sanamdeep\Userstory2\Plugin;

class PageConfigPlugin
{
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $header, $result)
    {
        return 'Custom Default Text Created by Sanamdeep';
    }
}
