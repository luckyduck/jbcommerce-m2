<?php
namespace Jbcommerce\Helloworld\Controller\Index;

class Example extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $title;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        echo $this->setTitle('Welcome') . "<br>";
        echo $this->getTitle() . "<br>";
    }

    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
