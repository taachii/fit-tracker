<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:48:43
  from 'C:\xampp\htdocs\fit-tracker\app\views\stats_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e727bdcdff2_49650975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7b91113e00a311355acbdf09ab5c5f1ef6a619b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\stats_view.tpl',
      1 => 1717437230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e727bdcdff2_49650975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1517532416665e727bca65e2_73674089', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1517532416665e727bca65e2_73674089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1517532416665e727bca65e2_73674089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
  <div class="row">
    <?php if (empty($_smarty_tpl->tpl_vars['statsIsometric']->value) && empty($_smarty_tpl->tpl_vars['statsIsotonic']->value) && empty($_smarty_tpl->tpl_vars['statsAerobic']->value)) {?>
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Brak statystyk do wyświetlenia.</h4>  
        </div>
      </div>
    </div>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['statsIsotonic']->value)) {?>
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Ćwiczenia izotoniczne</h4>  
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">nazwa ćwiczenia</th>
              <th scope="col">łączna liczba serii</th>
              <th scope="col">łączna liczba powtórzeń</th>
              <th scope="col">max. liczba powtórzeń</th>
              <th scope="col">max. ciężar</th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statsIsotonic']->value, 'sIt');
$_smarty_tpl->tpl_vars['sIt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sIt']->value) {
$_smarty_tpl->tpl_vars['sIt']->do_else = false;
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['sIt']->value['exerciseName'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sIt']->value['total_sets'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sIt']->value['total_reps'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sIt']->value['max_reps'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sIt']->value['max_weight'];?>
kg</td></tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
          </tbody>
        </table>
      </div>
    </div>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['statsIsometric']->value)) {?>
      <div class="card col-lg-12">
        <div class="card-header">
          <div class="col-lg-6">
            <h4>Ćwiczenia izometryczne</h4>  
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
            <thead>
              <tr>
                <th scope="col">nazwa ćwiczenia</th>
                <th scope="col">łączna liczba serii</th>
                <th scope="col">łączny czas</th>
                <th scope="col">max. czas</th>
                <th scope="col">max. ciężar</th>
              </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statsIsometric']->value, 'sIm');
$_smarty_tpl->tpl_vars['sIm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sIm']->value) {
$_smarty_tpl->tpl_vars['sIm']->do_else = false;
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['sIm']->value['exerciseName'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sIm']->value['total_sets'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['sIm']->value['total_reps']['hours'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sIm']->value['total_reps']['hours'];?>
h<?php }
if ($_smarty_tpl->tpl_vars['sIm']->value['total_reps']['minutes'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sIm']->value['total_reps']['minutes'];?>
min<?php }
if ($_smarty_tpl->tpl_vars['sIm']->value['total_reps']['seconds'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sIm']->value['total_reps']['seconds'];?>
s<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['sIm']->value['max_reps']['hours'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sIm']->value['max_reps']['hours'];?>
h<?php }
if ($_smarty_tpl->tpl_vars['sIm']->value['max_reps']['minutes'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sIm']->value['max_reps']['minutes'];?>
min<?php }
if ($_smarty_tpl->tpl_vars['sIm']->value['max_reps']['seconds'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sIm']->value['max_reps']['seconds'];?>
s<?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['sIm']->value['max_weight'];?>
kg</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
            </tbody>
          </table>
        </div>
      </div>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['statsAerobic']->value)) {?>
        <div class="card col-lg-12">
          <div class="card-header">
            <div class="col-lg-6">
              <h4>Ćwiczenia aerobowe</h4>  
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
              <thead>
                <tr>
                  <th scope="col">nazwa ćwiczenia</th>
                  <th scope="col">łączna liczba serii</th>
                  <th scope="col">łączny czas</th>
                  <th scope="col">max. czas</th>
                </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statsAerobic']->value, 'sA');
$_smarty_tpl->tpl_vars['sA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sA']->value) {
$_smarty_tpl->tpl_vars['sA']->do_else = false;
?>
              <tr><td><?php echo $_smarty_tpl->tpl_vars['sA']->value['exerciseName'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sA']->value['total_sets'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['sA']->value['total_reps']['hours'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sA']->value['total_reps']['hours'];?>
h<?php }
if ($_smarty_tpl->tpl_vars['sA']->value['total_reps']['minutes'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sA']->value['total_reps']['minutes'];?>
min<?php }
if ($_smarty_tpl->tpl_vars['sA']->value['total_reps']['seconds'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sA']->value['total_reps']['seconds'];?>
s<?php }?></td><td><?php if ($_smarty_tpl->tpl_vars['sA']->value['max_reps']['hours'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sA']->value['max_reps']['hours'];?>
h<?php }
if ($_smarty_tpl->tpl_vars['sA']->value['max_reps']['minutes'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sA']->value['max_reps']['minutes'];?>
min<?php }
if ($_smarty_tpl->tpl_vars['sA']->value['max_reps']['seconds'] > 0) {?> <?php echo $_smarty_tpl->tpl_vars['sA']->value['max_reps']['seconds'];?>
s<?php }?></td></tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
              </tbody>
            </table>
          </div>
        </div>
      <?php }?>
  </div>
</div>


<?php
}
}
/* {/block 'content'} */
}
