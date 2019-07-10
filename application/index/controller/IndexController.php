<?php
namespace app\index\controller;

use app\index\model\AdminModel;
use app\index\validate\Admin;
use think\Controller;

class IndexController {

    /**
     *  用户列表
     * @author sulingling
     * @DateTime 2019-07-09
     * @version  [version]
     * @return   [type]     [description]
     */
    public function index() {
        $admin      = new Admin();
        $adminModel = new AdminModel();
        $adminInfo  = $adminModel->info();
        print_r($admin->export($adminInfo));die;
    }
}
