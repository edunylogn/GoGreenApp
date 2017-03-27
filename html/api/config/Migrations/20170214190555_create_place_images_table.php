<?php

use Phinx\Migration\AbstractMigration;

class CreatePlaceImagesTable extends AbstractMigration
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
        $table = $this->table('place_images');
        $table->addColumn('legend', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('place_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('image_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('active', 'boolean', [
            'default' => true,
            'null' => false
        ]);
        $table->addColumn('position', 'integer', [
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
        $table->addForeignKey('place_id', 'places');
        $table->addForeignKey('image_id', 'features');
        $table->create();
    }
}
