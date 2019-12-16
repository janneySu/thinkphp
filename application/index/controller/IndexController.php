<?php
namespace app\index\controller;

use think\Controller;
use xunsearch\XSSearch;

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
        echo "你好";
    }

    public function xunSearch()
    {
        $name = $this->request->get('name', '你好');
        var_dump(XSSearch::xunsearch($name));
    }
}
