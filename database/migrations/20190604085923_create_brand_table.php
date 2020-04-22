<?php

use think\migration\Migrator;

class CreateBrandTable extends Migrator
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
        $table = $this->table('brand');
        $table->setId('brand_id')
            ->addColumn('ind_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '行业id'])
            ->addColumn('user_id', 'integer', ['signed' => false, 'limit' => 50, 'default' => 0, 'comment' => '归属用户，（前台用户id）'])
            ->addColumn('brand_naturn', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '品牌性质   1---vip品牌 2---普通品牌'])
            ->addColumn('open_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '开通时间'])
            ->addColumn('end_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '截止时间'])
            ->addColumn('brand_name', 'string', ['limit' => 50, 'default' => '', 'comment' => '品牌名称'])
            ->addColumn('brand_tag', 'string', ['limit' => 100, 'default' => '', 'comment' => '品牌标语'])
            ->addColumn('brand_reg', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '品牌注册机制 1--国内  2--国外'])
            ->addColumn('addr', 'string', ['limit' => 50, 'default' => 0, 'comment' => '地址表的id'])
            ->addColumn('aut_status', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '认证状态  1---已认证  2--未认证'])
            ->addColumn('brand_logo', 'string', ['limit' => 50, 'default' => '', 'comment' => '品牌logo'])
            ->addColumn('co_desc', 'string', ['limit' => 2000, 'default' => '', 'comment' => '公司简介'])
            ->addColumn('brand_src', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '品牌来源  1--后台录入  2--用户入驻'])
            ->addColumn('mgt_way', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '经营方式  1--自营连锁  2--加盟连锁'])
            ->addColumn('sp_mode', 'string', ['limit' => 50, 'default' => '', 'comment' => '推广方式'])
            ->addColumn('status', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '状态  1--未通过  2--通过  3--已驳回'])
            ->addColumn('reason', 'string', ['limit' => 100, 'default' => '', 'comment' => '未通过原因'])
            ->addColumn('opeate_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '审核人员id，也就是内容后台用户表里面的id'])
            ->addColumn('admin_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '添加人员id，也就是内容后台用户表里面的id'])
            ->addColumn('req_money', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '加盟要求金额区间'])
            ->addColumn('req_desc', 'string', ['limit' => 300, 'default' => '', 'comment' => '加盟要求描述'])
            ->addColumn('sup_id', 'string', ['limit' => 300, 'default' => '', 'comment' => '加盟支持，用逗号区分'])
            ->addColumn('sup_desc', 'string', ['limit' => 300, 'default' => '', 'comment' => '加盟支持描述'])
            ->addColumn('co_url', 'string', ['limit' => 50, 'default' => '', 'comment' => '公司网址'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('品牌表');
        $table->create();
    }
}
