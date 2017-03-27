<?php

use Phinx\Migration\AbstractMigration;

class CreateToursTable extends AbstractMigration
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
        $table = $this->table('tours');
        $table->addColumn('name', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('price', 'decimal', [
            'default' => 0,
            'null' => true,
            'precision' => 15,
            'scale' => 2
        ]);
        $table->addColumn('company', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('duration', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('destination', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('address', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('latitude', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
        ]);
        $table->addColumn('longitude', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
        ]);
        $table->addColumn('available_date', 'string', [
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
