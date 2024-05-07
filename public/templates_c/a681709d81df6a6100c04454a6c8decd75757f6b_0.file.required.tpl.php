<?php
/* Smarty version 4.3.4, created on 2024-05-06 15:51:43
  from 'C:\xampp\htdocs\fit_tracker\app\views\templates\required.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6638e06f6932b5_38162392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a681709d81df6a6100c04454a6c8decd75757f6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit_tracker\\app\\views\\templates\\required.tpl',
      1 => 1715002112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638e06f6932b5_38162392 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
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
