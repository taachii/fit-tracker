<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:36:43
  from 'D:\xampp\htdocs\fit-tracker\app\views\templates\trainerListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e6fab65bbd9_66259500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '078adc6a0e233dafce026102b563bcf6db2cb950' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\trainerListTable.tpl',
      1 => 1717461793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e6fab65bbd9_66259500 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['trainers']->value)) {?>
  <div class="container-fluid">
    Brak dostępnych trenerów.
  </div>
<?php } else { ?>
<table class="table table-bordered table-striped verticle-middle table-responsive-sm">
  <thead>
    <tr>
      <th scope="col">nazwa użytkownika</th>
      <th scope="col">e-mail</th>
      <th scope="col">akcja</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trainers']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
  <tr><td><?php echo $_smarty_tpl->tpl_vars['t']->value['username'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['t']->value['email'];?>
</td><td><span><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
requestSend/<?php echo $_smarty_tpl->tpl_vars['t']->value['idUser'];?>
" data-toggle="tooltip" data-placement="top" title="<?php if ((isset($_smarty_tpl->tpl_vars['user']->value['hasTrainer']))) {?>Posiadasz już trenera!<?php } elseif ((isset($_smarty_tpl->tpl_vars['user']->value['requestSent'])) && $_smarty_tpl->tpl_vars['user']->value['requestSent']) {?>Wysłałeś już prośbę o współpracę do któregoś z trenerów. Poczekaj na odpowiedź.<?php } else { ?>Wyślij prośbę o współpracę do <?php echo $_smarty_tpl->tpl_vars['t']->value['username'];
}?>"><button <?php if ((isset($_smarty_tpl->tpl_vars['user']->value['hasTrainer'])) || ((isset($_smarty_tpl->tpl_vars['user']->value['requestSent'])) && $_smarty_tpl->tpl_vars['user']->value['requestSent'])) {?>disabled="disabled"<?php }?> type="button" class="btn btn-info">Poproś o współpracę</button></a></span></td></tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
  </tbody>
</table>
<?php }
}
}
