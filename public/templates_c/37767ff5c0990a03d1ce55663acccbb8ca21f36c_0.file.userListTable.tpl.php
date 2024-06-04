<?php
/* Smarty version 4.3.4, created on 2024-06-04 09:19:03
  from 'C:\xampp\htdocs\fit-tracker\app\views\templates\userListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665ebfe7d8f548_83191996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37767ff5c0990a03d1ce55663acccbb8ca21f36c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\userListTable.tpl',
      1 => 1717485540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665ebfe7d8f548_83191996 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-bordered table-striped verticle-middle table-responsive-sm">
  <thead>
    <tr>
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
  <tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value['username'];?>
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
/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Dezaktywuj"><i class="fa fa-close"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userActivate/<?php echo $_smarty_tpl->tpl_vars['u']->value["idUser"];?>
" class="mr-4" data-toggle="tooltip" data-placement="top" title="Aktywuj"><i class="fa fa-check"></i></a></span></td></tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
  </tbody>
</table>
<div>
  <p>Strona: <?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['totalPages']->value;?>
</p>
</div>
<div class="pagination col-sm-12 mt-2 mt-sm-0">
<nav> 
  <ul class="pagination pagination-sm pagination-gutter">
    <li class="page-item page-indicator">
    <?php if ($_smarty_tpl->tpl_vars['currentPage']->value > 1) {?>
      <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_userList/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value-1;?>
" >
        <i class="icon-arrow-left"></i>
      </a>
    <?php }?>
    </li>
    <li class="page-item active">
      <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_userList/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
</a>
    </li>
    <li class="page-item page-indicator">
    <?php if ($_smarty_tpl->tpl_vars['currentPage']->value < $_smarty_tpl->tpl_vars['totalPages']->value) {?>
      <a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_userList/<?php echo $_smarty_tpl->tpl_vars['currentPage']->value+1;?>
" >
        <i class="icon-arrow-right"></i>
      </a>
    <?php }?>
    </li>
  </ul>
</nav>
</div><?php }
}
