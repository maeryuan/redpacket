<?php

/**
 * 统一返回信息
 * @param $code
 * @param $data
 * @param $msg
 */
function msg($code, $data, $msg) {
    return compact('code', 'data', 'msg');
}

/**
 * 对象转换成数组
 * @param $obj
 */
function objToArray($obj) {
    return json_decode(json_encode($obj), true);
}
