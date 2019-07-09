<?php

use think\migration\Migrator;

class CreateClassificationTable extends Migrator
{
    /**
     *  创建分类管理表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('classification');
        $table->setId('class_id')
            ->addColumn('class_name', 'string', ['limit' => 100, 'default' => '', 'comment' => '分类名称'])
            ->addColumn('class_label', 'string', ['limit' => 200, 'default' => '', 'comment' => '分类标签，中间使用逗号隔开'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('分类管理')
            ->create();
    }
}
