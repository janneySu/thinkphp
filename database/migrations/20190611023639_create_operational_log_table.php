<?php

use think\migration\Migrator;

class CreateOperationalLogTable extends Migrator
{
    /**
     *  创建操作日志表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('operational_log');
        $table->setId('log_id')
            ->addColumn('ind_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '行业id'])
            ->addColumn('table_name', 'string', ['limit' => 20, 'default' => '', 'comment' => '表名'])
            ->addColumn('login_ip', 'string', ['limit' => 50, 'default' => '', 'comment' => '登录ip'])
            ->addColumn('admin_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '操作者id'])
            ->addColumn('operate_type', 'string', ['limit' => 20, 'default' => '', 'comment' => '操作类型'])
            ->addColumn('operate_content', 'string', ['limit' => 200, 'default' => '', 'comment' => '操作内容'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('操作日志表')
            ->save();
    }
}
