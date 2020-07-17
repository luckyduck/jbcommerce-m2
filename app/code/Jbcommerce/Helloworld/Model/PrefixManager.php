<?php

namespace Jbcommerce\Helloworld\Model;

use function preg_match;

class PrefixManager
{
    private $_productResource;

    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Product $productResource
    ) {
        $this->_productResource = $productResource;
    }

    public function updateDescription($product, $prefix)
    {
        if (preg_match("/^$prefix/", $product->getDescription())) {
            return;
        }

        /** @var \Magento\Catalog\Model\Product $product */
        $product->setDescription(sprintf('%s: %s', $prefix, $product->getDescription()));
        $this->_productResource->save($product);
    }
}
