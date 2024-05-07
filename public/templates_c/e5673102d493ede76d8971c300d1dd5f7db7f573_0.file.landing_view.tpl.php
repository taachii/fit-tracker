<?php
/* Smarty version 4.3.4, created on 2024-05-05 16:55:50
  from 'C:\xampp\htdocs\fit_tracker\app\views\landing_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66379df6ddf1c7_45280632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5673102d493ede76d8971c300d1dd5f7db7f573' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit_tracker\\app\\views\\landing_view.tpl',
      1 => 1714920949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66379df6ddf1c7_45280632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68776152566379df6ddeaa5_25924735', 'form');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "auth.tpl");
}
/* {block 'form'} */
class Block_68776152566379df6ddeaa5_25924735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_68776152566379df6ddeaa5_25924735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h4 class="text-center mb-4">Zaloguj się lub stwórz konto</h4>
    <form action="#">
        <div class="form-group">
            <label><strong>Email</strong></label>
            <input type="email" class="form-control" value="hello@example.com">
        </div>
        <div class="form-group">
            <label><strong>Password</strong></label>
            <input type="password" class="form-control" value="Password">
        </div>
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="form-group">
                <div class="form-check ml-2">
                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                </div>
            </div>
            <div class="form-group">
                <a href="page-forgot-password.html">Forgot Password?</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p>Don't have an account? <a class="text-primary" href="#">Sign up</a></p>
    </div>
<?php
}
}
/* {/block 'form'} */
}
