<?php

namespace Jbcommerce\Helloworld\Plugin\Controller;

class ExamplePlugin
{
    public function beforeSetTitle(\Jbcommerce\Helloworld\Controller\Index\Example $subject, $title)
    {
        $title = $title . " to ";
        echo __METHOD__ . "<br>";

        return [$title];
    }

    public function afterGetTitle(\Jbcommerce\Helloworld\Controller\Index\Example $subject, $result)
    {
        echo __METHOD__ . "<br>";

        return "<h1>" . $result . 'Magento 2 plugin' . "</h1>";
    }

    public function aroundGetTitle(\Jbcommerce\Helloworld\Controller\Index\Example $subject, callable $proceed)
    {
        echo __METHOD__ . "<br>";
        $result = $proceed();
        echo __METHOD__ . "<br>";

        return $result;
    }
}
