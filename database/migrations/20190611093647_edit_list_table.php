<?php

use think\migration\Migrator;

class EditListTable extends Migrator
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
        $users  = $this->table('list');
        $column = $users->hasColumn('list_id');
        if ($column) {
            $users->changeColumn('list_id', 'integer', ['signed' => false, 'limit' => 11, 'comment' => '榜单编号', 'identity' => true])->save();
        }
    }
}
