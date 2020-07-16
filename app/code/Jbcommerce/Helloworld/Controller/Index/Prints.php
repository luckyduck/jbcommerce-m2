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
    }
}
