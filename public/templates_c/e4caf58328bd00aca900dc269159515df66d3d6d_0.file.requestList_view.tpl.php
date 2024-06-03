<?php
/* Smarty version 4.3.4, created on 2024-06-03 14:16:33
  from 'D:\xampp\htdocs\fit-tracker\app\views\requestList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665db4216c1c07_76131156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4caf58328bd00aca900dc269159515df66d3d6d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\requestList_view.tpl',
      1 => 1717416988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665db4216c1c07_76131156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1022365679665db4216b5781_76976460', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1022365679665db4216b5781_76976460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1022365679665db4216b5781_76976460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Prośby o współpracę</h4>  
        </div>
      </div>
      <div class="card-body">
        <?php if (empty($_smarty_tpl->tpl_vars['requests']->value)) {?>
          <div class="container-fluid">
            Nie masz żadnych próśb o współpracę.
          </div>
        <?php } else { ?>
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">nazwa użytkownika</th>
              <th scope="col">e-mail</th>
              <th scope="col">wysłano</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requests']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value['username'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['sendDate'];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
requestAccept/<?php echo $_smarty_tpl->tpl_vars['r']->value['idRequest'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idUser'];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Akceptuj"><i class="fa fa-check"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
requestDeny/<?php echo $_smarty_tpl->tpl_vars['r']->value['idRequest'];?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['idUser'];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Odrzuć"><i class="fa fa-close"></i></a></td></tr>
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
