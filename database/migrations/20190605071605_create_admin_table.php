<?php

use think\migration\Migrator;

class CreateAdminTable extends Migrator
{
    /**
     *  创建后台用户表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('admin');
        $table->setId('admin_id')
            ->addColumn('admin_name', 'string', ['limit' => 10, 'default' => '', 'comment' => '用户名'])
            ->addColumn('password', 'string', ['limit' => 64, 'default' => '', 'comment' => '用户密码(md5加密)'])
            ->addColumn('ind_id', 'string', ['limit' => 100, 'default' => 0, 'comment' => '行业id(中间使用中文逗号隔开)'])
            ->addColumn('role_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '角色id'])
            ->addColumn('login_ip', 'string', ['limit' => 50, 'default' => 0, 'comment' => '登录ip'])
            ->addColumn('status', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '用户状态  0--启用  1--禁用'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('后台用户表')
            ->create();
    }
}
