<?php
namespace Rhttp;


class Get {


    /**
     * @param $url 请求地址
     */
    public static function send($url)
    {
    	$ch = curl_init($url);
        //设置超时
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_NOBODY, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,FALSE);
        //curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        //运行curl
        $output = curl_exec($ch);
        curl_getinfo($ch);
        curl_close($ch);
        return $output;
    }

}
?>