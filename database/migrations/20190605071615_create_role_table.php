<?php

use think\migration\Migrator;

class CreateRoleTable extends Migrator
{
    /**
     *  创建角色表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('role');
        $table->setId('role_id')
            ->addColumn('role_name', 'string', ['limit' => 50, 'default' => '', 'comment' => '角色名称'])
            ->addColumn('role_desc', 'string', ['limit' => 200, 'default' => '', 'comment' => '角色描述'])
            ->addColumn('admin_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '操作者(后台管理者id)'])
            ->addColumn('power_id', 'text', ['default' => '', 'comment' => '权限id，使用逗号拼接'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('角色表')
            ->save();
    }
}
