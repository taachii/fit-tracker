<?php
/* Smarty version 4.3.4, created on 2024-05-29 21:56:20
  from 'D:\xampp\htdocs\fit-tracker\app\views\roleList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66578864d1b775_59289358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e1e9fac9a762defd24f25a680b1932fadfaee44' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\roleList_view.tpl',
      1 => 1717011117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66578864d1b775_59289358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65930470566578864d083c6_42567470', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_65930470566578864d083c6_42567470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_65930470566578864d083c6_42567470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Role</h4>  
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nazwa roli</th>
              <th scope="col">data stworzenia</th>
              <th scope="col">czy aktywna</th>
              <th scope="col">data dezaktywacji</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value['idRole'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['roleName'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['creationDate'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['isActive'];?>
</td><td><?php echo (($tmp = $_smarty_tpl->tpl_vars['r']->value['deactivationDate'] ?? null)===null||$tmp==='' ? '&#8213' ?? null : $tmp);?>
</td><td><span><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_roleEdit/<?php echo $_smarty_tpl->tpl_vars['r']->value["idRole"];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edytuj"><i class="fa fa-pencil"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleDeactivate/<?php echo $_smarty_tpl->tpl_vars['r']->value["idRole"];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Dezaktywuj"><i class="fa fa-close"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleActivate/<?php echo $_smarty_tpl->tpl_vars['r']->value["idRole"];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Aktywuj"><i class="fa fa-check"></i></a></span></td></tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
