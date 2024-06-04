<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:47:58
  from 'C:\xampp\htdocs\fit-tracker\app\views\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e724e785b27_60161597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a21015d225555c63478a4013928843e24fff9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\form.tpl',
      1 => 1717332286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:required.tpl' => 1,
  ),
),false)) {
function content_665e724e785b27_60161597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl" class="h-100">
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
  <div class="container">
    <div class="authform">
      <div class="col-md-6">
        <div class="authincation-content">
          <div class="row no-gutters">
            <div class="col-xl-12">
              <div class="auth-form">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2074222206665e724e781c66_80784511', 'content');
?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<?php $_smarty_tpl->_subTemplateRender("file:required.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
/* {block 'content'} */
class Block_2074222206665e724e781c66_80784511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2074222206665e724e781c66_80784511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  
              <?php
}
}
/* {/block 'content'} */
}
