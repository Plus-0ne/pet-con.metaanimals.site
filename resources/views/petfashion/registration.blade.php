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
                                <h2 class="display-2 fw-bold text-outlined text-brutal-purple">
                                    Pet Fashion Show
                                </h2>
                            </div>
                            <div class="mt-2" style="font-size: 24px;">
                                Saturday, June 29th, 2024
                                <br>
                                10:00 AM — 12:00 PM (2 hours)
                            </div>
                        </div>
                        <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                            <a class="btn brutal-btn bg-brutal-yellow btn-lg px-4 gap-3" href="{{ route('landing') }}" role="button" style="width: 225px; height: 52px;">
                                Go Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="firstContainer" class="container" style="max-width: 100%">
            <div id="info" class="row header-row-bottom text-center">
                <h4 class="text-brutal-white text-outlined header-text">Spotlight your pet...</h4>
            </div>
            <div class="row pt-5" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 col-lg-8 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="petfashion-fur_parent" class="form-label">Fur Parent's Name</label>
                        <input id="petfashion-fur_parent" type="text" class="brutal-form-input"/>
                    </div>

                    <div class="d-none d-lg-block" style="position: absolute; top: 15px; right: -30px;">
                        <i class="bi bi-caret-right-fill" style="font-size: 64px; color: var(--brutal-black);"></i>
                    </div>
                    <div class="d-none d-lg-block" style="position: absolute; top: 127px; left: 127px; transform: rotate(18deg);">
                        <i class="bi bi-arrow-return-right" style="font-size: 144px; color: var(--brutal-black);"></i>
                    </div>
                    <div class="d-none d-lg-block" style="position: absolute; top: 230px; left: 127px; transform: rotate(18deg);">
                        <i class="bi bi-hearts" style="font-size: 64px; color: var(--brutal-black);"></i>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="petfashion-contact_number" class="form-label">Contact Number</label>
                        <input id="petfashion-contact_number" type="text" class="brutal-form-input"/>
                    </div>
                </div>
                <div class="col-12 offset-lg-3 col-lg-6 offset-lg-3 mt-5 mb-4" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="petfashion-fur_baby" class="form-label">Fur Baby's Name</label>
                        <input id="petfashion-fur_baby" type="text" class="brutal-form-input"/>
                    </div>
                    <div class="d-none d-lg-block" style="position: absolute; top: 104px; left: 116px; transform: rotate(129deg);">
                        <i class="bi bi-heart-arrow" style="font-size: 96px; color: var(--brutal-black);"></i>
                    </div>
                    <div class="d-none d-lg-block" style="position: absolute; top: 104px; right: 116px; transform: rotate(49deg);">
                        <i class="bi bi-heart-arrow" style="font-size: 96px; color: var(--brutal-black);"></i>
                    </div>
                </div>
                <div class="col-12 offset-lg-2 col-lg-4 mt-5 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="petfashion-pet_breed" class="form-label">Breed</label>
                        <input id="petfashion-pet_breed" type="text" class="brutal-form-input"/>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-5 mb-4">
                    <div class="brutal-card-input mb-3">
                        <label for="petfashion-pet_age" class="form-label">Age</label>
                        <input id="petfashion-pet_age" type="text" class="brutal-form-input"/>
                    </div>
                </div>
            </div>
            <div id="petshow" class="row header-row text-center">
                <h4 class="text-brutal-white text-outlined header-text">... and win a competition!</h4>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive" style="z-index: 2;">
                        <table class="table brutal-table" style="width: 50%; margin: 0 auto;">
                            <thead class="text-center">
                                <tr>
                                    <th>Awards</th>
                                    <th>Prizes</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td class="text-outlined text-brutal-yellow text-center" rowspan="6" style="align-content: center; font-size: 18px;">
                                        <i class="bi bi-trophy-fill"></i> Grand Winner / Champion <i class="bi bi-trophy-fill"></i>
                                    </td>
                                    <td class="text-outlined text-brutal-yellow"><i class="bi bi-trophy-fill"></i> Trophy <i class="bi bi-trophy-fill"></i></td>
                                </tr>
                                <tr>
                                    <td>2 bags of 15KG SDN42</td>
                                </tr>
                                <tr>
                                    <td>4 x SDS</td>
                                </tr>
                                <tr>
                                    <td>2 x SDSH</td>
                                </tr>
                                <tr>
                                    <td>1 x Pow-Tech</td>
                                </tr>
                                <tr>
                                    <td>Certificate of Recognition</td>
                                </tr>
                                <tr style="border-top: 2px solid var(--brutal-black);">
                                    <td class="text-center" rowspan="5" style="align-content: center; font-size: 18px;"><b>1st Runner Up</b></td>
                                    <td><b>Small Trophy <i class="bi bi-stars"></i></b></td>
                                </tr>
                                <tr>
                                    <td>1 bag of 15KG SDN</td>
                                </tr>
                                <tr>
                                    <td>1 x SDS</td>
                                </tr>
                                <tr>
                                    <td>1 x SDSH</td>
                                </tr>
                                <tr>
                                    <td>Certificate of Recognition</td>
                                </tr>
                                <tr style="border-top: 2px solid var(--brutal-black);">
                                    <td class="text-center" rowspan="5" style="align-content: center; font-size: 16px;"><b>2nd Runner Up</b></td>
                                    <td><b>Small Trophy <i class="bi bi-stars"></i></b></td>
                                </tr>
                                <tr>
                                    <td>1 bag of 5 KG SDN</td>
                                </tr>
                                <tr>
                                    <td>1 x SDSH</td>
                                </tr>
                                <tr>
                                    <td>2 x SDS</td>
                                </tr>
                                <tr>
                                    <td>Certificate of Recognition</td>
                                </tr>
                                <tr style="border-top: 2px solid var(--brutal-black);">
                                    <td class="text-center" rowspan="5" style="align-content: center; font-size: 16px;"><b>3rd Runner Up</b></td>
                                    <td><b>Ribbon <i class="bi bi-award-fill"></i></b></td>
                                </tr>
                                <tr>
                                    <td>1 KG SDN</td>
                                </tr>
                                <tr>
                                    <td>2 x SDSH</td>
                                </tr>
                                <tr>
                                    <td>1 x SDS</td>
                                </tr>
                                <tr>
                                    <td>Certificate of Recognition</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="rules" class="row header-row text-center">
                <h4 class="text-brutal-white text-outlined header-text">Terms and Conditions</h4>
            </div>
            <div class="row pt-5" style="max-width: 50%; margin: 0 auto;">
                <div class="col-12 mb-4">
                    <div class="brutal-card-input">
                        <label class="form-label">1.</label>
                        <span class="exhibitor-rules-text">
                            Registration is subject to confirmation of Manalo Resort Hotel.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">2.</label>
                        <span class="exhibitor-rules-text">
                            The Registration Fee must be settled on/or before the deadline which is indicated in this Registration Form. Only PAID participants can have seats secured.
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-4 mt-4">
                    <div class="brutal-card-input">
                        <label class="form-label">3.</label>
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
                <h4 class="text-brutal-white text-outlined header-text">Payment Gateway</h4>
            </div>
            <div class="row pt-5" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 col-lg-12" style="position: relative;">
                    <div class="brutal-card-input mb-3">
                        <label for="exhibitor-payment-gateways" class="form-label">Payment Options (Select to view details)</label>
                        <div>
                            <button type="button" class="payment-gateways-btn btn brutal-btn bg-brutal-blue mt-2" data-group="gcash" style="width: 375px; height: 50px; font-size: 18px;">E-Wallet: GCash <i class="bi bi-qr-code" style="vertical-align: 0;"></i></button>
                            <button type="button" class="payment-gateways-btn btn brutal-btn bg-brutal-blue mt-2" data-group="bdo" style="width: 375px; height: 50px; font-size: 18px;">Bank Transfer: BDO <i class="bi bi-bank" style="vertical-align: 0;"></i></button>
                            <button type="button" class="payment-gateways-btn btn brutal-btn bg-brutal-red mt-2" data-group="bpi" style="width: 375px; height: 50px; font-size: 18px;">Bank Transfer: BPI <i class="bi bi-bank" style="vertical-align: 0;"></i></button>
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
            <div class="row pt-2" style="max-width: 75%; margin: 0 auto;">
                <div class="col-12 mb-4">
                    <div class="brutal-card-input text-center">
                        <span class="exhibitor-rules-text">
                            <b>Please upload a proof of your payment receipt to this Registration Form.</b>
                            <br>
                            By clicking the register button, you agree to the terms and conditions in full.
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
            <div class="row" style="max-width: 75%; margin: 0 auto;">
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
    <script src="{{ asset('js/moment.min.js?v=2') }}"></script>
    <script src="{{ asset('js/exhibitor.js?v=2') }}"></script>
</body>

</html>
