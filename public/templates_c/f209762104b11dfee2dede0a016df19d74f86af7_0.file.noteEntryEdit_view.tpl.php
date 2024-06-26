<?php
/* Smarty version 4.3.4, created on 2024-06-04 04:06:09
  from 'C:\xampp\htdocs\fit-tracker\app\views\noteEntryEdit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e7691663336_56468268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f209762104b11dfee2dede0a016df19d74f86af7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\noteEntryEdit_view.tpl',
      1 => 1717437230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665e7691663336_56468268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1775763174665e769161d328_17737845', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "form.tpl");
}
/* {block 'content'} */
class Block_1775763174665e769161d328_17737845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1775763174665e769161d328_17737845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
  <div >
    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
  <?php }?>
  <div class="form-header row mx-0 mb-4">
    <div class="col-sm-6 p-md-0">
      <h4>Wpis do notatki</h4>
    </div>
    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
      <a href="javascript:history.go(-1)" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wstecz">
        <i class="fa fa-arrow-left"></i>
      </a>
    </div>
  </div>
  <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
noteEntrySave" method="post">
    <div class="form-group">
      <label for="id_exerciseName"><strong>Ćwiczenie</strong></label>
      <input id="id_exerciseName" name="exerciseName" type="text" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->exerciseName ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="np. podciąganie nachwytem">
    </div>
    <div class="form-group">
      <label for="id_sets"><strong>Liczba serii</strong></label>
      <input id="id_sets" name="sets" type="number" min="1" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->sets ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="3">
    </div>
    <div class="form-group">
      <label for="id_reps"><strong>Liczba powtórzeń / czas [s]</strong></label>
      <input id="id_reps" name="reps" type="number" min="1" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->reps ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" placeholder="12">
    </div>
    <div class="form-group">
      <label for="id_weight"><strong>Obciążenie [kg]</strong></label>
      <input id="id_weight" name="weight" type="number" step="0.5" min="0" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value->weight ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
" placeholder="20">
    </div>
    <div class="form-group">
      <label for="id_type"><strong>Typ ćwiczenia</strong></label>
      <select name="idType" id="id_type" class="form-control">
        <option <?php if ($_smarty_tpl->tpl_vars['form']->value->idType == 1) {?>selected<?php }?> value="1" title="Ćwiczenia izometryczne to takie, gdzie mięśnie się napinają, ale nie poruszają, jak trzymanie się w jednej pozycji, na przykład deski (plank).">
          izometryczne
        </option>
        <option <?php if ($_smarty_tpl->tpl_vars['form']->value->idType == 2) {?>selected<?php }?> value="2" title="Ćwiczenia izotoniczne to takie, gdzie mięśnie się kurczą i rozciągają, jak przy podnoszeniu i opuszczaniu ciężarów.">
          izotoniczne
        </option>
        <option <?php if ($_smarty_tpl->tpl_vars['form']->value->idType == 3) {?>selected<?php }?> value="3" title="Ćwiczenia aerobowe to takie, które sprawiają, że serce bije szybciej, jak bieganie, skakanie czy jazda na rowerze.">
          aerobowe
        </option>
      </select>
    </div>
    <input type="hidden" name="idNoteEntry" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idNoteEntry;?>
">
    <input type="hidden" name="idExercise" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idExercise;?>
">
    <input type="hidden" name="idTrainingNote" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idTrainingNote;?>
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
