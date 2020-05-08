<?php
namespace Rhttp;


class Post {


    /**
     * @param $url 请求地址
     * @param $postData array 请求参数
     */
    public static function send($url,$data=array())
    {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ;
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$output = curl_exec($ch);
		curl_close($ch);
		return $output;
	}

}
?>