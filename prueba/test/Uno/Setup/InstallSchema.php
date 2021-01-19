<?php

namespace test\Uno\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

/**
 * Class InstallSchema
 *
 * @package Toptal\Blog\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * Install Blog Posts table
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('test_uno_books');

        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'bookId',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'ID'
                )
                ->addColumn(
                    'autor',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Autor'
                )
                ->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Title'
                )
                ->addColumn(
                    'content',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Content'
                )
                ->addColumn(
                    'fechaPublicacion',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'FechaPublicacion'
                )
                ->addColumn(
                    'editorial',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Editorial'
                )
                ->addColumn(
                    'unidadesDispo',
                    Table::TYPE_INT,
                    null,
                    ['nullable' => false],
                    'UnidadesDipso'
                )
                ->setComment('test Uno - Books');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}