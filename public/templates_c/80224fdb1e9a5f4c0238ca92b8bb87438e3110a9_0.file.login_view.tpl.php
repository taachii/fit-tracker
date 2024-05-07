<?php
/* Smarty version 4.3.4, created on 2024-05-06 18:21:18
  from 'C:\xampp\htdocs\fit_tracker\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6639037e7b7568_54533465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80224fdb1e9a5f4c0238ca92b8bb87438e3110a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit_tracker\\app\\views\\login_view.tpl',
      1 => 1715012447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6639037e7b7568_54533465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7070822956639037e7ace24_09356820', 'form');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "auth.tpl");
}
/* {block 'form'} */
class Block_7070822956639037e7ace24_09356820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_7070822956639037e7ace24_09356820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h4 class="text-center mb-4">Logowanie</h4>
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
    <div class="form-group">
      <label for="id_email"><strong>Email</strong></label>
      <input id="id_email" name="email" type="text" inputmode="email" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->email ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="hello@example.com">
    </div>
    <div class="form-group">
      <label for="id_pas"><strong>Hasło</strong></label>
      <input id="id_pass" name="pass" type="password" class="form-control" placeholder="*******">
    </div>
    <div class="text-center mt-5">
      <button type="submit" class="btn btn-primary btn-block">Zaloguj</button>
    </div>
  </form>
  <div class="new-account mt-3">
    <p>Nie masz konta? <a class="text-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_register">Zarejestruj się</a></p>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
  <div class="alert alert-danger">
      <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
  <?php }
}
}
/* {/block 'form'} */
}
