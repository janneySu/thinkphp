<?php

use think\migration\db\Column;
use think\migration\Migrator;

class EditOperationalLogTable extends Migrator
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
        $table  = $this->table('operational_log');
        $column = $table->hasColumn('log_id');
        if ($column) {
            $table->changeColumn('log_id', 'integer', ['signed' => false, 'comment' => '操作日志id', 'identity' => true]);
        }
    }
}
