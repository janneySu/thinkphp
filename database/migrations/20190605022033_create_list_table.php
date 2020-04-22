<?php

use think\migration\Migrator;

class CreateListTable extends Migrator
{
    /**
     *  创建榜单表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('list');
        $table->setId('list_id')
            ->addColumn('ind_id', 'integer', ['signed' => false, 'signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '行业id'])
            ->addColumn('list_name', 'string', ['limit' => 15, 'default' => '', 'comment' => '榜单名称'])
            ->addColumn('list_pic', 'string', ['limit' => 50, 'default' => '', 'comment' => '榜单图片'])
            ->addColumn('admin_id', 'integer', ['signed' => false, 'signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '操作人员id'])
            ->addColumn('oper_time', 'integer', ['signed' => false, 'signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '操作时间'])
            ->addColumn('brand_rank', 'string', ['limit' => 300, 'default' => '', 'comment' => '品牌排名,品牌id和虚拟排名使用json存储'])
            ->addColumn('rank_ruler', 'boolean', ['signed' => false, 'signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '排名规则   1--按品牌浏览量  2--按品牌点赞数量'])
            ->addColumn('list_desc', 'string', ['limit' => 100, 'default' => 100, 'comment' => '榜单描述'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('榜单表')
            ->create();
    }
}
