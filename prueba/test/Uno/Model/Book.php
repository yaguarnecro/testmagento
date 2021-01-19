<?php

namespace test\Uno\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \test\Uno\Api\Data\BookInterface;

/**
 * Class File
 * @package test\Uno\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Book extends AbstractModel implements BookInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'test_book_book';

    /**
     * Book Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('test\Uno\Model\ResourceModel\Book');
    }


    /**
     * Get Autor
     *
     * @return string|null
     */
    public function getAutor()
    {
        return $this->getData(self::AUTOR);
    }

    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Get Editorial
     *
     * @return string|null
     */
    public function getEditorialt()
    {
        return $this->getData(self::EDITORIAL);
    }

    /**
     * Get FechaPublicacion
     *
     * @return string|null
     */
    public function getFechaPublicacion()
    {
        return $this->getData(self::FECHAPUBLICACION);
    }

    /**
     * Get BookID
     *
     * @return int|null
     */
    public function getBookId()
    {
        return $this->getData(self::BOOKID);
    }

    /**
     * Get UnidadesDispo
     *
     * @return int|null
     */
    public function getUnidadesDispo()
    {
        return $this->getData(self::UNIDADESDISPO);
    }



    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getBookId()];
    }


    /**
     * Set Autor
     *
     * @param string $autor
     * @return $this
     */
    public function setAutor($autor)
    {
        return $this->setData(self::AUTOR, $autor);
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Set Editorial
     *
     * @param string $editorial
     * @return $this
     */
    public function setEditorial($editorial)
    {
        return $this->setData(self::EDITORIAL, $editorial);
    }

    /**
     * Set FechaPublicacion
     *
     * @param string $fechapublicacion
     * @return $this
     */
    public function setFechaPublicacion($fechapublicacion)
    {
        return $this->setData(self::FECHAPUBLICACION, $fechapublicacion);
    }

    /**
     * Set BookID
     *
     * @param int $bookId
     * @return $this
     */
    public function setBookId($bookId)
    {
        return $this->setData(self::BOOKID, $bookId);
    }
    
    /**
     * Set UnidadesDispo
     *
     * @param int $unidadesDispo
     * @return $this
     */
    public function setUnidadesDispo($unidadesDispo)
    {
        return $this->setData(self::UNIDADESDISPO, $unidadesDispo);
    }
}