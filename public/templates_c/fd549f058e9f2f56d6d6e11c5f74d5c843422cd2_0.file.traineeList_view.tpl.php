<?php
/* Smarty version 4.3.4, created on 2024-06-03 23:06:54
  from 'D:\xampp\htdocs\fit-tracker\app\views\traineeList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e306e3110a1_10393949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd549f058e9f2f56d6d6e11c5f74d5c843422cd2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\traineeList_view.tpl',
      1 => 1717448769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e306e3110a1_10393949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1598233518665e306e304494_58497488', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1598233518665e306e304494_58497488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1598233518665e306e304494_58497488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Podopieczni</h4>  
        </div>
        <div class="col-lg-6">
          <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
view_traineeList">
            <div class="input-group mb-3">
              <input type="text" class="input-rounded form-control" placeholder="Szukany użytkownik" name="search_value">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Filtruj</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
        <?php if (empty($_smarty_tpl->tpl_vars['trainees']->value)) {?>
          <div class="container-fluid">
            Nie masz jeszcze żadnych podopiecznych
          </div>
        <?php } else { ?>
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">nazwa użytkownika</th>
              <th scope="col">e-mail</th>
              <th scope="col">start współpracy</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trainees']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['t']->value['username'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['t']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['t']->value['startDate'];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_traineeNoteList/<?php echo $_smarty_tpl->tpl_vars['t']->value['idUser'];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wyświetl notatki"><i class="fa fa-eye"></i></a><a onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mentorshipEndTrainer/<?php echo $_smarty_tpl->tpl_vars['t']->value['idUser'];?>
', 'Czy na pewno chcesz zakończyć współpracę?')" class="mr-4" data-toggle="tooltip" data-placement="top" title="Zakończ współpracę"><i class="fa fa-close"></i></a><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['t']->value['email'];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Wyślij wiadomość"><i class="fa fa-inbox"></i></a></td></tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
          </tbody>
        </table>
        <?php }?>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
