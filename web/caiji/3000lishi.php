<?php
	$url="http://weixin.sogou.com/weixin?type=2&query=%E7%94%9F%E6%B4%BB%E6%9C%8D%E5%8A%A1&fr=sgsearch&ie=utf8&_ast=1434807808&_asf=null&w=01019900&cid=null&sut=1912&sst0=1434848412703&lkt=0%2C0%2C0";
	//$data=curlGet($url);
	print_r($url);
	print_r($data);
	die();
	$users=geturls($url);
	//print_r($users);
	//getcontents($users[2]);
	
	
	
	function getcontents($contenturl){
		$data=curlGet($contenturl);
		preg_match('/<title>(.*)<\/title>/', $data, $title);
		preg_match('/<div class=\"rich_media_content\" id=\"js_content\">(.*)<\/span><\/p><\/div>/s', $data, $content);
		print_r($title);
		print_r($content);
	}
	
	function geturls($url){
		$data=curlGet($url);
		print_r($data);
		preg_match_all('/http:\/\/mp.weixin.qq.com\/s(.*)#rd/', $data, $urls);
		$urls=array_unique($urls[0]);
		//return $urls;
	}
	
	function curlGet($url){
		$ch = curl_init();
		$header = "Accept-Charset: utf-8";
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_AUTOREFERER, 1);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$temp = curl_exec($ch);
		return $temp;
	}