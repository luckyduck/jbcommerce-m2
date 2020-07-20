<?php
namespace Jbcommerce\Helloworld\Controller\Index;

use Magento\Framework\App\Action\Context;

class Prints extends \Magento\Framework\App\Action\Action
{
    private $_pageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        //echo "sdfs";
        return $this->_pageFactory->create();

/*        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $productCollection = $objectManager->create('\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory');

        $collection = $productCollection->create()
                        ->addAttributeToSelect('*')
                        ->setPageSize(3)
                        ->load();

        foreach ($collection as $product) {
            echo sprintf("%s<br>", $product->getName());
        }*/

        /*
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

        /** @var \Jbcommerce\Helloworld\Model\Import $import
        $import = $objectManager->create('\Jbcommerce\Helloworld\Model\Import');
        $import->execute();
        */
    }
}
