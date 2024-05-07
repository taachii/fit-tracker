<?php
/* Smarty version 4.3.4, created on 2024-05-06 16:45:45
  from 'C:\xampp\htdocs\fit_tracker\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6638ed1955a993_77418605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd940879313e965cbee2a5424f759f861215d8c0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit_tracker\\app\\views\\templates\\messages.tpl',
      1 => 1715006740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638ed1955a993_77418605 (Smarty_Internal_Template $_smarty_tpl) {
?><strong>Wystąpiły błędy:</strong>
<ul class="err">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['err']->value->text;?>
</li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
