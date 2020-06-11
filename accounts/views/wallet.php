<?php include "model/sessions.php"; ?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<!-- Mirrored from keenthemes.com/metronic/preview/demo7/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:44:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<style>
    tr:nth-child(odd){
        background: #fcfcfc !important;
    }
</style>
<!--end::Head-->
<?php include "partials/resource.php"; ?>
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">

    <!--begin::Main-->
    <!--begin::Header Mobile-->

    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <?php include "partials/header.php"; ?>
                <!--end::Header-->

                <!--begin::Content-->
                <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class=" container ">
                            <!--begin::Dashboard-->
                            <!--begin::Row-->
                            <div class="row mt-0 mt-lg-3">
                                <div class="col-xl-4">
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <div class="card-title font-weight-bolder">
                                                <div class="card-label">
                                                    <?php echo explode(' ',$user['fullname'])[0]."'s Wallet"; ?>
                                                    <div class="font-size-sm text-muted mt-2">
                                                        <?php echo mysqli_num_rows(mysqli_query($db,"select * from trans where user = '".$user['email']."'")); ?> Transactions
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body p-0 d-flex flex-column">
                                            <!--begin::Items-->
                                            <div class="flex-grow-1 card-spacer">
                                                <div class="row row-paddingless mt-5 mb-10">
                                                    <!--begin::Item-->
                                                    <div class="col">
                                                        <div class="d-flex align-items-center mr-2">
                                                            <!--begin::Symbol-->
                                                            <div
                                                                class="symbol symbol-45 symbol-light-info mr-4 flex-shrink-0">
                                                                <div class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-info">
                                                                        <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo7/dist/assets/media/svg/icons/Shopping/Cart3.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                                <path
                                                                                    d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                                                    fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </div>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div>
                                                                <div
                                                                    class="font-size-h4 text-dark-75 font-weight-bolder">
                                                                    $<?php echo $user['wallet']; ?> </div>
                                                                <div
                                                                    class="font-size-sm text-muted font-weight-bold mt-1">
                                                                    Current Balance</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    
                                                    <!--end::Widget Item-->
                                                </div>

                                                <div class="row row-paddingless">
                                                    <!--begin::Item-->
                                                    <div class="col">
                                                        <div class="d-flex align-items-center mr-2">
                                                            <!--begin::Symbol-->
                                                            <div
                                                                class="symbol symbol-45 symbol-light-success mr-4 flex-shrink-0">
                                                                <div class="symbol-label">
                                                                    <span class="svg-icon svg-icon-lg svg-icon-success">
                                                                        <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo7/dist/assets/media/svg/icons/Shopping/Cart3.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24"
                                                                                    height="24" />
                                                                                <path
                                                                                    d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3" />
                                                                                <path
                                                                                    d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z"
                                                                                    fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon--></span> </div>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div>
                                                                <div
                                                                    class="font-size-h4 text-dark-75 font-weight-bolder">
                                                                    <?php if($user['wallet'] > 0){ echo rand(3,25)."%";}?></div>
                                                                <div
                                                                    class="font-size-sm text-muted font-weight-bold mt-1">
                                                                   Dynamic Profit Range</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->

                                                

                                                   
                                                </div>
                                                <div class=" pt-8 row">
                                                <button class="btn btn-success btn-lg col-xs-12" style="width: 100%;"  data-toggle="modal" data-target="#exampleModalShort">Deposit Now</button>
                                                <button class="btn btn-primary btn-lg col-xs-12 " style="width: 100%; margin-top:10px"  data-toggle="modal" data-target="#exampleModalLong">Request Withdrawal</button>
                                                </div>
                                            </div>
                                            <!--end::Items-->
                                                
                                            <!--begin::Chart-->
                                            <div id="kt_mixed_widget_17_chart" class="card-rounded-bottom"
                                                data-color="warning" style="height: 200px"></div>
                                            <!--end::Chart-->
                                        </div>
                                        <!--end::Body-->
                                    </div>

                                </div>


                                <div class="col-lg-8">
                                    <!--begin::Base Table Widget 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Transactions</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm"><?php echo mysqli_num_rows(mysqli_query($db,"select * from trans where user='".$user['email']."' ")); ?></span>
                                            </h3>
                                         
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-stripped table-vertical-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-0" style="width: 50px"></th>
                                                            <th class="p-0" style="min-width:50px"></th>
                                                            <th class="p-0" style="min-width:40px"></th>
                                                            <th class="p-0" style="min-width:20px"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="mytable">
                                                       
                                                      
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->

                                            <div class="card-footer">
                                            <div class="btns btn-group"></div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Base Table Widget 2-->
                                </div>
                            </div>
                            <!--end::Row-->


                        <!-- deposit modal  -->
                            
