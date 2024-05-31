<?php
/* Smarty version 4.3.4, created on 2024-05-29 23:47:18
  from 'D:\xampp\htdocs\fit-tracker\app\views\roleEdit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6657a266e3f8a4_32547424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a58a9e410e0374a8ed21c0639d306e60f1d881' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\roleEdit_view.tpl',
      1 => 1717019134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6657a266e3f8a4_32547424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5521906356657a266e329a7_09852158', 'form');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "auth.tpl");
}
/* {block 'form'} */
class Block_5521906356657a266e329a7_09852158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_5521906356657a266e329a7_09852158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
  <div class="messages alert alert-danger">
        <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
  <?php }?>
  <h4 class="text-center mb-4">Edycja Roli:</h4>
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleSave" method="post">
    <div class="form-group">
      <label for="id_roleName"><strong>Nazwa roli</strong></label>
      <input id="id_roleName" name="roleName" type="text" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->roleName ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="roleName">
    </div>
    <input type="hidden" name="idRole" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idRole;?>
">
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Zapisz</button>
    </div>
  </form>
<?php
}
}
/* {/block 'form'} */
}
