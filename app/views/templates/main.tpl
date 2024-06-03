<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
  {include file="head.tpl"}
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
        {block name=header}
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
                                   {$user['username']} <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{$conf->action_root}view_profile" class="dropdown-item">
                                        <i class="icon icon-chart-bar-33"></i>
                                        <span class="ml-2">Statystyki </span>
                                    </a>
                                    <a href="{$conf->action_root}logout" class="dropdown-item">
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
        {/block}
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        {block name=sidebar}
        <div class="sidebar">
            <div class="quixnav">
                <div class="quixnav-scroll">
                    <ul class="metismenu" id="menu">
                        {if $isAdmin}
                        <li class="nav-label">Administracja</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon icon-settings"></i><span class="nav-text">Ustawienia</span></a>
                            <ul aria-expanded="false">
                                <li><a href="{$conf->action_root}view_userList">Użytkownicy</a></li>
                                <li><a href="{$conf->action_root}view_roleList">Role</a></li>
                            </ul>
                        </li>
                        {/if}
                        <li class="nav-label">Menu</li>
                        {if $isAdmin || $isTrainee}
                        <li><a href="{$conf->action_root}view_myTrainer" aria-expanded="false">
                            <i class="icon-user"></i><span class="nav-text">Mój trener</span></a>
                        </li>
                        <li><a href="{$conf->action_root}view_noteList" aria-expanded="false">
                            <i class="icon icon-app-store"></i><span class="nav-text">Notatki</span></a>
                        </li>
                        <li><a href="{$conf->action_root}view_stats" aria-expanded="false">
                            <i class="icon icon-chart-bar-33"></i><span class="nav-text">Statystyki</span></a>
                        </li>
                        <li><a href="{$conf->action_root}view_trainerList" aria-expanded="false">
                            <i class="icon icon-users-mm"></i><span class="nav-text">Dostępni trenerzy</span></a>
                        </li>
                        {/if}
                        {if $isTrainer}
                        <li><a href="{$conf->action_root}view_traineeList" aria-expanded="false">
                            <i class="icon icon-users-mm"></i><span class="nav-text">Moi podopieczni</span></a>
                        </li>
                        <li>
                        </li>
                        <li><a {if false }class="requestWarning"{/if} href="{$conf->action_root}view_requestList" aria-expanded="false">
                            <i class="icon icon-bell-53"></i><span class="nav-text">Prośby o współpracę</span></a>
                        </li>
                        <li><a href="{$conf->action_root}view_noteList" aria-expanded="false">
                            <i class="icon icon-app-store"></i><span class="nav-text">Notatki</span></a>
                        </li>
                        <li><a href="{$conf->action_root}view_stats" aria-expanded="false">
                            <i class="icon icon-chart-bar-33"></i><span class="nav-text">Statystyki</span></a>
                        </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </div>
        {/block}
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
        {block name=content}
        {/block}
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
    {include file="required.tpl"}
</body>

</html>