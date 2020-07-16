<?php
namespace Jbcommerce\Helloworld\Block;

use Magento\Framework\View\Element\Template;
use Jbcommerce\Helloworld\Model\PostFactory;

class Prints extends \Magento\Framework\View\Element\Template
{
    private $_postFactory;

    public function __construct(
        Template\Context $context,
        PostFactory $postFactory,
        array $data = []
    ) {
        $this->_postFactory = $postFactory;
        parent::__construct($context, $data);
    }

    public function getPosts()
    {
        /** @var \Jbcommerce\Helloworld\Model\Post $post */
        $post = $this->_postFactory->create();
        return $post->getCollection();
    }
}
