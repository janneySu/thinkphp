<?php
namespace app\index\controller;

use app\index\model\AdminModel;

class IndexController {

    /**
     *  用户列表
     * @author sulingling
     * @DateTime 2019-07-09
     * @version  [version]
     * @return   [type]     [description]
     */
    public function index() {
        $adminModel = new AdminModel();
        $adminInfo  = $adminModel->info();
        echo '<pre>';
        print_r($adminInfo);die;
    }

    public function hello($name = 'ThinkPHP5') {
        return 'hello,' . $name;
    }
}
