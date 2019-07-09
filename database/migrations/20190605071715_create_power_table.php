<?php

use think\migration\Migrator;

class CreatePowerTable extends Migrator
{

    /**
     * 创建权限表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('power');
        $table->setId('power_id')
            ->addColumn('power_name', 'string', ['limit' => 50, 'default' => '', 'comment' => '权限名称'])
            ->addColumn('power_way', 'string', ['limit' => 100, 'default' => '', 'comment' => '权限方法(模块/控制器/方法名)'])
            ->addColumn('power_pid', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '权限的上一级id'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->addIndex(['power_way'], ['unique' => true])
            ->setComment('权限表')
            ->create();
    }
}