<!-- Modal-->
<div class="modal fade" id="exampleModalShort" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crypto Deposit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
               <form class="ajax">
               <div class="form-group">
				<label> Deposit amount</label>
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text ">$</span></div>
					<input type="number" maxlength="7" name='deposit' required id="usdamt" class="form-control" placeholder="deposit amt (USD)" />
				</div>
				<span class="form-text text-muted">Deposit amount in USD</span>
               </div>
               
               <div class="form-group">
				<label>BTC Equivalent</label>
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text fab fa-bitcoin"></span></div>
					<input type="number" id="btcequiv" name="btc" readonly class="form-control"  placeholder="calculated BTC Equivalent" />
				</div>
				<span class="form-text text-muted">Btc to be sent</span>
			   </div>
               
               <div class="form-group">
				<label>BTC Wallet address</label>
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text far fa-user-circle"></span></div>
					<input   id="btcwallet" name="wallet" class="form-control" value="adava7d6vadfga42f27wetdavgasc57asf"  />
				</div>
				<span class="form-text text-muted">personal Btc wallet</span>
			   </div>
               
               <div class="form-group">
				<label>Refrence id</label>
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text fas fa-window-restore"></span></div>
					<input   id ="ref" class="form-control" name="ref" value="<?php echo 'ref-'.rand(199,12231234); ?>" />
				</div>
				<span class="form-text text-muted">transaction reference</span>
               </div>
               <input type="hidden" name="control" value="transactions">
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary font-weight-bold">deposit</button>
            </div>
            </form>
        </div>
    </div>
</div>
                        <!-- withdrawalmodal modal  -->
                            
