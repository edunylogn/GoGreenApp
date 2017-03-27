<?php

use Phinx\Migration\AbstractMigration;

class CreateRoomsPricesDetailsTable extends AbstractMigration
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
        $table = $this->table('room_price_details');
        $table->addColumn('price', 'decimal', [
            'default' => 0,
            'null' => true,
            'precision' => 15,
            'scale' => 2
        ]);
        $table->addColumn('special_price', 'decimal', [
            'default' => 0,
            'null' => true,
            'precision' => 15,
            'scale' => 2
        ]);
        $table->addColumn('rooms_number', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('rooms_avaliable', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('room_size', 'string', [
            'default' => null,
            'null' => false,
            'limit' => 255
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
        $table->addColumn('place_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('room_category_id', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addForeignKey('place_id', 'places');
        $table->addForeignKey('room_category_id', 'room_categories');
        $table->create();
    }
}
