<?php
namespace Jbcommerce\Helloworld\Controller\Index;

use Magento\Framework\Event\ManagerInterface as EventManager;
use Jbcommerce\Helloworld\Observer\Observerbefore;

class Example extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    protected $title;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        EventManager $eventManager
    ) {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        /*        echo $this->setTitle('Welcome') . "<br>";
                echo $this->getTitle() . "<br>";*/
        $this->_eventManager->dispatch(Observerbefore::EVENT_BEFORE, [Observerbefore::EVENT_DATA => 'test']);
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
