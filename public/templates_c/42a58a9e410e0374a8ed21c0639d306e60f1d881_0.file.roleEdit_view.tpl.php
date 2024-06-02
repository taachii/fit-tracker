<?php
/* Smarty version 4.3.4, created on 2024-06-01 22:15:50
  from 'D:\xampp\htdocs\fit-tracker\app\views\roleEdit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665b81765a6313_44222034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a58a9e410e0374a8ed21c0639d306e60f1d881' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\roleEdit_view.tpl',
      1 => 1717272947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665b81765a6313_44222034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2084248831665b8176599c38_05478529', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "form.tpl");
}
/* {block 'content'} */
class Block_2084248831665b8176599c38_05478529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2084248831665b8176599c38_05478529',
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
  <div class="row mx-0 mb-4">
    <div class="col-sm-6 p-md-0">
      <h4>Edycja roli:</h4>
    </div>
    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <a href="javascript:history.go(-1)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wstecz">
        <i class="fa fa-arrow-left"></i>
      </a>
    </div>
  </div>
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
/* {/block 'content'} */
}
