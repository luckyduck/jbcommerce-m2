<?php

namespace Jbcommerce\Eanbarcode\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Magento\Catalog\Model\ProductRepository $productRepository,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        $this->_productRepository = $productRepository;
        $this->_jsonFactory = $resultJsonFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->_jsonFactory->create();
        $id = (int)$this->getRequest()->getParam('product_id');
        $productObj = $this->getProductById($id);
        if (!$id) {
            return $result->setData(['ean' => 0]);
        }

        $data = [
            'eannumber' => 123456
        ];

        return $result->setData($data);
    }

    public function getProductById($id)
    {
        return $this->_productRepository->getById($id);
    }

    public function getProductEanNumber($id)
    {
        $product = $this->getProductById($id);
        return $product->getEanBarcode();
    }
}
