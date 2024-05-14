<?php
/* Smarty version 4.3.4, created on 2024-05-13 21:32:32
  from 'D:\xampp\htdocs\fit-tracker\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66426ad0c705c8_96315886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05ad582385bd3b5b46641c2cf8e989c5c6ffac44' => 
    array (
      0 => 'D:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\main.tpl',
      1 => 1715628751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:required.tpl' => 1,
  ),
),false)) {
function content_66426ad0c705c8_96315886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
  <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
  <!--*******************
      Preloader start
  ********************-->
  <div id="preloader">
    <div class="sk-three-bounce">
      <div class="sk-child sk-bounce1"></div>
      <div class="sk-child sk-bounce2"></div>
      <div class="sk-child sk-bounce3"></div>
    </div>
  </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53357014966426ad0c682b3_00631397', 'header');
?>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166180884366426ad0c6c900_69447911', 'sidebar');
?>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94846824366426ad0c6fbc7_12268823', 'content');
?>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p><a href="https://github.com/taachii" target="_blank">©taachii</a>, Design by <a href="#" target="_blank">Quixkit</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php $_smarty_tpl->_subTemplateRender("file:required.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
/* {block 'header'} */
class Block_53357014966426ad0c682b3_00631397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_53357014966426ad0c682b3_00631397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="nav-header">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_home" class="brand-logo">
                <span class="brand-title">Fit<span class="tracker-text">Tracker</span></span>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left"></div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                   <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
 <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_profile" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Mój profil </span>
                                    </a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Wyloguj </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <?php
}
}
/* {/block 'header'} */
/* {block 'sidebar'} */
class Block_166180884366426ad0c6c900_69447911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_166180884366426ad0c6c900_69447911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="sidebar">
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Menu</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                    class="icon icon-single-04"></i><span class="nav-text"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span></a>
                            <ul aria-expanded="false">
                                <li><a href="#.html">Mój profil</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Moje treningi</li>
                        <li><a href=".html" aria-expanded="false">
                            <i class="icon icon-app-store"></i><span class="nav-text">Notatki</span></a>
                        </li>
                        <li><a href="#.html" aria-expanded="false">
                            <i class="icon icon-chart-bar-33"></i><span class="nav-text">Mój trener</span></a>
                        </li>
                        <li class="nav-label">Zdrowie</li>
                        <li><a href="javascript:void()" aria-expanded="false">
                            <i class="icon icon-book-open-2"></i><span class="nav-text">Plany treningowe</span></a>
                        </li>
                        <li><a href="javascript:void()" aria-expanded="false">
                            <i class="icon icon-users-mm"></i><span class="nav-text">Nasi trenerzy</span></a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                        <li class="nav-label">Administracja</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon icon-settings"></i><span class="nav-text">Ustawienia</span></a>
                            <ul aria-expanded="false">
                                <li><a href="./ui-accordion.html">Użytkownicy</a></li>
                                <li><a href="./ui-alert.html">Role</a></li>
                            </ul>
                        </li>
                        <?php }?> 
                    </ul>
                </div>
            </div>
        </div>
        <?php
}
}
/* {/block 'sidebar'} */
/* {block 'content'} */
class Block_94846824366426ad0c6fbc7_12268823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_94846824366426ad0c6fbc7_12268823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'content'} */
}
