<?php
require_once('config.php');
require_once('util.class.php');
require_once('drawing.class.php');  
require_once('drawing_view.class.php'); 

 if(isset($_REQUEST) && $_REQUEST['drawing_id']){
//  $externalContent = file_get_contents('http://checkip.dyndns.com/');
// preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
// $externalIp = $m[1];

 	$tbl_views = new Drawing_view;
 	// $row = $tbl_views->find('where drawing_id=? and like_ip=?',array($_REQUEST['drawing_id'], $_SERVER['REMOTE_ADDR'])); 
 	  
    // if (!is_null($row->id())) {
    //     echo "disable";exit; 
    //  }else{
 		if(isset($_COOKIE) && $_COOKIE['drawing_view']){
 			$data = json_decode($_COOKIE['drawing_view'],true);
 			// print_r($data);exit();
 			if(in_array($_REQUEST['drawing_id'], $data)){
 				echo "disable";exit; 
 			} 			
 		}
 		 if(!isset($_COOKIE['drawing_view'])){
 		 	$arrCookie[] = $_REQUEST['drawing_id'];
 		 }else{
 		 	$extractdata = json_decode($_COOKIE['drawing_view'],true);
 		 	array_push($extractdata, $_REQUEST['drawing_id']);
 		 	// print_r($extractdata);exit();
 		 	$arrCookie = $extractdata;
 		 }
 		 
 		 // echo serialize($arrCookie);exit;
 		setcookie("drawing_view", json_encode($arrCookie), time() + (365 * 24 * (60 * 60)));
		$tbl_views->drawing_id = $_REQUEST['drawing_id'];
		$tbl_views->view_ip = $_SERVER['REMOTE_ADDR'];
		$tbl_views->created_at = Util::epoch_to_datetime();
		$tbl_views->save();
		$tbl_drawing = new Drawing;
		$d = $tbl_drawing->get($_REQUEST['drawing_id']);
		$views = $d->views+1;
		$d->views = $views;
		$d->save();
		echo "success";exit;
     // }
    
 }else{
 	echo "failure";exit;
 }
  
 

 