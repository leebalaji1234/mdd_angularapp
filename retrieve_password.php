<?php

require_once('config.php');

// if admin has not enabled user accounts, redirect to home page
if (!$app->setting->user_accounts) $app->redirect('/index.php');

$template = 'retrieve_password.tpl';
if ($app->is_post()) {
  if (empty($_REQUEST['email']))
    $app->error('##Please enter your E-Mail address##');
  else {
    require_once('user.class.php');
    $tbl = new User;
    $user = $tbl->find('where `email`=?', array($_REQUEST['email']));
    if ($user->_new_row)
      $app->error('##That E-Mail address is not on file##');
    else {
    	 $user->lock();
      $user->pass = base64_encode(rand(0,100000));
      $user->updated_at = Util::epoch_to_datetime();
      $user->save();
      $user->unlock();
      $app->mail($user->email, 'retrieve_password', array(
        '[email]' => $user->email,
        '[first_name]' => $user->first_name,
        '[last_name]' => $user->last_name,
        '[password]' => base64_decode($user->pass),
        '[login_url]' => $app->url('/login.php', array(), true, true),
        '[image_url]' => $app->url('/images/logo.png')  
      ));
      $template = 'retrieve_password_done.tpl';
    }
  }
}
else {
  $_REQUEST['email'] = @$_SESSION['email'];
}

$smarty->display($template);

?>
<style>

.error > li {
    list-style: outside none none;
}
.error {
    border: medium none;
    font-weight: bold;
    padding: 12px;
    position: relative;
    text-align: center;
}.error {
    margin-top: 41px !important;
    padding: 12px;
	 border: 1px solid red;
    margin-bottom: 21px;
    margin-top: 41px !important;
    padding-left: 12px;
    padding-right: 12px;
    padding-top: 12px;
}

</style>
