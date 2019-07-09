<?php

use think\migration\Migrator;

class CreateAdvertisementTable extends Migrator
{
    /**
     *  创建广告管理表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('advertisement');
        $table->setId('ad_id')
            ->addColumn('ind_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '行业id'])
            ->addColumn('ad_name', 'string', ['limit' => 50, 'default' => '', 'comment' => '广告名称'])
            ->addColumn('ad_position', 'string', ['limit' => 20, 'default' => '', 'comment' => '广告位置，中间用逗号隔开'])
            ->addColumn('link_type', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '广告链接类型   1--品牌详情  2--活动详情  3--外部链接'])
            ->addColumn('brand_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '品牌id'])
            ->addColumn('act_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '活动id'])
            ->addColumn('link_addr', 'string', ['limit' => 50, 'default' => 0, 'comment' => '链接地址'])
            ->addColumn('admin_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '操作人员id(后台登陆者id)'])
            ->addColumn('on_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '上线时间'])
            ->addColumn('off_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '下线时间'])
            ->addColumn('ad_status', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '广告状态  0--未上线，1--已上线，2--已下线'])
            ->addColumn('click_num', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '点击量'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('广告管理表')
            ->create();
    }
}
