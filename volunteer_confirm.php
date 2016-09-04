<?php

require_once('config.php');
require_once('volunteer.class.php');

if (isset($_REQUEST['amp;digest']))
	$_REQUEST['digest'] = $_REQUEST['amp;digest'];	
	 

$id =& $_REQUEST['id'];
if (!isset($id))
  $app->abort('##Expected id##');

// fetch user row and validate digest
$tbl = new Volunteer;
$user = $tbl->get($id);
 
if ($user->digest != @$_REQUEST['digest'])
  $app->abort('##The supplied digest is invalid##');

// confirm the account
$user->status = 1;
$user->updated_at = Util::epoch_to_datetime();
$user->save();
 $code = "MDD".$user->id;
  
      $app->mail($user->email, 'volunteer_code', array(       
        '[name]' => $user->name,
        '[code]' => $code,
        '[image_url]' => $app->url('/images/logo.png')
      ));
 
$smarty->assign_by_ref('codeforv', $code); 
$smarty->display('volunteer_confirm.tpl');

?>
