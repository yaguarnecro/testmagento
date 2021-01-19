<?php
namespace test\Uno\Model\ResourceModel\Book;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('test\Uno\Model\Book', 'test\Uno\Model\ResourceModel\Book');
    }
}