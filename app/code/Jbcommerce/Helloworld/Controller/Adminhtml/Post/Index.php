<?php

namespace Jbcommerce\Helloworld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('Jbcommerce_Helloworld::posts');
    }

    public function __construct(
        Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend('Blogposts');

        return $resultPage;
    }
}
