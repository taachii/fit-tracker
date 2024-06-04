<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:48:51
  from 'C:\xampp\htdocs\fit-tracker\app\views\noteList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e7283649070_83115202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dac2fb650251fefcd3d3c3b5a334527949e7348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\noteList_view.tpl',
      1 => 1717465531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e7283649070_83115202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_298369481665e72835ff401_36259236', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_298369481665e72835ff401_36259236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_298369481665e72835ff401_36259236',
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
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <div>
      <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php }?>
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
          <div class="col-sm-6 p-md-0">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['n']->value['noteTitle'];?>
</h5>
          </div>
          <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <div>
              <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_noteEdit/<?php echo $_smarty_tpl->tpl_vars['n']->value['idTrainingNote'];?>
" class="btn btn-outline-info">Edytuj
              </a>
              <button onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
noteDelete/<?php echo $_smarty_tpl->tpl_vars['n']->value['idTrainingNote'];?>
', 'Czy na pewno chcesz usunąć notatkę?')" class="btn btn-outline-danger">
                <i class="fa fa-trash color-danger"></i>
              </button>
            </div>  
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
        <p>Nie posiadasz jeszcze żadnych notatek.</p>
      </div>
    <?php }?>
  </div>
 </div>
<?php
}
}
/* {/block 'content'} */
}
