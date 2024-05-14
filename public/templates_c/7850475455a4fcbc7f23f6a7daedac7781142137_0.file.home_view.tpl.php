<?php
/* Smarty version 4.3.4, created on 2024-05-14 12:09:59
  from 'D:\xampp\htdocs\fit-tracker\app\views\home_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66433877b7a817_37204056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7850475455a4fcbc7f23f6a7daedac7781142137' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\home_view.tpl',
      1 => 1715681398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66433877b7a817_37204056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96179550066433877b77396_00802346', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_96179550066433877b77396_00802346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_96179550066433877b77396_00802346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/banner.jpg" alt="">
        </div>
      </div>
  </div>
<?php
}
}
/* {/block 'content'} */
}
