<?php
namespace Jbcommerce\Helloworld\Controller\Index;

use Magento\Framework\App\Action\Context;

class Settings extends \Magento\Framework\App\Action\Action
{
    private $_pageFactory;

    const PATH_ISNABLED = 'helloworld/general/enable';
    const PATH_DISPLAY_TEXT = 'helloworld/general/display_text';

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

        /** @var \Magento\Framework\App\Config\ScopeConfigInterface $settingsScope */
        $settingsScope = $objectManager->create('\Magento\Framework\App\Config\ScopeConfigInterface');

        if ($settingsScope->getValue(self::PATH_ISNABLED)) {
            echo sprintf("Titel: %s", $settingsScope->getValue(self::PATH_DISPLAY_TEXT));
        }
    }
}
