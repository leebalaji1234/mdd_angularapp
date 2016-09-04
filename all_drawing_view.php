<?php
require_once('config.php');
require_once('util.class.php');
require_once('drawing.class.php');  
require_once('drawing_click.class.php'); 
require_once('drawing_view.class.php'); 
  
 if(isset($_REQUEST) && $_REQUEST['drawing_id']){
 	// Clicks area
 	$did = $_REQUEST['drawing_id'];
 	$tbl_clicks = new Drawing_click;
    $tbl_clicks->drawing_id = $_REQUEST['drawing_id'];
    $tbl_clicks->click_ip = $_SERVER['REMOTE_ADDR'];
    $tbl_clicks->created_at = Util::epoch_to_datetime();
    $tbl_clicks->save();
    $tbl_drawing = new Drawing;
    $d = $tbl_drawing->get($_REQUEST['drawing_id']);
    $clicks = $d->clicks+1;
    $d->clicks = $clicks;
    $d->save();
 // clicks ared ends
// views area
    $tbl_views = new Drawing_view;
    if(isset($_COOKIE) && $_COOKIE['drawing_view']){
 			$data = json_decode($_COOKIE['drawing_view'],true);
 			// print_r($data);exit();
 			if(in_array($_REQUEST['drawing_id'], $data)){
 				header('Location: drawing.php?id='.$did);exit;
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
// views area ends

   header('Location: drawing.php?id='.$did);exit;
 }else{
 	header('Location: drawing.php?id='.$did);exit;
 }
  
 
