<?php
namespace Jbcommerce\Helloworld\Controller\Index;

class Prints extends \Magento\Framework\App\Action\Action
{
    private $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        //echo "sdfs";
        return $this->_pageFactory->create();
    }
}
