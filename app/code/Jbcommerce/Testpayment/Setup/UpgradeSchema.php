<?php
namespace Jbcommerce\Testpayment\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();   
        $setup->getConnection()->addColumn(
            $setup->getTable('quote_payment'),
            'bankowner',
            [
                'type' => 'text',
                'nullable' => true  ,
                'comment' => 'Bank',
            ]
        );
        $setup->getConnection()->addColumn(
            $setup->getTable('sales_order_payment'),
            'bankowner',
            [
                'type' => 'text',
                'nullable' => true  ,
                'comment' => 'Bank',
            ]
        );
        $setup->endSetup();
  }
}