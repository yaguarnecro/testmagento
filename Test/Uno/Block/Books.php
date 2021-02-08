<?php

namespace Test\Uno\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Test\Uno\Model\ResourceModel\Book\Collection as BookCollection;
use \Test\Uno\Model\ResourceModel\Book\CollectionFactory as BookCollectionFactory;
use \Test\Uno\Model\Book;

class Books extends Template
{
    /**
     * CollectionFactory
     * @var null|CollectionFactory
     */
    protected $_bookCollectionFactory = null;

    /**
     * Constructor
     *
     * @param Context $context
     * @param BookCollectionFactory $bookCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        BookCollectionFactory $bookCollectionFactory,
        array $data = []
    ) {
        $this->_bookCollectionFactory = $bookCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return Book[]
     */
    public function getBooks()
    {
        /** @var BookCollection $bookCollection */
        $bookCollection = $this->_bookCollectionFactory->create();
        //$bookCollection->addFieldToSelect('*')->load();
        //return $bookCollection->getItems();
        return $bookCollection;
    }

    /**
     * For a given post, returns its url
     * @param Book $book
     * @return string
     */
    public function getBookUrl(
        Book $book
    ) {
        return '/uno/book/view/id?bookId=' . $book->getBookId();
    }

}