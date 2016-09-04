<?php
require_once('config.php');
require_once('theme.class.php');
$tbl_themes = new Theme;

if($_REQUEST['id']  && !empty($_REQUEST['id'])){
  $themes  = $tbl_themes->get($_REQUEST['id']);
  echo  $themes->description;exit;
}else{
 echo 'none';exit;
}
?>
