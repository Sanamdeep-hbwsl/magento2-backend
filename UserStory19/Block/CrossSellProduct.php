<?php

namespace Sanamdeep\UserStory19\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Sanamdeep\UserStory19\ViewModel\Service;

class CrossSellProduct extends Template
{
    protected $crossProducts;
    protected $cart;
    public function __construct(
        Service $crossProducts,
        Context $context,
        array $data = []
    ) {
        $this->crossProducts = $crossProducts;
        parent::__construct($context, $data);
    }

    public function getProducts()
    {
        // dump($this->crossProducts->getCrossSellProducts());
        return $this->crossProducts->getCrossSellProducts();
    }
}
