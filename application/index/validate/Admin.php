<?php
namespace app\index\validate;

use PHPExcel;
use think\Validate;

class Admin extends Validate {

    /**
     *  excel导出
     * @author sulingling
     * @DateTime 2019-07-10
     * @version  [version]
     * @param    array      $params   [要导出的数据]
     * @param    string     $expTitle [文件标题]
     * @return   [type]               [description]
     */
    public function export($params = [], $expTitle = '文件名称') {
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle); //文件名称
        $fileName = $xlsTitle . date('_YmdHis'); //or $xlsTitle 文件名称可根据自己情况设定
        $cellNum  = count($params);

        // 引入核心文件
        require '../extend/PHPExcel/PHPExcel.php';
        $objPHPExcel = new \PHPExcel();
        $objPHPExcel->getActiveSheet(0)
            ->mergeCells('A1:C1')
            ->setCellValue('A1', '表格');
        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A2', '姓名')
            ->setCellValue('B2', '密码')
            ->setCellValue('C2', '行业ID');
        foreach ($params as $num => $param) {
            $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A' . ($num + 3), $param->admin_name)
                ->setCellValue('B' . ($num + 3), $param->password)
                ->setCellValue('C' . ($num + 3), $param->role_id);
        }

        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="' . $xlsTitle . '.xls"');
        //attachment新窗口打印inline本窗口打印
        header("Content-Disposition:attachment;filename=$fileName.xls");
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        return $objWriter->save('php://output');
    }
}