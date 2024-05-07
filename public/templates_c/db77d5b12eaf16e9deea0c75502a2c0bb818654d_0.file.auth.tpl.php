<?php
/* Smarty version 4.3.4, created on 2024-05-06 19:35:27
  from 'C:\xampp\htdocs\fit_tracker\app\views\templates\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663914dfd22247_31698919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db77d5b12eaf16e9deea0c75502a2c0bb818654d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit_tracker\\app\\views\\templates\\auth.tpl',
      1 => 1715016797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:required.tpl' => 1,
  ),
),false)) {
function content_663914dfd22247_31698919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl" class="h-100">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_444856639663914dfd21007_28929131', 'bodyclass');
?>
>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_659718650663914dfd21867_25817810', 'form');
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
/* {block 'bodyclass'} */
class Block_444856639663914dfd21007_28929131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyclass' => 
  array (
    0 => 'Block_444856639663914dfd21007_28929131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
class="auth"<?php
}
}
/* {/block 'bodyclass'} */
/* {block 'form'} */
class Block_659718650663914dfd21867_25817810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_659718650663914dfd21867_25817810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  
              <?php
}
}
/* {/block 'form'} */
}
