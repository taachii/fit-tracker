<?php
/* Smarty version 4.3.4, created on 2024-05-06 19:00:44
  from 'C:\xampp\htdocs\fit_tracker\app\views\error403_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66390cbc75ca67_93279356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2b956ac09cabe7479ad3282dd117419652cff0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit_tracker\\app\\views\\error403_view.tpl',
      1 => 1715014842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
  ),
),false)) {
function content_66390cbc75ca67_93279356 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl" class="h-100">
<head>
  <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center">
                        <div class="mb-5">
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Logowanie</a>
                        </div>
                        <h1 class="error-text  font-weight-bold">403</h1>
                        <h4 class="mt-4"><i class="fa fa-times-circle text-danger"></i> Forbidden Error!</h4>
                        <p>Nie masz uprawnień do wyświetlenia tych zasobów!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php }
}
