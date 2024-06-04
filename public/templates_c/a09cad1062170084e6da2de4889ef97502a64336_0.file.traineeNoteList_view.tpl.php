<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:52:31
  from 'C:\xampp\htdocs\fit-tracker\app\views\traineeNoteList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e735f8676a7_17675964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a09cad1062170084e6da2de4889ef97502a64336' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\traineeNoteList_view.tpl',
      1 => 1717437230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e735f8676a7_17675964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_694483679665e735f819364_88557390', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_694483679665e735f819364_88557390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_694483679665e735f819364_88557390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Notatki użytkownika: <strong><em><?php echo $_smarty_tpl->tpl_vars['traineeUsername']->value;?>
</em></strong></h4>
      </div>
    </div>
    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <a href="javascript:history.go(-1)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wstecz">
        <i class="fa fa-arrow-left"></i>
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
          <div class="col-sm-6 p-md-0">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['n']->value['noteTitle'];?>
</h5>
          </div>
        </div>
        <hr>
        <div class="card-body">
          <ul class="noteList">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['n']->value['entries'], 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
            <li>
              <?php echo $_smarty_tpl->tpl_vars['e']->value['exerciseName'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['e']->value['sets'];?>
 x  
              <?php if (is_array($_smarty_tpl->tpl_vars['e']->value['reps'])) {?>
                <?php if ($_smarty_tpl->tpl_vars['e']->value['reps']['hours'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['e']->value['reps']['hours'];?>
h<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['e']->value['reps']['minutes'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['e']->value['reps']['minutes'];?>
min<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['e']->value['reps']['seconds'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['e']->value['reps']['seconds'];?>
s<?php }?>
              <?php } else { ?> 
                <?php echo $_smarty_tpl->tpl_vars['e']->value['reps'];?>

              <?php }?>
              </strong><?php if ($_smarty_tpl->tpl_vars['e']->value['weight'] > 0) {?> <span  style="color:#593bdb">[+<?php echo $_smarty_tpl->tpl_vars['e']->value['weight'];?>
kg]</span><?php }?>
            </li>
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
        </div>
      </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <div class="container-fluid">
      <p>Użytkownik <strong><?php echo $_smarty_tpl->tpl_vars['traineeUsername']->value;?>
</strong> nie posiada żadnych notatek.</p>
    </div>
    <?php }?>
  </div>
 </div>
<?php
}
}
/* {/block 'content'} */
}
