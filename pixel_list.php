<?php
require_once('config.php');

$res =& $db->query("select r.url,r.id,r.title,r.clicks,r.created_on,p.payment_method,p.amount,(select drawing_image from mp_drawings where id=p.drawing_id limit 1) as drawing_image from mp_regions as r INNER JOIN mp_payments as p ON (p.region_id = r.id) where   r.status = 1  order by p.amount desc ");
  // $row =& $res->fetchRow(DB_FETCHMODE_ASSOC); 
// $row =& $res->fetchRow(DB_FETCHMODE_ASSOC); 
$allSponsors = [];
  while ($row =& $res->fetchRow(DB_FETCHMODE_OBJECT)) {
     $allSponsors[] = $row;
 }
   
  // print_r($allSponsors);exit;

$smarty->assign_by_ref('allSponsors', $allSponsors);
//$smarty->display('pixel_list.tpl', "index|search|$q|$o|$a|".$cache_id);
$smarty->display('new_pixel_list.tpl');

?>
