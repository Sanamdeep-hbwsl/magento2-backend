<?php
namespace Sanamdeep\Userstory2\Plugin;

class FooterPlugin
{
    public function afterToHtml(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        $customCopyrightText = 'Custom Copyright Text Created by Sanamdeep';
        $result = str_replace('<span>Copyright © 2013-present Magento, Inc. All rights reserved.</span>', '<span>' . $customCopyrightText . '</span>', $result);
        
        return $result;
    }
}
