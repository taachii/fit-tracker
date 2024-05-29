<?php
/* Smarty version 4.3.4, created on 2024-05-28 17:44:02
  from 'D:\xampp\htdocs\fit-tracker\app\views\userList_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6655fbc21f5231_53027701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a2029166b9ee7b67b70240946b2105bd8fa5863' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\userList_view.tpl',
      1 => 1716911040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655fbc21f5231_53027701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18764570056655fbc21e40d5_64751841', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_18764570056655fbc21e40d5_64751841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18764570056655fbc21e40d5_64751841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid">
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-header">
        <div class="col-lg-6">
          <h4>Użytkownicy</h4>  
        </div>
        <div class="col-lg-6">
          <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
view_userList">
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
        <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nazwa użytkownika</th>
              <th scope="col">e-mail</th>
              <th scope="col">data rejestracji</th>
              <th scope="col">czy aktywny</th>
              <th scope="col">data dezaktywacji</th>
              <th scope="col">rola</th>
              <th scope="col">data ostatniej edycji</th>
              <th scope="col">kto edytował (id)</th>
              <th scope="col">akcja</th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value['idUser'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value['username'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value['registrationDate'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value['isActive'];?>
</td><td><?php echo (($tmp = $_smarty_tpl->tpl_vars['u']->value['deactivationDate'] ?? null)===null||$tmp==='' ? '&#8213' ?? null : $tmp);?>
</td><td><?php echo (($tmp = $_smarty_tpl->tpl_vars['u']->value['roleName'] ?? null)===null||$tmp==='' ? '&#8213' ?? null : $tmp);?>
</td><td><?php echo (($tmp = $_smarty_tpl->tpl_vars['u']->value['editDate'] ?? null)===null||$tmp==='' ? '&#8213' ?? null : $tmp);?>
</td><td><?php echo (($tmp = $_smarty_tpl->tpl_vars['u']->value['idEditor'] ?? null)===null||$tmp==='' ? '&#8213' ?? null : $tmp);?>
</td><td><span><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_userEdit/<?php echo $_smarty_tpl->tpl_vars['u']->value["idUser"];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edytuj"><i class="fa fa-pencil"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userDeactivate/<?php echo $_smarty_tpl->tpl_vars['u']->value["idUser"];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Dezaktywuj"><i class="fa fa-close"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userActivate/<?php echo $_smarty_tpl->tpl_vars['u']->value["idUser"];?>
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
