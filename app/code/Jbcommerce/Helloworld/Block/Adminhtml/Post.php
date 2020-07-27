<?php

namespace Jbcommerce\Helloworld\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_post';
        $this->_blockGroup = 'Jbcommerce_Helloworld';
        $this->_headerText = 'Posts';
        $this->_addButtonLabel = 'Create new Entry';
        parent::_construct();
    }
}
