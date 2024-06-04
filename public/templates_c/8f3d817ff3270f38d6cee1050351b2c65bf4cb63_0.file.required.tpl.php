<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:47:58
  from 'C:\xampp\htdocs\fit-tracker\app\views\templates\required.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e724eb135b0_88718013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f3d817ff3270f38d6cee1050351b2c65bf4cb63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\required.tpl',
      1 => 1717465531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e724eb135b0_88718013 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/functions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/vendor/global/global.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/quixnav-init.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/custom.min.js"><?php echo '</script'; ?>
><?php }
}
