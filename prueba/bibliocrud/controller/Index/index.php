<?php 
namespace prueba\bibliocrud\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
{
       $this->_pageFactory = $pageFactory;
       return parent::_construct($context);
}

    public function execute()
    {
       echo "Hellow world";
       // return $this->_pageFactory->create();
       exit;
    } 
}