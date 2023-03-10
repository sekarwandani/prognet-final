<div class="nk-sidebar nk-sidebar-fixed bg-white" data-content="sidebarMenu">
<!-- <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu"> -->
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="html/index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{asset('assets/images/leaf-branch-logo.png')}}" srcset="{{asset('assets/images/leaf-branch-logo.png')}}" alt="logo">
                            <img class="logo-dark logo-img" src="{{asset('assets/images/leaf-branch-logo.png')}}" srcset="{{asset('assets/images/leaf-branch-logo.png')}}" alt="logo-dark">
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Master</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('master_pengaduan.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                        <span class="nk-menu-text">Pengaduan</span>
                                    </a>
                                    <a href="{{route('master_respon.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                    <span class="nk-menu-text">Responder</span>
                                    </a>
                                    </a>
                                    <a href="{{route('master_jenis_aduan.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                    <span class="nk-menu-text">Jenis Aduan</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Transaksi Admin</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('trx_aduan.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-building"></em></span>
                                        <span class="nk-menu-text">Aduan</span><!-- <span class="nk-menu-badge">HOT</span> -->
                                    </a>
                                <li class="nk-menu-item">
                                    <a href="{{route('trx_aduan_respon.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-building"></em></span>
                                        <span class="nk-menu-text">Aduan Respon</span><!-- <span class="nk-menu-badge">HOT</span> -->
                                    </a>
                                </li><!-- .nk-menu-item -->
                            
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Report</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('report.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-list-index"></em></span>
                                        <span class="nk-menu-text">Report 1</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{URL('REPORT')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                                        <span class="nk-menu-text">Report 2</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>