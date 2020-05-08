# http
http 相关操作类


```
<?php

require_once('../vendor/autoload.php');

use Rhttp\Get;
use Rhttp\Post;
use Rhttp\Redirect;

$url = 'https://www.baidu.com';
$data = array('ret'=>'222','msg'=>'3333');

// $ret = Get::send($url);
// $ret1 = Post::send($url, $data);

// var_dump($ret, $ret1);

$msg = 'hello world';
// Redirect::header($url);
Redirect::script($msg, $url);
```