<style>
    .yel{
        color: rgb(255, 217, 0);
    }
</style>

<div id="kt_header_mobile" class="header-mobile bg-primary  header-mobile-fixed ">
        <!--begin::Logo-->
        <a href="dashboard">
            <h3 class="text-white"><i class="fab fa-uikit yel"></i> TradeCapital<span class="yel">Max</span></h3>
        </a>
        <!--end::Logo-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">

            <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>

            <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo7/dist/assets/media/svg/icons/General/User.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon--></span> </button>
        </div>
        <!--end::Toolbar-->
    </div>



    <div id="kt_header" class="header flex-column  header-fixed ">
                    <!--begin::Top-->
                    <div class="header-top">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::Left-->
                            <div class="d-none d-lg-flex align-items-center mr-3">
                                <!--begin::Logo-->
                                <a href="dashboard" class="mr-20">
                                <h3 class="text-white"><i class="fab fa-uikit yel"></i> TradeCapital<span class="yel">Max</span></h3>
                                </a>
                                <!--end::Logo-->

                                <!--begin::Tab Navs(for desktop mode)-->
                                <ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
                                    <!--begin::Item-->
                                    <li class="nav-item">
                                        <a href="#" class="nav-link py-4 px-6 active" data-toggle="tab"
                                            data-target="#kt_header_tab_1" role="tab">
                                            <?php echo $request; ?>
                                        </a>
                                    </li>
                                    <!--end::Item-->

                                  
                                    <!--end::Item-->
                                </ul>
                                <!--begin::Tab Navs-->
                            </div>
                            <!--end::Left-->

                            <!--begin::Topbar-->
                            <div class="topbar bg-primary">
                                <!--begin::Search-->
                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
                                            <span class="svg-icon svg-icon-xl">
                                                <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo7/dist/assets/media/svg/icons/General/Search.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon--></span> </div>
                                    </div>
                                    <!--end::Toggle-->

                                 
                                </div>
                                <!--end::Search-->

                           

                                <!--begin::User-->
                                <div class="topbar-item">
                                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2"
                                        id="kt_quick_user_toggle">
                                        <div class="d-flex flex-column text-right pr-3">
                                            <span
                                                class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline"><?php echo $user['fullname']; ?></span>
                                            <span
                                                class="text-white font-weight-bolder font-size-sm d-none d-md-inline">Basic</span>
                                        </div>
                                        <span class="symbol symbol-35">
                                            <span
                                                class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30"><?php echo $user['fullname'][0]; ?></span>
                                        </span>
                                    </div>
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Top-->

                    <!--begin::Bottom-->
                    <div class="header-bottom">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::Header Menu Wrapper-->
                            <div class="header-navs header-navs-left" id="kt_header_navs">
                               

                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">
                                        <!--begin::Menu-->
                                        <div id="kt_header_menu"
                                            class="header-menu header-menu-mobile  header-menu-layout-default ">
                                            <!--begin::Nav-->
                                            <ul class="menu-nav ">
                                                <li class="menu-item    " id="dashboard" aria-haspopup="true"><a
                                                        href="dashboard"  class="menu-link "><span
                                                            class="menu-text">Overview</span></a>
                                                </li>
                                                <li class="menu-item   " id="wallet"  aria-haspopup="true"><a
                                                        href="wallet" class="menu-link "><span
                                                            class="menu-text">Wallet</span></a>
                                                </li>
                                                <li class="menu-item    "  id="LiveTrade"  aria-haspopup="true"><a
                                                        href="LiveTrade" class="menu-link "><span
                                                            class="menu-text">LiveTrade</span></a>
                                                </li>
                                                <li class="menu-item " id="<?php echo $request; ?>"  aria-haspopup="true"><a
                                                        href="upgrades" class="menu-link "><span
                                                            class="menu-text">Upgrades</span></a>
                                                </li>
                                                <li class="menu-item    " id="<?php echo $request; ?>"  aria-haspopup="true"><a
                                                        href="profile" class="menu-link "><span
                                                            class="menu-text">profile</span></a>
                                                </li>
                                              
                                            </ul>
                                            <!--end::Nav-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--begin::Tab Pane-->

                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_2">
                                        <div
                                            class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                                            <!--begin::Actions-->
                                            <a href="#"
                                                class="btn btn-light-success font-weight-bold mr-3 my-2 my-lg-0">
                                                Latest Orders
                                            </a>

                                            <a href="#" class="btn btn-light-primary font-weight-bold my-2 my-lg-0">
                                                Customer Service
                                            </a>
                                            <!--end::Actions-->
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <!--begin::Actions-->
                                            <a href="#" class="btn btn-danger font-weight-bold my-2 my-lg-0">
                                                Generate Reports
                                            </a>
                                            <!--end::Actions-->
                                        </div>
                                    </div>
                                    <!--begin::Tab Pane-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end::Header Menu Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Bottom-->
                </div>

                <script>
                    document.getElementById('<?php echo $request; ?>').classList+=" menu-item-active"
                </script>