<?php
namespace Jbcommerce\Helloworld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'jbcommerce_helloworld_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Jbcommerce\Helloworld\Model\Post', 'Jbcommerce\Helloworld\Model\ResourceModel\Post');
    }

}
