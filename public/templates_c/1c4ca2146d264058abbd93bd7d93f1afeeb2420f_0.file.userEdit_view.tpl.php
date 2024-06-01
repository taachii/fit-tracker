<?php
/* Smarty version 4.3.4, created on 2024-06-01 16:09:05
  from 'D:\xampp\htdocs\fit-tracker\app\views\userEdit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665b2b81e79f97_67568802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c4ca2146d264058abbd93bd7d93f1afeeb2420f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\userEdit_view.tpl',
      1 => 1717248457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665b2b81e79f97_67568802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1468226195665b2b81e6bc06_04167392', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "form.tpl");
}
/* {block 'content'} */
class Block_1468226195665b2b81e6bc06_04167392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1468226195665b2b81e6bc06_04167392',
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
  <h4 class="text-center mb-4">Edycja użytkownika:</h4>
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userSave" method="post">
    <div class="form-group">
      <label for="id_username"><strong>Nazwa użytkownika</strong></label>
      <input id="id_username" name="username" type="text" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->username ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="username">
    </div>
    <div class="form-group">
      <label for="id_email"><strong>Email</strong></label>
      <input id="id_email" name="email" type="text" inputmode="email" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->email ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="hello@example.com">
    </div>
    <div class="form-group">
      <label for="id_role"><strong>Rola</strong></label>
      <select name="idRole" id="id_role" class="form-control">
        <option <?php if ($_smarty_tpl->tpl_vars['form']->value->idRole == 1) {?>selected<?php }?> value="1">admin</option>
        <option <?php if ($_smarty_tpl->tpl_vars['form']->value->idRole == 2) {?>selected<?php }?> value="2">trenujący</option>
        <option <?php if ($_smarty_tpl->tpl_vars['form']->value->idRole == 3) {?>selected<?php }?> value="3">trener</option>
      </select>
    </div>
    <input type="hidden" name="idUser" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idUser;?>
">
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Zapisz</button>
    </div>
  </form>
<?php
}
}
/* {/block 'content'} */
}
