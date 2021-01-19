<?php

namespace test\Uno\Block;

use \Magento\Framework\Exception\LocalizedException;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Framework\Registry;
use \test\Uno\Model\Book;
use \test\Uno\Model\BookFactory;
use \test\Uno\Controller\Book\View as ViewAction;

class View extends Template
{
    /**
     * Core registry
     * @var Registry
     */
    protected $_coreRegistry;

    /**
     * Post
     * @var null|Book
     */
    protected $_book = null;

    /**
     * PostFactory
     * @var null|PostFactory
     */
    protected $_bookFactory = null;

    /**
     * Constructor
     * @param Context $context
     * @param Registry $coreRegistry
     * @param BookFactory $bookCollectionFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        BookFactory $bookFactory,
        array $data = []
    ) {
        $this->_bookFactory = $bookFactory;
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    /**
     * Lazy loads the requested post
     * @return Book
     * @throws LocalizedException
     */
    public function getBook()
    {
        if ($this->_book === null) {
            /** @var Book $book */
            $book = $this->_bookFactory->create();
            $book->load($this->_getBookId());

            if (!$book->getBookId()) {
                throw new LocalizedException(__('Book not found'));
            }

            $this->_book = $book;
        }
        return $this->_book;
    }

    /**
     * Retrieves the book id from the registry
     * @return int
     */
    protected function _getBookId()
    {
        return (int) $this->_coreRegistry->registry(
            ViewAction::REGISTRY_KEY_BOOKID
        );
    }
}