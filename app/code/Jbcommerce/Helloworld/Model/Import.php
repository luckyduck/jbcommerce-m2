<?php

namespace Jbcommerce\Helloworld\Model;

use function var_dump;

class Import
{
    private $_importSource;

    public function __construct(
        \Jbcommerce\Helloworld\Api\ImportSourceInterface $importSource
    )
    {
        $this->_importSource = $importSource;
    }

    public function execute()
    {
        $products = $this->_importSource->getImportData();
        var_dump($products);

        /*foreach ($products as $product) {
            // do something...
        }*/

        echo "Produkte importiert<br>";
    }
}
