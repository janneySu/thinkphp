<?php

use think\migration\Migrator;

class CreateBottomDesignTable extends Migrator
{
    /**
     *  创建底栏设计表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('bottom_design');
        $table->setId('btm_id')
            ->addColumn('ind_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '行业id'])
            ->addColumn('btm_logo', 'string', ['limit' => 50, 'default' => 0, 'comment' => '底部栏目logo'])
            ->addColumn('guide', 'string', ['limit' => 200, 'default' => '', 'comment' => '新手指南,以json的格式存储'])
            ->addColumn('brand_service', 'string', ['limit' => 200, 'default' => '', 'comment' => '品牌上服务，以json的格式存储'])
            ->addColumn('news_info', 'string', ['limit' => 200, 'default' => '', 'comment' => '新闻资讯，以json的格式存储'])
            ->addColumn('cif_us', 'string', ['limit' => 20, 'default' => '', 'comment' => '联系我们'])
            ->addColumn('email', 'string', ['limit' => 30, 'default' => '', 'comment' => '邮箱'])
            ->addColumn('co_addr', 'string', ['limit' => 50, 'default' => '', 'comment' => '公司地址'])
            ->addColumn('friend_link', 'string', ['limit' => 200, 'default' => '', 'comment' => '友情链接，以json的格式存储'])
            ->addColumn('admin_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '操作人（后台管理员id）'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('底栏设计表')
            ->create();
    }
}
