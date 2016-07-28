<?php
/**
 * Created by PhpStorm.
 * User: SHAN
 * Date: 2016/1/30
 * Time: 16:48
 */


class Response{
    public static function json($code,$message,$data=array()){
        if(!is_numeric($code)){
            return '';
        }
        $result = array(
            'code'=>$code,
            'message'=>$message,
            'data'=>$data
        );
        $data = json_encode($result);
        /*对数据进行解码*/
        $data=preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $data);
        echo $data;
        exit;
    }

    public static function show($code,$message){
        if(!is_numeric($code)){
            return '';
        }
        $result = array(
            'code'=>$code,
            'message'=>$message,
        );
        /*对数据进行解码*/
        $result=preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2BE', 'UTF-8', pack('H4', '\\1'))", $result);
        echo json_encode($result);
        exit;
    }
}