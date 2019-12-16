<?php
namespace app\index\controller;

use poetry\Poetry;
use think\Controller;

class IndexController extends Controller
{

    /**
     *  用户列表
     * @author sulingling
     * @DateTime 2019-07-09
     * @version  [version]
     * @return   [type]     [description]
     */
    public function index()
    {
        echo Poetry::index();die;
    }
}
