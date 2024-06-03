<?php
/* Smarty version 4.3.4, created on 2024-06-03 19:24:24
  from 'D:\xampp\htdocs\fit-tracker\app\views\home_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665dfc4885ffc0_26314834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7850475455a4fcbc7f23f6a7daedac7781142137' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\home_view.tpl',
      1 => 1717435462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665dfc4885ffc0_26314834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_891596469665dfc4885c199_86500395', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "form.tpl");
}
/* {block 'content'} */
class Block_891596469665dfc4885c199_86500395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_891596469665dfc4885c199_86500395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container-fluid text-center">
    <span class="homeText">Zacznij śledzić swoje postępy już dziś!</span>
  </div>
  <hr>
  <div class="homeScreen text-center mt-4">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_login">
      <button type="button" class="btn btn-outline-primary">
        <strong>Zaloguj się</strong>
      </button>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_register">
      <button type="button" class="btn btn-primary">
        <strong>Stwórz konto</strong>
      </button>
    </a>
    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/progress.png" alt="">
  </div>
<?php
}
}
/* {/block 'content'} */
}
