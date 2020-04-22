<?php

use think\migration\Migrator;

class CreateActivityTable extends Migrator
{
    /**
     *  创建十大品牌表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('activity');
        $table->setId('act_id')
            ->addColumn('ind_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '活动id'])
            ->addcolumn('act_name', 'string', ['limit' => 50, 'default' => '', 'comment' => '活动名称'])
            ->addColumn('act_desc', 'string', ['limit' => 200, 'default' => '', 'comment' => '活动描述'])
            ->addColumn('brand_rank', 'string', ['limit' => 100, 'default' => '', 'comment' => '品牌排名 是品牌id和品牌排名以json格式入库的'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('十大品牌表')
            ->create();
    }
}
