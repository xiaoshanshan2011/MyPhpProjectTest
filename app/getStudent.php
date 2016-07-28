<?php
/**
 * Created by PhpStorm.
 * User: 陈俊山
 * Date: 2016/7/27
 * Time: 18:56
 */

//require_once('utils/Response.php');
require '../utils/Response.php';

$code = $_POST["name"];
if (empty($code) || $code != "xiaoshanshan") {
    return Response::show("402", "参数错误");
} else {
    $result = array(
        'name' => 'xiaoshanshan',
        'userid' => '11111111111111111111',
        'age' => '26',
        'sex' => '男',
        'headimage' => 'http://c.hiphotos.baidu.com/image/pic/item/f7246b600c3387448982f948540fd9f9d72aa0bb.jpg'
    );
    Response::json(401, '访问成功', $result);
}
