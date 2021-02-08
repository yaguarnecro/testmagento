<?php
namespace Test\Uno\Model\ResourceModel\Book;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Test\Uno\Model\Book', 'Test\Uno\Model\ResourceModel\Book');
    }
}