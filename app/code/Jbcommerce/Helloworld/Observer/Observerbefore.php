<?php

namespace Jbcommerce\Helloworld\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use function var_dump;

class Observerbefore implements ObserverInterface
{
    const EVENT_BEFORE = 'my_module_event_before';
    const EVENT_DATA = 'myeventdata';

    public function execute(Observer $observer)
    {
        $eventData = $observer->getData(self::EVENT_DATA);
        var_dump($eventData);
    }
}
