<div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                               <img src="<?= base_url('assets')?>/src/img/brand-white.svg" class="header-brand-img" alt="lavalite"> 
                            </div>
                            <span class="text">ThemeKit</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <div class="nav-item">
                                    <a href="<?= base_url('dasboard')?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                    <div class="nav-item has-sub <?= $this->uri->segment(1)==='departement'?'active':''; ?>">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Data Master</span></a>
                                    <div class="submenu-content ">
                                        <a href="<?= base_url('departement')?>" class="menu-item" <?= $this->uri->segment(1)==='departement'?'active':''; ?>>Data Departemen</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>