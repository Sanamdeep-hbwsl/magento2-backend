<?php
namespace Sanamdeep\Userstory2\Plugin;

class BreadcrumbPlugin
{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] = "Hummingbird->" . $crumbInfo['label'];
        return [$crumbName, $crumbInfo];
    }
}