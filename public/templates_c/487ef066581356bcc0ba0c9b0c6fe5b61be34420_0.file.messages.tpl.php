<?php
/* Smarty version 4.3.4, created on 2024-06-03 13:47:16
  from 'D:\xampp\htdocs\fit-tracker\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665dad440e4af8_11551704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '487ef066581356bcc0ba0c9b0c6fe5b61be34420' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\messages.tpl',
      1 => 1717415233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665dad440e4af8_11551704 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
    <li class="alert <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
