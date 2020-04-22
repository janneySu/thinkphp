<?php

use think\migration\Migrator;

class CreateInformationTable extends Migrator
{
    /**
     *  创建咨询表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('information');
        $table->setId('info_id')
            ->addColumn('title', 'string', ['limit' => 30, 'default' => '', 'comment' => '标题'])
            ->addColumn('outline', 'string', ['limit' => 100, 'default' => '', 'comment' => '概要'])
            ->addColumn('class_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '分类id'])
            ->addColumn('author', 'string', ['limit' => 10, 'default' => '', 'comment' => '作者'])
            ->addColumn('source', 'string', ['limit' => 100, 'default' => '', 'comment' => '来源'])
            ->addColumn('is_rec', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否推荐，0--不推荐，1--推荐'])
            ->addColumn('rel_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '发布日期'])
            ->addColumn('dis_form', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '展示形式  1--无图   2--一大图'])
            ->addColumn('cover_url', 'string', ['limit' => 50, 'default' => '', 'comment' => '文章封面图地址'])
            ->addColumn('art_desc', 'text', ['default' => '', 'comment' => '文章内容'])
            ->addColumn('rel_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '文章发布人(后台用户ID)'])
            ->addColumn('exam_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '文章审核人(后台用户ID)'])
            ->addColumn('thumb', 'string', ['limit' => 50, 'default' => '', 'comment' => '缩略图地址'])
            ->addColumn('status', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '当前状态  0--未审核  1--已通过  2--已驳回'])
            ->addColumn('rea_reject', 'string', ['limit' => 100, 'default' => '', 'comment' => '驳回原因'])
            ->addColumn('ind_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '行业id'])
            ->addColumn('browse_num', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '浏览量'])
            ->addColumn('points_num', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '点赞'])
            ->addColumn('clap_brick', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '拍砖'])

            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('资讯表')
            ->create();
    }
}
