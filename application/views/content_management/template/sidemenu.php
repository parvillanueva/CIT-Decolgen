<style type="text/css">
  
    a.disabled {
        pointer-events: none;
        cursor: default;
    }

    body .skin-black .skin-blue .skin-green .skin-red .skin-yellow .skin-purple .main-sidebar .sidebar-menu > li a.active_side_menu{
        color: #ffffff;
        background: #1e282c;
        border-left-color: #ffffff;
    }

    body .skin-black .skin-blue .skin-green .skin-red .skin-yellow .skin-purple .main-sidebar .main-sidebar .sidebar-menu > li a.group_active_side_menu {
        color: #ffffff;
    }

    ul.treeview-menu.sub_menu.active {
        display: block;
    }

    .sidebar-menu .active > a > .fa-angle-left,
    .sidebar-menu .active > a > .pull-right-container > .fa-angle-left {
        -webkit-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .sidebar-scroll{
        overflow-y: auto;
        height: 100%;
    }

</style>

<?php
    //get url for db table checking on user role
    $url =  "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
    $urls = explode('/', $escaped_url);
    $remove_base_url = array_splice($urls,4);
    $limit_url = count($remove_base_url);
    $combine_url ="";
    if($limit_url >= 3 ){
        if($remove_base_url[1] == 'cms_menu' || $remove_base_url[1] == 'site_menu' || $remove_base_url[1] == 'preference' || $remove_base_url[1] == 'documentation'){
            $combine_url = $remove_base_url[0].'/'.$remove_base_url[1].'/'.$remove_base_url[2];
            if($remove_base_url[2] == 'menu_add' || $remove_base_url[2] == 'menu_update'){
                $set_last_index = 'menu';
                $combine_url = $remove_base_url[0].'/'.$remove_base_url[1].'/'.$set_last_index;
            }
        }else{
            $combine_url = $remove_base_url[0].'/'.$remove_base_url[1];
        }
    }else{
        $combine_url = implode("/",$remove_base_url);
    }
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" style="height: auto; min-height: 100%;">
        <div class="main-container">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= base_url()."content_management/"?>" style="height: 54px;" class="logo">
                    <span class="logo-mini"></span>
                    <span class="logo-lg"></span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" id="sidebar_toggle" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <label> Hi  </label> <?php  echo ucwords($this->session->userdata('sess_name')); ?>!
                                </a>

                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-footer">
                                        <a href="<?=base_url()?>content_management/login/unset_session">Sign out</a>
                                    </li>
                                    <li class="user-footer">
                                        <a href="<?=base_url()?>content_management/change_password" class="change-password">Change Password</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
  
            <aside class="main-sidebar">
                <section class="sidebar sidebar-scroll">
                    <ul class="sidebar-menu"></ul>
                </section>
            </aside>
        </div>
    </div>


<script type="text/javascript">

    var base_url = '<?=base_url();?>';
    var content_management = '<?=base_url("content_management");?>';

    var menu_url = '<?=$combine_url;?>';
    var user_role = '<?=$this->session->userdata('sess_role');?>';

</script>

<script type="text/javascript" src="<?=base_url();?>cms/js/cms/template/sidemenu.js"></script>