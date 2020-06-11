<?php include "model/sessions.php"; ?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<!-- Mirrored from keenthemes.com/metronic/preview/demo7/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 15:44:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<style>
    tr:nth-child(odd) {
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
                               
                                <form class="col-lg-12 ajax">
                                    <div class="card card-custom card-stretch">
                                        <!--begin::Header-->
                                        <div class="card-header py-3">
                                            <div class="card-title align-items-start flex-column">
                                                <h3 class="card-label font-weight-bolder text-dark">Personal Information
                                                </h3>
                                                <span class="text-muted font-weight-bold font-size-sm mt-1">Update your
                                                    personal informaiton</span>
                                            </div>
                                            <div class="card-toolbar">
                                                <button type="submit" class="btn btn-success mr-2">Save Changes</button>
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Form-->
                                        <form class="form">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <div class="row">
                                                    <label class="col-lg-3"></label>
                                                    <div class="col-lg-9 col-lg-6">
                                                        <h5 class="font-weight-bold mb-6">Customer Info</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-lg-3 col-form-label text-right"></label>
                                                    <div class=" col-xs-3 col-lg-3 col-lg-3">
                                                        <div class="card card-body text-center">
                                                            <h1 class="far fa-gem"> </h1>
                                                            <small><?php echo $user['package']; ?></small>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-lg-3 col-form-label text-right">Full
                                                        Name</label>
                                                    <div class="col-lg-9 col-lg-6">
                                                        <input required class="form-control form-control-lg form-control-solid"
                                                            type="text" name="profile" value="<?php echo $user['fullname']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-lg-3 col-form-label text-right">Contact
                                                        Phone</label>
                                                    <div class="col-lg-9 col-lg-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="fas fa-phone-alt"></i></span></div>
                                                            <input required type="text"
                                                                class="form-control form-control-lg form-control-solid"
                                                                value="<?php echo $user['phone']; ?>"
                                                                placeholder="Phone" name="phone">
                                                        </div>
                                                        <span class="form-text text-muted">We'll never share your email
                                                            with anyone else.</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-lg-3 col-form-label text-right">Email
                                                        Address</label>
                                                    <div class="col-lg-9 col-lg-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="fas fa-mail-bulk"></i></span></div>
                                                            <input required type="email"
                                                                class="form-control form-control-lg form-control-solid"
                                                                value="<?php echo $user['email']; ?>"
                                                                placeholder="Email" name="email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label class="col-lg-3"></label>
                                                    <div class="col-lg-9 col-lg-6">
                                                        <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                                                    </div>
                                                </div>
                                             
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-lg-3 col-form-label text-right">Country</label>
                                                    <div class="col-lg-9 col-lg-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i class="fas fa-globe-americas"></i></span></div>
                                                            <select name="country"
                                                                class="form-control form-control-lg form-control-solid">
                                                                <option value="<?php echo $user['country']; ?>"><?php echo $user['country']; ?></option>
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Åland Islands">Åland Islands</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda
                                                                </option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia">Bolivia</option>
                                                                <option value="Bosnia and Herzegovina">Bosnia and
                                                                    Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British
                                                                    Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam
                                                                </option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African
                                                                    Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island
                                                                </option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling)
                                                                    Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, The Democratic Republic of The">
                                                                    Congo, The Democratic Republic of The</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic
                                                                </option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea
                                                                </option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland
                                                                    Islands (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia
                                                                </option>
                                                                <option value="French Southern Territories">French
                                                                    Southern Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernsey">Guernsey</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard Island and Mcdonald Islands">Heard
                                                                    Island and Mcdonald Islands</option>
                                                                <option value="Holy See (Vatican City State)">Holy See
                                                                    (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic
                                                                    Republic of</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Israel">Israel</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic People's Republic of">
                                                                    Korea, Democratic People's Republic of</option>
                                                                <option value="Korea, Republic of">Korea, Republic of
                                                                </option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao People's Democratic Republic">Lao
                                                                    People's Democratic Republic</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab
                                                                    Jamahiriya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option
                                                                    value="Macedonia, The Former Yugoslav Republic of">
                                                                    Macedonia, The Former Yugoslav Republic of</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands
                                                                </option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States of">
                                                                    Micronesia, Federated States of</option>
                                                                <option value="Moldova, Republic of">Moldova, Republic
                                                                    of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands
                                                                    Antilles</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern
                                                                    Mariana Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory, Occupied">
                                                                    Palestinian Territory, Occupied</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea
                                                                </option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="Reunion">Reunion</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation
                                                                </option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Helena">Saint Helena</option>
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and
                                                                    Nevis</option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre
                                                                    and Miquelon</option>
                                                                <option value="Saint Vincent and The Grenadines">Saint
                                                                    Vincent and The Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and
                                                                    Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option
                                                                    value="South Georgia and The South Sandwich Islands">
                                                                    South Georgia and The South Sandwich Islands
                                                                </option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan
                                                                    Mayen</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab
                                                                    Republic</option>
                                                                <option value="Taiwan, Province of China">Taiwan,
                                                                    Province of China</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic of">Tanzania,
                                                                    United Republic of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Timor-leste">Timor-leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago
                                                                </option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Islands">Turks and
                                                                    Caicos Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab
                                                                    Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United States Minor Outlying Islands">
                                                                    United States Minor Outlying Islands</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela">Venezuela</option>
                                                                <option value="Viet Nam">Viet Nam</option>
                                                                <option value="Virgin Islands, British">Virgin Islands,
                                                                    British</option>
                                                                <option value="Virgin Islands, U.S.">Virgin Islands,
                                                                    U.S.</option>
                                                                <option value="Wallis and Futuna">Wallis and Futuna
                                                                </option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-lg-3 col-form-label text-right">
                                                        Address</label>
                                                    <div class="col-lg-9 col-lg-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class=" far fa-address-card"></i></span></div>
                                                            <input required type="text"
                                                                class="form-control form-control-lg form-control-solid"
                                                                value="<?php echo $user['address']; ?>"
                                                                name="address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-lg-3 col-form-label text-right">Btc
                                                        Address</label>
                                                    <div class="col-lg-9 col-lg-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-pre"><span
                                                                    class="input-group-text"><i
                                                                        class="fab fa-btc"></i></span></div>
                                                            <input name="btc" required type="text"
                                                                class="form-control form-control-lg form-control-solid"
                                                                value="<?php echo $user['btc']; ?>" value="loop">
                                                           <input type="hidden" name="control" value="transactions">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                               
                                </form>
                            </div>
                            <!--end::Row-->


                            <!-- deposit modal  -->

                            <!-- withdrawalmodal modal  -->





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





    <!-- begin::User Panel-->
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
                        Application Developer
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
                                <span class="navi-text text-muted text-hover-primary">
                                    <?php echo $user['email']; ?></span>
                            </span>
                        </a>

                        <a href="#signout" id="signout"
                            class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
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
                        <a href="#"
                            class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1"><?php echo $get['ref']; ?></a>
                        <span class="text-muted font-size-sm"><?php echo $get['date']; ?></span>
                    </div>

                    <span
                        class="font-weight-bolder text-<?php echo $col; ?> py-1 font-size-lg">$<?php echo $get['amt']; ?></span>
                </div>
                <?php } ?>
                <!--end::Item-->



            </div>
            <!--end::Notifications-->
        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->




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
    <script>
        // toastr.warning('you are now on auto-trading mode');
    </script>

</body>
<!--end::Body-->

</html>