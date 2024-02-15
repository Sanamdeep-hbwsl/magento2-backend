<?php
namespace Sanamdeep\Userstory4\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\UrlRewrite\Model\UrlRewriteFactory;

class InstallData implements InstallDataInterface
{
    private $urlRewriteFactory;

    public function __construct(UrlRewriteFactory $urlRewriteFactory)
    {
        $this->urlRewriteFactory = $urlRewriteFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $this->createContactUsUrlRewrite();
        $setup->endSetup();
    }

    private function createContactUsUrlRewrite()
    {
        $urlRewrite = $this->urlRewriteFactory->create();
        $urlRewrite->setStoreId(1); 
        $urlRewrite->setEntityType('custom');
        $urlRewrite->setRequestPath('contactuspage.html');
        $urlRewrite->setTargetPath('contact/index/index');
        $urlRewrite->setRedirectType(301);
        $urlRewrite->setDescription('Redirect /contactuspage.html to Contact Us page');
        $urlRewrite->save();
    }
}
