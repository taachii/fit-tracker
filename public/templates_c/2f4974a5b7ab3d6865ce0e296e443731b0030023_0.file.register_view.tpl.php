<?php
/* Smarty version 4.3.4, created on 2024-06-01 22:21:45
  from 'D:\xampp\htdocs\fit-tracker\app\views\register_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665b82d9b26a56_52194893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f4974a5b7ab3d6865ce0e296e443731b0030023' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\register_view.tpl',
      1 => 1717248445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665b82d9b26a56_52194893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_762075018665b82d9b199f5_66635691', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "form.tpl");
}
/* {block 'content'} */
class Block_762075018665b82d9b199f5_66635691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_762075018665b82d9b199f5_66635691',
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
  <h4 class="text-center mb-4">Rejestracja</h4>
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
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
      <label for="id_pass"><strong>Hasło</strong></label>
      <input id="id_pass" name="pass" type="password" class="form-control" placeholder="*******">
    </div>
    <div class="form-group">
      <label for="id_pass_confirm"><strong>Potwierdź hasło</strong></label>
      <input id="id_pass_confirm" name="pass_confirm" type="password" class="form-control" placeholder="*******">
    </div>
    <div class="form-group">
      <label><strong>Rodzaj konta</strong></label>
        <div class="radio">
          <label for="acc_type_radio_0">
            <input type="radio" name="acctype" value="0" id="acc_type_radio_0"> Zwykłe
          </label>
        </div>
        <div class="radio">
          <label for="acc_type_radio_1">
            <input type="radio" name="acctype" value="1" id="acc_type_radio_1"> Trenerskie
          </label>
        </div>
    </div>
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Stwórz konto</button>
    </div>
  </form>
  <div class="new-account mt-3">
    <p>Masz już konto? <a class="text-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_login">Zaloguj się</a></p>
  </div>
<?php
}
}
/* {/block 'content'} */
}
