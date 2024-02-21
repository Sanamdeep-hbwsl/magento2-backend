<?php

namespace Sanamdeep\UserStory19\ViewModel;

use Magento\Catalog\Model\Product;
use Magento\Checkout\Model\Session as CheckoutSession;

class Service
{
    protected $checkoutSession;
    protected $cart;

    public function __construct(
        CheckoutSession $checkoutSession,
        \Magento\Checkout\Model\Cart $cart
    ) {
        $this->cart = $cart;
        $this->checkoutSession = $checkoutSession;
    }

    public function getCrossSellProducts()
    {
        $crossSellProducts = [];

        $cartItems = $this->cart->getQuote()->getAllItems();
        if ($cartItems) {
            foreach ($cartItems as $item) {
                $product = $item->getProduct();
                $crossList = $product->getCrossSellProducts();

                if ($crossList && !empty($crossList)) {
                    foreach ($crossList as $crossSellProduct) {
                        $crossSellProducts[] = $crossSellProduct->getSku();
                    }
                }
            }
        }
        $crossSellProducts = array_slice($crossSellProducts, 0, 2);
        return $crossSellProducts;
    }
}
