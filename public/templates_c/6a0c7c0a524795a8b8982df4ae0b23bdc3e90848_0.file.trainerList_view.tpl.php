<?php
/* Smarty version 4.3.4, created on 2024-06-03 14:06:29
  from 'D:\xampp\htdocs\fit-tracker\app\views\trainerList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665db1c5d83e84_41081327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a0c7c0a524795a8b8982df4ae0b23bdc3e90848' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\trainerList_view.tpl',
      1 => 1717416388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665db1c5d83e84_41081327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1312629965665db1c5d75e13_74421296', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1312629965665db1c5d75e13_74421296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1312629965665db1c5d75e13_74421296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
    </div>
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Trenerzy</h4>  
        </div>
        <div class="col-lg-6">
          <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
view_trainerList">
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
        <?php if (empty($_smarty_tpl->tpl_vars['trainers']->value)) {?>
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
        <?php }?>
        <br><br>
        <div class="conatiner-fluid text-center">
          <em>*Jeśli opcja wysłania prośby o współpracę do trenera stała się aktywna, a wcześniej nie była, to oznacza, że trener odrzucił twoją prośbę lub zakończyliście dotychczasową współpracę.*</em>
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
