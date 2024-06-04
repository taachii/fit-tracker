<?php
/* Smarty version 4.3.4, created on 2024-06-03 22:50:44
  from 'D:\xampp\htdocs\fit-tracker\app\views\templates\required.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e2ca40b2280_65308144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5435b41a8751db545d852b63d2bfe0f468d4437' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\required.tpl',
      1 => 1717447605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e2ca40b2280_65308144 (Smarty_Internal_Template $_smarty_tpl) {
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
