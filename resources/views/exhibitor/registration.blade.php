<!DOCTYPE html>
<html lang="en">

<head>
    @include('sections.meta')
    <title>
        {{ $title }}
    </title>
    @include('sections.styles')
    <link rel="stylesheet" href="{{ asset('css/style.v1.css?v=5') }}">
</head>

<body>
    <div class="wrapper striped-bg">
        <div class="container-fluid bg-container-pet">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="container-fluid px-4 py-5 my-5 text-center">
                        <div class="lc-block mb-4">
                            <div editable="rich">
                                <h2 class="display-2 fw-bold text-outlined text-brutal-yellow">
                                    Exhibitor Registration
                            </div>
                        </div>
                        <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                            <a class="btn brutal-btn bg-brutal-yellow btn-lg px-4 gap-3" href="{{ route('landing') }}" role="button" style="width: 225px; height: 52px;">
                                Go Back
                            </a>
                        </div>
                        {{-- <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <img class="img-fluid"
                                src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/10/undraw_going_up_ttm5.svg"
                                width="" height="783" srcset="" sizes="" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div id="firstContainer" class="container" style="max-width: 100%">
            <div id="info" class="row header-row-bottom text-center">
                <h4 class="text-brutal-white text-outlined header-text">Exhibitor Information</h4>
            </div>
            <div class="row pt-5" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 col-lg-12 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-name" class="form-label">Exhibitor Name</label>
                        <input id="exhibitor-name" type="text" class="brutal-form-input"/>
                    </div>

                    <div class="d-none d-lg-block" style="position: absolute; top: 15px; left: -107px; transform: rotate(65deg);">
                        <i class="bi bi-arrow-return-right" style="font-size: 144px; color: var(--brutal-black);"></i>
                    </div>
                </div>

                <div class="col-12 col-lg-8 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-address" class="form-label">Exhibitor Address</label>
                        <input id="exhibitor-address" type="text" class="brutal-form-input"/>
                    </div>

                    <div class="d-none d-lg-block" style="position: absolute; top: 15px; right: -30px;">
                        <i class="bi bi-caret-right-fill" style="font-size: 64px; color: var(--brutal-black);"></i>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-postal" class="form-label">ZIP Code (Postal)</label>
                        <input id="exhibitor-postal" type="number" class="brutal-form-input"/>
                    </div>
                </div>

                <div class="col-12 col-lg-8 mb-4" style="position: relative; margin-top: 50px;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-contact_person" class="form-label">Name of Contact Person</label>
                        <input id="exhibitor-contact_person" type="text" class="brutal-form-input"/>
                    </div>
                    <div class="d-none d-lg-block" style="position: absolute; top: 15px; left: -107px; transform: rotate(65deg);">
                        <i class="bi bi-arrow-return-right" style="font-size: 144px; color: var(--brutal-black);"></i>
                    </div>
                    <div class="d-none d-lg-block" style="position: absolute; top: 15px; right: -30px;">
                        <i class="bi bi-caret-right-fill" style="font-size: 64px; color: var(--brutal-black);"></i>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-4" style="margin-top: 50px;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-contact_number" class="form-label">Contact Number</label>
                        <input id="exhibitor-contact_number" type="text" class="brutal-form-input"/>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-email" class="form-label">Email Address (@)</label>
                        <input id="exhibitor-email" type="text" class="brutal-form-input"/>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-facebook_name" class="form-label">Facebook Page Name</label>
                        <input id="exhibitor-facebook_name" type="text" class="brutal-form-input"/>
                    </div>
                    <div class="d-none d-lg-block" style="position: absolute; top: 15px; right: -30px;">
                        <i class="bi bi-caret-right-fill" style="font-size: 64px; color: var(--brutal-black);"></i>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-facebook_link" class="form-label">Facebook Page Link (<b>/</b>)</label>
                        <input id="exhibitor-facebook_link" type="text" class="brutal-form-input"/>
                    </div>
                </div>
            </div>
            <div id="days" class="row header-row text-center">
                <h4 class="text-brutal-white text-outlined header-text">Select Days of Availment</h4>
            </div>
            <div class="row pt-5" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 col-lg-4 mb-4" style="position: relative;">
                    <button type="button" class="availment-days-btn btn brutal-btn bg-brutal-yellow" data-date="2024-06-28" data-active="false" style="width: 100%; height: 75px; font-size: 24px;"><i class="availment-days-icon bi bi-square" style="vertical-align: 0;"></i> <span class="availment-days-text">Day 1(June 28th)</span></button>
                </div>
                <div class="col-12 col-lg-4 mb-4" style="position: relative;">
                    <button type="button" class="availment-days-btn btn brutal-btn bg-brutal-yellow" data-date="2024-06-29" data-active="false" style="width: 100%; height: 75px; font-size: 24px;"><i class="availment-days-icon bi bi-square" style="vertical-align: 0;"></i> <span class="availment-days-text">Day 2(June 29th)</span></button>
                </div>
                <div class="col-12 col-lg-4 mb-4" style="position: relative;">
                    <button type="button" class="availment-days-btn btn brutal-btn bg-brutal-yellow" data-date="2024-06-30" data-active="false" style="width: 100%; height: 75px; font-size: 24px;"><i class="availment-days-icon bi bi-square" style="vertical-align: 0;"></i> <span class="availment-days-text">Day 3(June 30th)</span></button>
                </div>
            </div>
            <div id="days" class="row header-row text-center mt-5">
                <h4 class="text-brutal-white text-outlined header-text">Additional Information</h4>
            </div>
            <div class="row pt-5" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 col-lg-12 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-list-services" class="form-label">List of products or services you'll be selling (please specify)</label>
                        <div class="exhibitor-list-services-container">
                            <input type="text" class="brutal-form-input" data-id="0">
                        </div>
                        <button type="button" class="exhibitor-add-new-btn btn brutal-btn bg-brutal-orange mt-3" data-group="services" style="width: 400px; height: 55px; font-size: 18px;"><i class="bi bi-plus-square" style="vertical-align: 0;"></i> Add a Product, or Service</button>
                    </div>
                </div>
                <div class="col-12 col-lg-12 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-list-requests" class="form-label">List of special requests, needs, or considerations</label>
                        <div class="exhibitor-list-requests-container">
                            <input type="text" class="brutal-form-input" data-id="0">
                        </div>
                        <button type="button" class="exhibitor-add-new-btn btn brutal-btn bg-brutal-orange mt-3" data-group="requests" style="width: 400px; height: 55px; font-size: 18px;"><i class="bi bi-plus-square" style="vertical-align: 0;"></i> Add a Request, Need, or Consideration</button>
                    </div>
                </div>
                <div class="col-12 col-lg-12 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-list-equipments" class="form-label">List of equipments, machines, amenities you'll be bringing (please specify dimensions and quantity)</label>
                        <div class="exhibitor-list-equipments-container">
                            <input type="text" class="brutal-form-input" data-id="0">
                        </div>
                        <button type="button" class="exhibitor-add-new-btn btn brutal-btn bg-brutal-orange mt-3" data-group="equipments" style="width: 400px; height: 55px; font-size: 18px;"><i class="bi bi-plus-square" style="vertical-align: 0;"></i> Add an Equipment, Machine, or Amenity</button>
                    </div>
                </div>
            </div>
            <div id="rules" class="row header-row text-center mt-5">
                <h4 class="text-brutal-white text-outlined header-text">Exhibitor Rules and Requirements</h4>
            </div>
            <div class="row pt-5" style="max-width: 50%; margin: 0 auto;">
                <div class="col-12 mb-4">
                    <div class="brutal-card-input">
                        <label class="form-label">1.</label>
                        <span class="exhibitor-rules-text">
                            Ingress will start at 7:00 AM and must be finished before 10:00 AM (opening of event). Egress will be 10:00PM onwards.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">2.</label>
                        <span class="exhibitor-rules-text">
                            The Registration Fee must be settled on/or before the deadline which is indicated in this Registration Form. Only paid participants can have seats secured.
                            <br>
                            Alternatively, a downpayment of at least 500 pesos is required, depending on the packages availed.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">3.</label>
                        <span class="exhibitor-rules-text">
                            The event will only a maximum of <b>two representatives per booth</b>. The names and contact information must be provided 
                            in the Registration Form. Only those representatives submitted will be allowed inside the venue. The owner or contact person must 
                            notify the organizers beforehand (one day prior to event) if they will need to swap or switch out one or both of the representatives.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">4.</label>
                        <span class="exhibitor-rules-text">
                            Booth size and a copy of the layout will be provided along with this Registration Form.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input" style="background-color: var(--brutal-yellow);">
                        <label class="form-label" style="background-color: var(--brutal-yellow);">5.</label>
                        <span class="exhibitor-rules-text">
                            Physical set-up or look must be approved by Ms. Michaela Garcia prior to the event.
                            <br>
                            You must provide a list together with photos of all the equipment you'll be bringing for your booth.
                            <br>
                            <b>BRING YOUR OWN EXTENSION WIRE</b>.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input" style="background-color: var(--brutal-yellow);">
                        <label class="form-label" style="background-color: var(--brutal-yellow);">6.</label>
                        <span class="exhibitor-rules-text">
                            The list of products and services you'll be selling must also be provided prior to the event for approval of Manalo Resort and Hotel.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">7.</label>
                        <span class="exhibitor-rules-text">
                            Selling or marketing of products and services must only be done within the event venue.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">8.</label>
                        <span class="exhibitor-rules-text">
                            Cleanliness and orderliness must be maintained at ALL TIMES. Failure to do so will result in penalty fees to be collected by Manalo Resort Hotel.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">9.</label>
                        <span class="exhibitor-rules-text">
                            Exhibitors who will bring additional equipment ormachine not included in their registration form will NOT be allowed in the event.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">10.</label>
                        <span class="exhibitor-rules-text">
                            To secure your slot in the event, you must have successfully provided a copy of the accomplsihed Exhibitor Registration Form and have fully paid the registration fee on or before the deadline of registration.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">11.</label>
                        <span class="exhibitor-rules-text">
                            Cancellation Policy
                            <br>
                            &nbsp;&nbsp;a. Full refund of Registration Fee if cancellation is made before the deadline;
                            <br>
                            &nbsp;&nbsp;b. 100% forfeiture of the Registration Fee for cancellation after the deadline.
                        </span>
                    </div>
                </div>
            </div>
            <div id="booth_details" class="row header-row text-center mt-5">
                <h4 class="text-brutal-white text-outlined header-text">Registration and Booth Details</h4>
            </div>
            <div class="row pt-5" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 col-lg-4 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-booth-registration_fee" class="form-label">Registration Fee (PHP)</label>
                        <input id="exhibitor-booth-registration_fee" type="number" class="brutal-form-input" value="0.00" step="0.01" min="0.00" max="99999.99"/>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-booth-registration_start" class="form-label">Start of Registration</label>
                        <input id="exhibitor-booth-registration_start" type="date" class="brutal-form-input" value=""/>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-booth-registration_deadline" class="form-label">Deadline of Registration</label>
                        <input id="exhibitor-booth-registration_deadline" type="text" class="brutal-form-input" value="In 10 days (June 26, 2024)" readonly/>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-booth-representatives_count" class="form-label">No. of Representatives Allowed Per Booth</label>
                        <input id="exhibitor-booth-representatives_count" type="text" class="brutal-form-input" value="Two (2)" readonly/>
                    </div>
                </div>
                <div class="col-12 col-lg-8 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-payment-gateways" class="form-label">Payment Options (Select to view details)</label>
                        <div>
                            <button type="button" class="payment-gateways-btn btn brutal-btn bg-brutal-blue mt-2" data-group="gcash" style="width: 250px; height: 50px; font-size: 18px;">E-Wallet: GCash <i class="bi bi-qr-code" style="vertical-align: 0;"></i></button>
                            <button type="button" class="payment-gateways-btn btn brutal-btn bg-brutal-blue mt-2" data-group="bdo" style="width: 250px; height: 50px; font-size: 18px;">Bank Transfer: BDO <i class="bi bi-bank" style="vertical-align: 0;"></i></button>
                            <button type="button" class="payment-gateways-btn btn brutal-btn bg-brutal-red mt-2" data-group="bpi" style="width: 250px; height: 50px; font-size: 18px;">Bank Transfer: BPI <i class="bi bi-bank" style="vertical-align: 0;"></i></button>
                        </div>
                        <div class="payment-gateways-container mt-4 text-center" data-group="gcash" style="display: none;">
                            <img src="{{ asset('img/2024/pet-fair/gcash_qrcode.jfif') }}">
                        </div>
                        <div class="payment-gateways-container mt-4 text-center" data-group="bdo" style="display: none;">
                            Manalo K9 Technologies International Corporation
                            <br>
                            0-10088011746
                        </div>
                        <div class="payment-gateways-container mt-4 text-center" data-group="bpi" style="display: none;">
                            Manalo K9 Technologies International Corporation
                            <br>
                            1911-0019-49
                        </div>
                    </div>
                </div>
            </div>
            <div id="booth_details" class="row header-row text-center mt-5">
                <h4 class="text-brutal-white text-outlined header-text">Exhibitor Representatives Information</h4>
            </div>
            <div class="row pt-5" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 col-lg-6 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-representatives-one_name" class="form-label">Name of Representative #1</label>
                        <input id="exhibitor-representatives-one_name" type="text" class="brutal-form-input"/>
                    </div>

                    <div class="d-none d-lg-block" style="position: absolute; top: 15px; right: -30px;">
                        <i class="bi bi-caret-right-fill" style="font-size: 64px; color: var(--brutal-black);"></i>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-representatives-one_contact" class="form-label">Contact Number</label>
                        <input id="exhibitor-representatives-one_contact" type="text" class="brutal-form-input"/>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-representatives-two_name" class="form-label">Name of Representative #2</label>
                        <input id="exhibitor-representatives-two_name" type="text" class="brutal-form-input"/>
                    </div>

                    <div class="d-none d-lg-block" style="position: absolute; top: 15px; right: -30px;">
                        <i class="bi bi-caret-right-fill" style="font-size: 64px; color: var(--brutal-black);"></i>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-representatives-two_contact" class="form-label">Contact Number</label>
                        <input id="exhibitor-representatives-two_contact" type="text" class="brutal-form-input"/>
                    </div>
                </div>
            </div>
            <div id="booth_details" class="row header-row text-center mt-5">
                <h4 class="text-brutal-white text-outlined header-text">Exhibitor's Oath</h4>
            </div>
            <div class="row pt-5" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 mb-4">
                    <div class="brutal-card-input text-center">
                        <span class="exhibitor-rules-text">
                            I have read and hereby agree to all the rules and requirements set forth by the Manalo Resort and Hotel.
                            <br>
                            I understand that the registration fee required shall be used for the tent booth and other inclusions
                            <br>
                            that my exhibit will be using in the entire duration of the event.
                            <br>
                            <br>
                            <b>Please upload a proof of your payment receipt to this Registration Form.</b>
                            <br>
                            By clicking the register button, you agree to this oath in full.
                        </span>
                        <br>
                        <input id="fileInput" type="file" style="display: none;">
                        <div class="mt-2">
                            <img class="payment-receipt-preview" style="display: none;">
                        </div>
                        <div>
                            <button type="button" class="payment-receipt-upload-btn btn brutal-btn bg-brutal-purple mt-3" style="width: 275px; height: 50px; font-size: 18px;"><i class="bi bi-cloud-arrow-up-fill" style="vertical-align: 0;"></i> Upload Payment Receipt</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 col-lg-12 mb-4">
                    <button type="button" class="submit-btn btn brutal-btn bg-brutal-grey" disabled style="width: 100%; height: 85px; font-size: 32px;">
                        <i class="bi bi-lock-fill" style="vertical-align: 0;"></i> Please upload a payment receipt first
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-5">
                    <small>
                        Copyright @2024
                    </small>
                </div>
            </div>
        </div>
    </div>
    @include('sections.scripts')
    <script src="{{ asset('js/moment.min.js?v=1') }}"></script>
    <script src="{{ asset('js/exhibitor.js?v=1') }}"></script>
</body>

</html>
