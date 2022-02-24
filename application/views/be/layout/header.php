<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo" style='z-index: 1000; padding-top: 16px;'>
                <a href="<?php echo base_url('');?>">                            
                    <img src="<?php echo base_url('assets/images/logo.svg');?>" alt="logo" class="logo-default" style='width: 220px; margin-top: 0px;'>
                </a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">                                                        
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <li class="dropdown-extended quick-sidebar-toggler">    
                        <a href="<?php echo base_url('admin/logout');?>" style="padding: 0px; font-size: 20px; color: #8ea3b6;">                   
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">                    
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->            
            <div class="hor-menu">                
                <ul class="nav navbar-nav">
                    <li class="<?php echo ($current == 'faqs' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/faqs');?>">FAQs</a>
                    </li>
                    <li class="<?php echo ($current == 'comments' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/comments');?>">Comments</a>
                    </li>
                    <li class="<?php echo ($current == 'portfolios' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/portfolios');?>">Portfolios</a>
                    </li>
                    <li class="<?php echo ($current == 'articles' ? 'active' : '');?>">
                        <a href="<?php echo base_url('admin/articles');?>">Articles</a>
                    </li>                    
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>