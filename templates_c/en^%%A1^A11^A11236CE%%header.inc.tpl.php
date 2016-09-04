<?php /* Smarty version 2.6.12, created on 2016-09-04 06:43:06
         compiled from header.inc.tpl */ ?>
<?php $this->assign('stylesheets', '/style.css'); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'html.inc.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<body <?php echo $this->_tpl_vars['body_attr']; ?>
 ng-app="md">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'toolbar.inc.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<div>

<?php if ($this->_tpl_vars['app']->install_files_present):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'install_files_present.inc.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  if ($this->_tpl_vars['pagename'] != ''): ?>
<div class="section section-info" >
      <div class="row" id="topbar" style="font-weight:bold;padding:12px !important;">
        <div class="col-md-5">
          <p style="margin:0px !important;padding: 6px; color:#fff !important;" class="text-danger text-left">Million Pixels . $1 Per Pixel . 50% sponsorship to Drawings.
            <small>
              <sub >
                <a style="    color: rgb(178, 34, 34) !important;" href="http://sathiyasai.com/12junbkup1/terms.php">T&amp;C</a>
              </sub>
            </small>
          </p>
        </div>
        <div class="col-md-5 text-left" style="padding-left:0px;"  >
          <p style="margin:0px !important;padding: 6px;" class="text-left"  id="slogan1"  >Spreading innovation, integrity, awareness through creative artwork</p>
          <p  class="text-left" id="slogan2" style="display:none;margin:0px !important;padding: 6px;font-size:12px;font-weight:bold;">Submit Artwork, potential chance to win Sponsorship and globally recognized.</p>
        </div>
        <div class="col-md-2" >
          <p style="margin:0px !important;padding: 6px;" class="text-left text-danger">
            <a style=" color: mediumblue !important;" href="http://sathiyasai.com/12junbkup1/pixel_list.php" class="text-danger">Sponsor List</a>
          </p>
        </div>
      </div>
    </div>
<?php endif; ?>    