<?php
/* Smarty version 4.3.4, created on 2024-06-03 19:43:09
  from 'D:\xampp\htdocs\fit-tracker\app\views\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e00adbb77b0_68957829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd280d54bf70c4c5354cbb107ba5e17337be8f924' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\login_view.tpl',
      1 => 1717436547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e00adbb77b0_68957829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1866381614665e00adbab055_58521755', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "form.tpl");
}
/* {block 'content'} */
class Block_1866381614665e00adbab055_58521755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1866381614665e00adbab055_58521755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
  <div>
    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
  <?php }?>
  <h4 class="form-header text-center mb-4">Logowanie</h4>
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
<?php
}
}
/* {/block 'content'} */
}
