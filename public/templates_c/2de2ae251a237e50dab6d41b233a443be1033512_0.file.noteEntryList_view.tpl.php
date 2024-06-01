<?php
/* Smarty version 4.3.4, created on 2024-06-01 19:01:04
  from 'D:\xampp\htdocs\fit-tracker\app\views\noteEntryList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665b53d088a513_39004373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de2ae251a237e50dab6d41b233a443be1033512' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\noteEntryList_view.tpl',
      1 => 1717261263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665b53d088a513_39004373 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
  <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
  <div class="title">
  <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;
echo (($tmp = $_smarty_tpl->tpl_vars['cancelAction']->value ?? null)===null||$tmp==='' ? "view_login" ?? null : $tmp);?>
"><h1 class="auth-header">Fit<span class="tracker-text">Tracker</span></h1></a>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <div class="authform">
      <div class="col-md-3">
        <div class="col-xl-12">
          <div class="messages alert alert-danger">
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        </div>
      </div>
    </div>
  <?php } else { ?>
  <div class=" noteEntryList d-flex justify-content-center align-items-center full-height">
    <div class="card">
      <div class="card-header">
        <div class="col-sm-6">
          <h4>Wpisy</h4>  
        </div>
        <div class="col-sm-6 justify-content-sm-center mt-2 mt-sm-0 d-flex">
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
noteEntryAdd">
            <button type="button" class="btn-lg btn-info">Nowy wpis
              <span class="btn-icon-right">
                <i class="fa fa-plus color-info"></i>
              </span>
            </button>
          </a>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">ćwiczenie</th>
              <th scope="col">serie</th>
              <th scope="col">powtórzenia</th>
              <th scope="col">typ ćwiczenia</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          <?php if (!empty($_smarty_tpl->tpl_vars['entries']->value)) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entries']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['e']->value['exerciseName'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value['sets'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value['reps'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['e']->value['typeName'];?>
</td><td><span><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_noteEntryEdit/<?php echo $_smarty_tpl->tpl_vars['e']->value["idNoteEntry"];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edytuj"><i class="fa fa-pencil"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
noteEntryDelete/<?php echo $_smarty_tpl->tpl_vars['e']->value["idNoteEntry"];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Usuń"><i class="fa fa-close"></i></a></span></td></tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php } else { ?>
            <p>Brak wpisów - dodaj je</p>
          <?php }?>
          </tbody>
        </table>
        <div class="col-sm-12 justify-content-sm-center mt-2 mt-sm-0 d-flex">
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_noteList">
            <button type="button" class="btn-lg btn-primary">Zakończ</button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php }?>
</body>
</div>
</html><?php }
}
