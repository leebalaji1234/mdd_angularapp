<?php
require_once('config.php');
require_once('util.class.php');  
 $res =& $db->query("select * from mp_cities");
  // $row =& $res->fetchRow(DB_FETCHMODE_ASSOC); 
// $row =& $res->fetchRow(DB_FETCHMODE_ASSOC); 
$allcities = [];
$i=0;
  while ($row =& $res->fetchRow(DB_FETCHMODE_OBJECT)) {
     $allcities[$i]['id'] =$row->id; 
     $allcities[$i]['name'] =$row->name; 
     $allcities[$i]['state_id'] =$row->state_id; 
     $i++;
 }

 $finals['RECORDS'] = $allcities;
// print_r($finals);
 file_put_contents('mp_cities.json', json_encode($finals));
 echo json_encode($finals);
 exit;