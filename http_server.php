<?php
/**
 * Created by Kinano.
 * User: Huangmeidneg
 * Date: 2018/7/31
 * Time: 上午12:06
 */
$http_server = new swoole_http_server('0.0.0.0',9504);
$http_server->on('request',function ($request,$response){
    var_dump($request->get,$request->post);
    $response->header("Content-Type", "text/html; charset=utf-8");
    $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
});
$http_server->start();