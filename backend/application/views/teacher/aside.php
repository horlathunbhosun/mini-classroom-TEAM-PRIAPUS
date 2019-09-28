<!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                            data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    
                                    <div class="pull-left info">
                                        <p>Welcome</p>
                                        <p> <?= $_SESSION['name']?></p>
                                        <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                                Online</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item start active open">
                                <a href="<?= base_url()?>index.php/teacher_es/index" class="nav-link">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    
                                </a>
                            </li>

                            
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                                    <span class="title">Classes</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item">
                                        <a href="<?= base_url()?>index.php/teacher_es/add_class" class="nav-link "> 
                                     <span class="title">Add Class</span>
                                        </a>
                                </li>

                                    <li class="nav-item">
                                        <a href="<?= base_url()?>index.php/teacher_es/all_class" class="nav-link "> <span class="title">All
                                                Classes</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link nav-toggle"> <i class="material-icons">group</i>
                                    <span class="title">Items</span> <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                <li class="nav-item">
                                        <a href="<?= base_url()?>index.php/teacher_es/add_item" class="nav-link "> 
                                     <span class="title">Add Items</span>
                                        </a>
                                </li>

                                    <li class="nav-item">
                                        <a href="<?= base_url()?>index.php/teacher_es/item_list" class="nav-link "> <span class="title">All
                                                Items</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </li>

                         

                           <li class="nav-item">
                                <a href="<?= base_url()?>index.php/teacher/logout" class="nav-link">
                                    <i class="material-icons">power_settings_new</i>
                                    <span class="title">Log out</span>
                                    
                                </a>
                            </li>
                            
                            

                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->