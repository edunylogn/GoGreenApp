<?php

use Phinx\Migration\AbstractMigration;

class CreateTransportsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('transports');
        $table->addColumn('name', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('price_day', 'decimal', [
            'default' => 0,
            'null' => true,
            'precision' => 15,
            'scale' => 2
        ]);
        $table->addColumn('supplier', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('brand', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('type', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('seats', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('doors', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('available_date', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        $table->create();
    }
}
