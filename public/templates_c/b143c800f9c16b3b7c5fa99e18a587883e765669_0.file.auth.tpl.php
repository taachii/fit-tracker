<?php
/* Smarty version 4.3.4, created on 2024-05-13 21:20:47
  from 'D:\xampp\htdocs\fit-tracker\app\views\templates\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6642680fa04211_83317815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b143c800f9c16b3b7c5fa99e18a587883e765669' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\auth.tpl',
      1 => 1715628044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:required.tpl' => 1,
  ),
),false)) {
function content_6642680fa04211_83317815 (Smarty_Internal_Template $_smarty_tpl) {
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
  <h1 class="auth-header">Fit<span class="tracker-text">Tracker</span></h1>
</div>
  <div class="container">
    <div class="authform">
      <div class="col-md-6">
        <div class="authincation-content">
          <div class="row no-gutters">
            <div class="col-xl-12">
              <div class="auth-form">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16162086756642680fa03685_26165458', 'form');
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
class Block_16162086756642680fa03685_26165458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_16162086756642680fa03685_26165458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  
              <?php
}
}
/* {/block 'form'} */
}
