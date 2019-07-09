<?php

use think\migration\Migrator;

class CreateHotWordsTable extends Migrator
{
    /**
     *  热词管理表
     * @author sulingling
     * @DateTimae 2019-06-05
     * @version   [version]
     * @return    [type]     [description]
     */
    public function change()
    {
        $table = $this->table('hot_words');
        $table->setId('hot_id')
            ->addColumn('ind_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '行业id'])
            ->addColumn('hot_words', 'string', ['limit' => 200, 'default' => '', 'comment' => '热搜词，以json格式入库的'])
            ->addColumn('user_id', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '操作人员id'])
            ->addColumn('oper_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '操作时间'])
            ->addColumn('strat_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '开始时间'])
            ->addColumn('end_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '结束时间'])
            ->addColumn('hot_position', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '热词位置--组件id'])
            ->addColumn('create_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '修改时间'])
            ->addColumn('del_time', 'integer', ['signed' => false, 'limit' => 11, 'default' => 0, 'comment' => '删除时间'])
            ->addColumn('is_del', 'boolean', ['signed' => false, 'limit' => 1, 'default' => 0, 'comment' => '是否删除  0--不删除  1--删除，放入回收站'])
            ->setComment('热词管理表')
            ->create();
    }
}
