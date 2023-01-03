<div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo $data_settings['link_fav']; ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo $data_settings['link_logo_dark']; ?>" alt="" height="25">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo $data_settings['link_fav']; ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo $data_settings['link_logo']; ?>" alt="" height="25">
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <div class="d-flex">
                          
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="https://preeminent-bubblegum-5cf0ce.netlify.app/assets/images/users/user-4.jpg"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>
                        <div class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-secondary dropdown-toggle" href="<?php echo $cfg_baseurl; ?>/deposit"  aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-wallet"></i>
                                    <?php
                                        if ($data_user['balance'] == "0" or $data_user['balance'] < 0) {
                                        ?>
                                        <b><?php echo rupiah($data_user['balance']); ?></b>
                                        <?php
                                        } ?>
                                        <?php
                                        if ($data_user['balance'] > 0) {
                                        ?>
                                       <b> <?php echo rupiah($data_user['balance']); ?></b>
                                        <?php
                                        } ?>
                                         
                                    </a>

                                
                            </div>
                        </div>

                        
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="<?php echo $cfg_baseurl; ?>" class="waves-effect">
                                    <i class="ti-home"></i>
                                    <span>Beranda</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $cfg_baseurl; ?>/order" class=" waves-effect">
                                    <i class="ti-shopping-cart"></i>
                                    <span>Pemesanan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $cfg_baseurl; ?>/deposit" class=" waves-effect">
                                    <i class="ti-wallet"></i>
                                    <span>Deposit</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-printer"></i>
                                    <span>Riwayat</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo $cfg_baseurl; ?>/riwayat/order">Inbox</a></li>
                                    <li><a href="<?php echo $cfg_baseurl; ?>/riwayat/deposit">Email Read</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo $cfg_baseurl; ?>/layanan" class=" waves-effect">
                                    <i class="ti-server"></i>
                                    <span>Layanan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $cfg_baseurl; ?>/api" class=" waves-effect">
                                    <i class="ti-package"></i>
                                    <span>Res-API</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $cfg_baseurl; ?>/faq" class=" waves-effect">
                                    <i class="ti-help-alt"></i>
                                    <span>F.A.Q</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $cfg_baseurl; ?>/keluar" class=" waves-effect">
                                    <i class="ti-lock"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                            

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->