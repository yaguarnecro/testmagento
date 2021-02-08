<?php

namespace Test\Uno\Api\Data;

interface BookInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const BOOKID               = 'bookId';
    const AUTOR                 = 'autor';
    const TITLE               = 'title';
    const CONTENT            = 'content';
    const FECHAPUBLICACION            = 'fechaPublicacion';
    const EDITORIAL            = 'editorial';
    const UNIDADESDISPO            = 'unidadesDispo';
    /**#@-*/

        /**
     * Get Autor
     *
     * @return string|null
     */
    public function getAutor();

    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Get FechaPublicacion
     *
     * @return string|null
     */
    public function getFechaPublicacion();
 
     /**
     * Get Editorial
     *
     * @return string|null
     */
    public function getEditorial();
    

    /**
     * Get BookID
     *
     * @return int|null
     */
    public function getBookId();
 

    /**
     * Get UnidadesDispo
     *
     * @return int|null
     */
    public function getUnidadesDispo();


    /**
     * Set Autor
     *
     * @param string $autor
     * @return $this
     */
    public function setAutor($autor);
    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content);

    /**
     * Set Editorial
     *
     * @param string $editorial
     * @return $this
     */
    public function setEditorial($editorial);

    /**
     * Set FechaPublicacion
     *
     * @param int $fechaPublicacion
     * @return $this
     */
    public function setFechaPublicacion($fechaPublicacion);

    /**
     * Set BookID
     *
     * @param int $bookId
     * @return $this
     */
    public function setBookId($bookId);

    /**
     * Set UnidadesDipso
     *
     * @param int $unidadesDispo
     * @return $this
     */
    public function setUnidadesDispo($unidadesDispo);
}