<!-- Modal-->
<div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Withdrawal Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
               <form class="ajax">
               <div class="form-group">
				<label> Withdrawal amount</label>
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text ">$</span></div>
					<input type="number" maxlength="7" id="usdamtx" name="withdraw" required class="form-control" placeholder="withdraw amt (USD)" />
				</div>
				<span class="form-text text-muted">Withdrawal amount in USD</span>
               </div>
               
               <div class="form-group">
				<label>BTC Equivalent</label>
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text fab fa-bitcoin"></span></div>
					<input type="number" id="btcequivx" name="btc"  class="form-control" required readonly placeholder="calculated BTC Equivalent" />
				</div>
				<span class="form-text text-muted">Btc to be sent</span>
               </div>
               <input type="hidden" name="control" value="transactions">
               
               <div class="form-group">
				<label>BTC Wallet address</label>
				<div class="input-group">
					<div class="input-group-prepend"><span class="input-group-text far fa-user-circle"></span></div>
					<input required  id="btcwallet" name="wallet" class="form-control" value=""  />
				</div>
				<span class="form-text text-muted">send Btc to this address</span>
			   </div>
               
              
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>



                            <!--begin::Row-->

                            <!--end::Row-->
                            <!--end::Dashboard-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <?php include "partials/footer.php"; ?>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->





    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">
                 Profile
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->

        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label far fa-gem" style="font-size: 4em;">
                    </div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                        <?php echo $user['fullname']; ?>
                    </a>
                    <div class="text-muted mt-1">
                      <?php echo $user['package']; ?>
                    </div>
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo7/dist/assets/media/svg/icons/Communication/Mail-notification.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill="#000000" />
                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon--></span> </span>
                                <span class="navi-text text-muted text-hover-primary">  <?php echo $user['email']; ?></span>
                            </span>
                        </a>

                        <a href="#signout" id="signout" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                    </div>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->

            <!--begin::Nav-->
            <div class="navi navi-spacer-x-0 p-0">
                <!--begin::Item-->
                <a href="profile" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-success">
                                    <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo7/dist/assets/media/svg/icons/General/Notification2.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill="#000000" />
                                            <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Profile
                            </div>
                            <div class="text-muted">
                                Account settings and more
                                <span class="label label-light-danger label-inline font-weight-bold">update</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->

                <!--begin::Item-->
                <a href="wallet" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-md svg-icon-warning">
                                    <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo7/dist/assets/media/svg/icons/Shopping/Chart-bar1.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13"
                                                rx="1.5" />
                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8"
                                                rx="1.5" />
                                            <path
                                                d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6"
                                                rx="1.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">
                                My Wallet
                            </div>
                            <div class="text-muted">
                                Inbox and tasks
                            </div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->

                
            </div>
            <!--end::Nav-->

            <!--begin::Separator-->
            <div class="separator separator-dashed my-7"></div>
            <!--end::Separator-->

            <!--begin::Notifications-->
            <div>
                <!--begin:Heading-->
                <h5 class="mb-5">
                    Recent Notifications
                </h5>
                <!--end:Heading-->

                <?php
                $g = mysqli_query($db,"select * from trans where user='".$user['email']."' order by id desc limit 4");
                while($get=mysqli_fetch_array($g)){ if($get['type'] === 'd'){$col='primary';}else{$col='warning';} ?>
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-<?php echo $col; ?> rounded p-5 gutter-b">
                    <span class="svg-icon svg-icon-<?php echo $col; ?> mr-5">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo7/dist/assets/media/svg/icons/Home/Library.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                        fill="#000000" />
                                    <rect fill="#000000" opacity="0.3"
                                        transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                        x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                </g>
                            </svg>
                            <!--end::Svg Icon--></span> </span>

                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1"><?php echo $get['ref']; ?></a>
                        <span class="text-muted font-size-sm"><?php echo $get['date']; ?></span>
                    </div>

                    <span class="font-weight-bolder text-<?php echo $col; ?> py-1 font-size-lg">$<?php echo $get['amt']; ?></span>
                </div>
                <?php } ?>
                <!--end::Item-->

              

            </div>
            <!--end::Notifications-->
        </div>
        <!--end::Content-->
    </div>




    <script>
        var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="themes/metronic/theme/html/demo7/dist/assets/plugins/global/plugins.bundle7a4a.js?v=7.0.4"></script>
    <script src="themes/metronic/theme/html/demo7/dist/assets/plugins/custom/prismjs/prismjs.bundle7a4a.js?v=7.0.4">
    </script>
    <script src="themes/metronic/theme/html/demo7/dist/assets/js/scripts.bundle7a4a.js?v=7.0.4"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Vendors(used by this page)-->
    <script
        src="themes/metronic/theme/html/demo7/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle7a4a.js?v=7.0.4">
    </script>
    <!--end::Page Vendors-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="themes/metronic/theme/html/demo7/dist/assets/js/pages/widgets7a4a.js?v=7.0.4"></script>
    <!--end::Page Scripts-->
    
    <script src="themes/metronic/theme/html/demo7/dist/assets/js/crumb.js"></script>
    <script src="themes/metronic/theme/html/demo7/dist/assets/js/app.js"></script>
  
</body>
<!--end::Body-->

<!-- Mirrored from keenthemes.com/metronic/preview/demo7/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:49:24 GMT -->

</html>