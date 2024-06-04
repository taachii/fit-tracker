<?php
/* Smarty version 4.3.4, created on 2024-06-04 04:06:04
  from 'C:\xampp\htdocs\fit-tracker\app\views\noteEdit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e768c6161d6_62756871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0187b6156dd8a50b0916d6510cd9007292a06d3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\noteEdit_view.tpl',
      1 => 1717437230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e768c6161d6_62756871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1748310792665e768c5dc4c7_57362442', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "form.tpl");
}
/* {block 'content'} */
class Block_1748310792665e768c5dc4c7_57362442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1748310792665e768c5dc4c7_57362442',
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
  <div class="form-header row mx-0 mb-4">
    <div class="col-sm-6 p-md-0">
      <h4>Notatka treningowa</h4>
    </div>
  <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <a href="javascript:history.go(-1)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wstecz">
      <i class="fa fa-arrow-left"></i>
    </a>
  </div>
</div>
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
noteSave" method="post">
    <div class="form-group">
      <label for="id_noteTitle"><strong>Tytuł notatki</strong></label>
      <input id="id_noteTitle" name="noteTitle" type="text" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->noteTitle ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="Tytuł twojej notatki">
    </div>
    <input type="hidden" name="idTrainingNote" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idTrainingNote;?>
">
    <div class="text-center mt-4">
      <button type="submit" class="btn btn-primary btn-block">Dalej</button>
    </div>
  </form>
<?php
}
}
/* {/block 'content'} */
}
