<?php

use think\migration\Migrator;

class CreateUserTable extends Migrator
{

    /**
     *  创建品牌表
     * @author sulingling
     * @DateTimae 2019-06-04
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        // create the table
        $table = $this->table('user');
        $table->setId('user_id')
            ->addColumn('status', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '账号是否启用 0--启用 1--禁止'])
            ->addColumn('is_settled', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否入驻 0--入驻 1--不入驻'])
            ->addColumn('user_name', 'string', ['limit' => 20, 'default' => '', 'comment' => '用户名称'])
            ->addColumn('password', 'string', ['limit' => 64, 'default' => '', 'comment' => '用户密码'])
            ->addColumn('mobile', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '手机号'])
            ->addColumn('join_number', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '加盟咨询数量'])
            ->addColumn('ind_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '行业id'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])

            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('用户信息表')
            ->create();
    }
}
