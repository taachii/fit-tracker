<?php
/* Smarty version 4.3.4, created on 2024-05-31 20:33:56
  from 'D:\xampp\htdocs\fit-tracker\app\views\noteList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665a18142cd1b8_69558093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bef39b79965fc09b964cfbaacef5eb5ab0610e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\noteList_view.tpl',
      1 => 1717180208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665a18142cd1b8_69558093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_265634438665a18142c03d1_65753650', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_265634438665a18142c03d1_65753650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_265634438665a18142c03d1_65753650',
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
      <a href="profil">
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
      <div class="card">
          <div class="card-header">
            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['n']->value['noteTitle'];?>
</h5>
          </div>
          <div class="card-body">
            <ul>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['n']->value['entries'], 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
              <li>
                <?php echo $_smarty_tpl->tpl_vars['e']->value['exerciseName'];?>
: <?php echo $_smarty_tpl->tpl_vars['e']->value['sets'];?>
 x <?php echo $_smarty_tpl->tpl_vars['e']->value['reps'];?>

                <?php if ($_smarty_tpl->tpl_vars['e']->value['typeName'] == 'isometric') {?>s<?php }?>
              </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          </div>
          <div class="card-footer d-sm-flex justify-content-between">
            <div class="card-footer-link mb-4 mb-sm-0">
              <p class="card-text text-dark d-inline">Dodano: <?php echo $_smarty_tpl->tpl_vars['n']->value['creationDate'];?>
</p>
              </div>
              <div>
                <a href="javascript:void()" class="btn btn-outline-info">Edytuj</a>
                <a href="javascript:void()" class="btn btn-outline-danger">
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
