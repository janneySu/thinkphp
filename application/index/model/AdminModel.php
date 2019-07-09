<?php
namespace app\index\model;

use think\Model;

class AdminModel extends Model {

    /**
     *  查看用户表里面所有的数据
     * @author sulingling
     * @DateTime 2019-07-09
     * @version  [version]
     * @return   [type]     [description]
     */
    public static function info() {
        return self::all();
    }
}