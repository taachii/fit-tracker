<?php
/* Smarty version 4.3.4, created on 2024-06-04 03:51:26
  from 'C:\xampp\htdocs\fit-tracker\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_665e731ee06916_96990036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a355159a2f93ded0cf9158771c55bd2995d1327b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fit-tracker\\app\\views\\templates\\main.tpl',
      1 => 1717465878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:required.tpl' => 1,
  ),
),false)) {
function content_665e731ee06916_96990036 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_682128963665e731edcfcb4_35873961', 'header');
?>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1159008066665e731ede0677_50231489', 'sidebar');
?>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1776513271665e731ee03096_58102360', 'content');
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
class Block_682128963665e731edcfcb4_35873961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_682128963665e731edcfcb4_35873961',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="nav-header">
            <a href="javascript:void()" class="brand-logo">
                <span class="brand-title">Fit<span class="tracker-text">Tracker</span></span>
            

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
view_stats" class="dropdown-item">
                                        <i class="icon icon-chart-bar-33"></i>
                                        <span class="ml-2">Statystyki </span>
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
class Block_1159008066665e731ede0677_50231489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sidebar' => 
  array (
    0 => 'Block_1159008066665e731ede0677_50231489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="sidebar">
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                        <li class="nav-label">Administracja</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon icon-settings"></i><span class="nav-text">Ustawienia</span></a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_userList">Użytkownicy</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_roleList">Role</a></li>
                            </ul>
                        </li>
                        <?php }?>
                        <li class="nav-label">Menu</li>
                        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value || $_smarty_tpl->tpl_vars['isTrainee']->value) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_myTrainer" aria-expanded="false">
                            <i class="icon-user"></i><span class="nav-text">Mój trener</span></a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_noteList" aria-expanded="false">
                            <i class="icon icon-app-store"></i><span class="nav-text">Notatki</span></a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_stats" aria-expanded="false">
                            <i class="icon icon-chart-bar-33"></i><span class="nav-text">Statystyki</span></a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_trainerList" aria-expanded="false">
                            <i class="icon icon-users-mm"></i><span class="nav-text">Dostępni trenerzy</span></a>
                        </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['isTrainer']->value) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_traineeList" aria-expanded="false">
                            <i class="icon icon-users-mm"></i><span class="nav-text">Moi podopieczni</span></a>
                        </li>
                        <li>
                        </li>
                        <li><a <?php if (false) {?>class="requestWarning"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_requestList" aria-expanded="false">
                            <i class="icon icon-bell-53"></i><span class="nav-text">Prośby o współpracę</span></a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_noteList" aria-expanded="false">
                            <i class="icon icon-app-store"></i><span class="nav-text">Notatki</span></a>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
view_stats" aria-expanded="false">
                            <i class="icon icon-chart-bar-33"></i><span class="nav-text">Statystyki</span></a>
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
class Block_1776513271665e731ee03096_58102360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1776513271665e731ee03096_58102360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'content'} */
}
