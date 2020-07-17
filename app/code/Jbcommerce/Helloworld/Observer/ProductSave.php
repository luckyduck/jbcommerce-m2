<?php

namespace Jbcommerce\Helloworld\Observer;

use Jbcommerce\Helloworld\Model\PrefixManager;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class ProductSave implements ObserverInterface
{
    private $_prefixManager;

    public function __construct(
        PrefixManager $prefixManager
    ) {
        $this->_prefixManager = $prefixManager;
    }

    public function execute(Observer $observer)
    {
        $product = $observer->getProduct();
        $this->_prefixManager->updateDescription($product, "XYZ");
    }
}
