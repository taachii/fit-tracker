<?php
/* Smarty version 4.3.4, created on 2024-05-31 21:48:04
  from 'D:\xampp\htdocs\fit-tracker\app\views\templates\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665a297471cf64_48531197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b143c800f9c16b3b7c5fa99e18a587883e765669' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\auth.tpl',
      1 => 1717184875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:required.tpl' => 1,
  ),
),false)) {
function content_665a297471cf64_48531197 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1986684855665a297471c360_13473315', 'form');
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
/* {block 'form'} */
class Block_1986684855665a297471c360_13473315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_1986684855665a297471c360_13473315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  
              <?php
}
}
/* {/block 'form'} */
}
