<?php

namespace Jbcommerce\Helloworld\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;

/*

route
app/code/Jbcommerce/HelloWorld/etc/adminhtml/routes.xml

menu
app/code/Jbcommerce/Helloworld/etc/adminhtml/menu.xml

controller
app/code/Jbcommerce/Helloworld/Controller/Adminhtml/Post/Index.php

block
app/code/Jbcommerce/Helloworld/Block/Adminhtml/Post.php

layout
app/code/Jbcommerce/Helloworld/view/adminhtml/layout/helloworld_post_index.xml

 */

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
