<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:48:07
  from 'C:\xampp\htdocs\fit-tracker\app\views\userList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e725753d8e3_56065666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7925866998254cbb17dfd3536d3a6160cb7b18cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\userList_view.tpl',
      1 => 1717465531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
    'file:userListTable.tpl' => 1,
  ),
),false)) {
function content_665e725753d8e3_56065666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_936727823665e7257519cf2_58189334', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_936727823665e7257519cf2_58189334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_936727823665e7257519cf2_58189334',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
  <div class="row">
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <div>
      <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php }?>
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Użytkownicy</h4>  
        </div>
        <div class="col-lg-6">
          <form id="search-form" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userListPart', 'table'); return false;">
            <div class="input-group mb-3">
              <input type="text" class="input-rounded form-control" placeholder="Szukany użytkownik" name="searchValue" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->searchValue;?>
">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Filtruj</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
        <div id="table">
          <?php $_smarty_tpl->_subTemplateRender("file:userListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
