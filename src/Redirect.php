<?php
namespace Rhttp;


class Redirect {


    /**
     * @param $url 跳转地址
     */
    public static function header($url)
    {
        header("location: {$url}");
        die;
    }


    /**
     * @param $msg 弹出信息
     * @param $url 跳转地址
     */
    public static function script($msg, $url)
    {
        echo "<script type='text/javascript'>alert('{$msg}');window.location.href='{$url}'</script>";
        die;
    }

}
?>