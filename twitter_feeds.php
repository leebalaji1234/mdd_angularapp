<?php
require_once('config.php');
require_once('util.class.php');  
require_once('sponsor_detail.class.php');
include('twitter_plugin/tweet2json.php');

if(isset($_REQUEST['sponsor_name']) && $_REQUEST['sponsor_name'] != '' ){

	$tbl = new Sponsor_detail;
	 
	$s = $tbl->find('where twitter_username =?',array($_REQUEST['sponsor_name']));

 
		 	 
	$res = user_tweets($s->twitter_username, 1, TRUE);
	$resarr= json_decode($res,true);

	 
	// print_r($resarr);exit;
	$newarr['tweets']['img'] = $resarr['tweets'][0]['img'];	 	 
	$newarr['tweets']['timestamp'] = $resarr['tweets'][0]['date'];	 
	$newarr['tweets']['id'] = $resarr['tweets'][0]['id'];	 	 
	$newarr['tweets']['text'] = str_replace('lang="en" data-aria-label-part="0">',"",strip_tags($resarr['tweets'][0]['text']));

    echo json_encode($newarr);exit;
	 


}else{
  echo 'error';exit;
}