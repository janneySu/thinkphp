<?php

use think\migration\db\Column;
use think\migration\Migrator;

class EditBootomDesignTable extends Migrator
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
    public function up()
    {
        $table  = $this->table('bottom_design');
        $column = $table->hasColumn('btm_id');
        if ($column) {
            $table->changeColumn('btm_id', 'integer', ['signed' => false, 'comment' => '底部栏id', 'identity' => true]);
        }
    }
}
