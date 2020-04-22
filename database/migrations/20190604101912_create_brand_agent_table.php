<?php

use think\migration\Migrator;

class CreateBrandAgentTable extends Migrator
{

    public function change()
    {
        $table = $this->table('brand_agent');
        $table->setId('agent_id')
            ->addColumn('brand_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '品牌id'])
            ->addColumn('register', 'string', ['limit' => 50, 'default' => '', 'comment' => '品牌商标注册证书'])
            ->addColumn('co_name', 'string', ['limit' => 20, 'default' => '', 'comment' => '公司名称'])
            ->addColumn('bus_lic', 'string', ['limit' => 50, 'default' => '', 'comment' => '营业执照'])
            ->addColumn('co_addr', 'string', ['limit' => 100, 'default' => '', 'comment' => '公司地址'])

            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('品牌认证信息')
            ->create();
    }
}
