<?php
/* Smarty version 4.3.4, created on 2024-06-02 14:38:03
  from 'D:\xampp\htdocs\fit-tracker\app\views\noteList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665c67ab1b5f93_58148468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bef39b79965fc09b964cfbaacef5eb5ab0610e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\noteList_view.tpl',
      1 => 1717331882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665c67ab1b5f93_58148468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1187720466665c67ab1a66b7_69487165', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1187720466665c67ab1a66b7_69487165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1187720466665c67ab1a66b7_69487165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Witaj, <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
!</h4>
        <span class="ml-1">Dodaj, usuń lub edytuj swoje notatki treningowe!</span>
      </div>
    </div>
    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
noteAdd">
        <button type="button" class="btn-lg btn-info">
          Nowa notatka
          <span class="btn-icon-right">
            <i class="fa fa-plus color-info"></i>
          </span>
        </button>
      </a>
    </div>
  </div>
  <div class="row">
    <?php if (!empty($_smarty_tpl->tpl_vars['notes']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'n');
$_smarty_tpl->tpl_vars['n']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->do_else = false;
?>
    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 ">
      <div class="trainingNote card">
          <div class="card-header">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['n']->value['noteTitle'];?>
</h5>
          </div>
          <div class="card-body">
            <ul class="noteList">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['n']->value['entries'], 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
              <li><?php echo $_smarty_tpl->tpl_vars['e']->value['exerciseName'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['e']->value['sets'];?>
 x <?php echo $_smarty_tpl->tpl_vars['e']->value['reps'];
if ($_smarty_tpl->tpl_vars['e']->value['typeName'] == 'isometric' || $_smarty_tpl->tpl_vars['e']->value['typeName'] == 'aerobic') {?>s<?php }?></strong><?php if ($_smarty_tpl->tpl_vars['e']->value['weight'] > 0) {?> <span style="color: #593bdb">[+<?php echo $_smarty_tpl->tpl_vars['e']->value['weight'];?>
 kg]</span><?php }?></li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
          <div class="card-footer d-sm-flex justify-content-between">
            <div class="card-footer-link mb-4 mb-sm-0">
              <p class="card-text text-dark d-inline"><strong>Dodano:</strong> <?php echo $_smarty_tpl->tpl_vars['n']->value['creationDate'];?>
</p>
              </div>
              <div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_noteEdit/<?php echo $_smarty_tpl->tpl_vars['n']->value['idTrainingNote'];?>
" class="btn btn-outline-info">Edytuj</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
noteDelete/<?php echo $_smarty_tpl->tpl_vars['n']->value['idTrainingNote'];?>
" class="btn btn-outline-danger">
                  <i class="fa fa-trash color-danger"></i>
                </a>
            </div>
          </div>
      </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
      <p>Nie masz jeszcze żadnych notatek...</p>
          <?php }?>
  </div>
 </div>
<?php
}
}
/* {/block 'content'} */
}
