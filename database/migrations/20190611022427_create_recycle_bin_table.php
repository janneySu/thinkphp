<?php

use think\migration\Migrator;

class CreateRecycleBinTable extends Migrator
{
    /**
     *  创建回收站表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('recycle_bin');
        $table->setId('rec_id')
            ->addColumn('del_type', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除类型 1--品牌 2--内容 3--后台用户 4--入驻用户'])
            ->addColumn('ind_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '所属行业id（筛选用）'])
            ->addColumn('obj_id', 'string', ['limit' => 50, 'default' => '', 'comment' => '对象id(表的主键id)'])
            ->addColumn('obj_name', 'string', ['limit' => 200, 'default' => '0', 'comment' => '对象名称'])
            ->addColumn('admin_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '操作人id'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('回收站表')
            ->save();
    }
}
