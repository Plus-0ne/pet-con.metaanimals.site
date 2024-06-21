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
    <div class="wrapper">
        <div class="container-fluid bg-container-pet">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="container-fluid px-4 py-5 my-5 text-center">
                        <div class="lc-block mb-4">
                            <div editable="rich">
                                <h2 class="display-2 fw-bold text-outlined text-brutal-yellow">
                                    Manalo Resort Hotel
                                    <span class="text-brutal-orange">
                                        Pet Fair
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="brutal-card lc-block col-lg-6 mx-auto mb-5">
                            <div editable="rich">
                                <p class="lead text-brutal-black">
                                    This upcoming <strong>June 28-30, 2024</strong>, we are having a pet fair at <strong>Manalo Resort Hotel, located at
                                        Sitio Tutulo, Mahabang Parang, Binangonan, Rizal</strong>. We, <strong>Meta Animals Technologies Corporation</strong>, an
                                    all-animal tech umbrella company that manages Manalo K9 Technologies International Corporation
                                    <strong>( Manalo K9 )</strong> and the International Animal Genetics Database <strong>( IAGD )</strong>, along with Manalo Resort
                                    Hotel, extend this invitation to Mahabang Parang to become one of our sponsors for our
                                    first-ever on-site Pet Fair.
                                </p>
                            </div>
                        </div>

                        <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                            <a class="btn brutal-btn bg-brutal-orange btn-lg px-4 gap-3" href="{{ route('register.form') }}" role="button" style="width: 225px; height: 52px;">
                                Pre-Register
                            </a>
                            <a class="btn brutal-btn bg-brutal-yellow btn-lg px-4 gap-3" href="{{ route('exhibitor.form') }}" role="button" style="width: 225px; height: 52px;">
                                Be an Exhibitor
                            </a>
                            <a class="btn brutal-btn bg-brutal-yellow btn-lg px-4" href="#petshow" role="button" style="width: 225px; height: 52px;">
                                Pet Fashion Show
                            </a>
                        </div>
                        {{-- <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <img class="img-fluid"
                                src="https://lclibrary.b-cdn.net/starters/wp-content/uploads/sites/15/2021/10/undraw_going_up_ttm5.svg"
                                width="" height="783" srcset="" sizes="" alt="">
                        </div> --}}`
                    </div>
                </div>
            </div>
        </div>
        <div id="firstContainer" class="container text-center" style="max-width: 100%;">
            <div class="row header-row-bottom text-center">
                <h4 class="text-brutal-white text-outlined header-text">Event Details</h4>
            </div>
            <div class="row">

                <div class="col-12 py-5 d-flex flex-wrap flex-lg-row align-items-center">
                    <div class="col-12 col-lg-6 mt-2">
                        <div class="brutal-card" style="width: 62%; margin: 0 auto;">
                            <div class="brutal-card-icon"></div>
                            <div class="brutal-card-header">
                                When?
                            </div>
                            <div class="brutal-card-body">
                                <span>
                                    June 28 — 30th, 2024
                                    <br>
                                    10:00 AM — 10:00 PM
                                </span>
                            </div>
                        </div>
                        <div class="brutal-card mt-5" style="width: 62%; margin: 0 auto;">
                            <div class="brutal-card-icon"></div>
                            <div class="brutal-card-header">
                                Where?
                            </div>
                            <div class="brutal-card-body">
                                <span>
                                    Sitio Tutulo, Brgy. Mahabang Parang,
                                    <br>
                                    Binangonan, Rizal
                                </span>
                            </div>
                        </div>
                        <div class="brutal-card mt-5" style="width: 62%; margin: 0 auto;">
                            <div class="brutal-card-icon"></div>
                            <div class="brutal-card-header">
                                Who?
                            </div>
                            <div class="brutal-card-body">
                                <span>
                                    Everyone is invited to attend!
                                    <br>
                                    Free for IAGD members,
                                    <br>
                                    P100 for walk-ins
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-2">
                        <div class="bg-envelope">
                            <i class="bi bi-envelope-paper-heart-fill"></i>
                            <img class="brutal-border" src="{{ asset('img/b02917ac-311f-491d-aa6e-d74b5abdc86f.jfif') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 brutal-card mb-3" style="width: 80%; margin: 0 auto;">
                    It was initially approved that visitor registration for our Manalo Resort Hotel 2024 event will
                    be free for all IAGD members, and only P100 for walk-ins, consumable at our café and samgupsal.
                    In order to enjoy free entrance, individuals must first register as IAGD members.
                    <br>
                    We also propose to allow walk-ins during the event to ensure that we can accommodate everyone
                    who wishes to attend. A registration team will be on standby to assist walk-ins.
                    <br>
                    Be one of our sponsors now! For exhibitor packages and those interested in having a booth with
                    us, register now using the link below.
                </div>
                <div class="col-12 mb-3">
                    <a class="btn brutal-btn bg-brutal-yellow btn-lg px-4 gap-3" href="{{ route('exhibitor.form') }}" role="button" style="width: 225px; height: 52px;">
                        Be an Exhibitor
                    </a>
                </div>
            </div>
            <div class="row header-row text-center">
                <h4 class="text-brutal-white text-outlined header-text">Gallery</h4>
            </div>
            <div class="row">
                <div class="image-group my-2">
                    <div class="image-container brutal-border">
                        <img src="{{ asset('img/2024/pet-fair/01.jfif') }}">
                    </div>
                    <div class="image-container brutal-border">
                        <img src="{{ asset('img/2024/pet-fair/02.jfif') }}">
                    </div>
                    <div class="image-container brutal-border">
                        <img src="{{ asset('img/2024/pet-fair/03.jfif') }}">
                    </div>
                    <div class="image-container brutal-border">
                        <img src="{{ asset('img/2024/pet-fair/04.jfif') }}">
                    </div>
                    <div class="image-container brutal-border">
                        <img src="{{ asset('img/2024/pet-fair/05.jfif') }}">
                    </div>
                    <div class="image-container brutal-border">
                        <img src="{{ asset('img/2024/pet-fair/06.jfif') }}">
                    </div>
                </div>
            </div>
            <div id="petshow" class="row header-row text-center">
                <h4 class="text-brutal-white text-outlined header-text">Pet Fashion Show</h4>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div style="position: relative;">
                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; left: 50px; transform: rotate(-17deg); color: var(--brutal-orange-background); z-index: 1;"></i>
                        <!-- <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 64px; left: 238px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i> -->
                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 192px; left: 50px; transform: rotate(-17deg); color: var(--brutal-orange-background); z-index: 1;"></i>
                        <!-- <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 256px; left: 238px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i> -->
                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 384px; left: 50px; transform: rotate(-17deg); color: var(--brutal-orange-background); z-index: 1;"></i>
                        <!-- <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 448px; left: 238px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i> -->
                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 576px; left: 50px; transform: rotate(-17deg); color: var(--brutal-orange-background); z-index: 1;"></i>
                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 768px; left: 50px; transform: rotate(-17deg); color: var(--brutal-orange-background); z-index: 1;"></i>

                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; right: 50px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i>
                        <!-- <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 64px; right: 238px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i> -->
                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 192px; right: 50px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i>
                        <!-- <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 256px; right: 238px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i> -->
                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 384px; right: 50px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i>
                        <!-- <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 448px; right: 238px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i> -->
                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 576px; right: 50px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i>
                        <i class="d-sm-none d-lg-block bi bi-trophy-fill" style="position: absolute; font-size: 144px; top: 768px; right: 50px; transform: rotate(23deg); color: var(--brutal-orange-background); z-index: 1;"></i>
                    </div>
                    <div class="table-responsive" style="z-index: 2;">
                        <table class="table brutal-table" style="width: 50%; margin: 0 auto;">
                            <thead class="text-center">
                                <tr>
                                    <th>Awards</th>
                                    <th>Prizes</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                <tr style="border-top: 2px solid var(--brutal-black);">
                                    <td colspan=2>
                                        <a class="btn brutal-btn bg-brutal-purple btn-lg px-4 gap-3" href="#" role="button" style="width: 500px; height: 52px;">
                                            Spotlight your pet!
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row header-row text-center">
                <h4 class="text-brutal-white text-outlined header-text">F.A.Q.</h4>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center mt-2">
                    <button type="button" class="faq-question btn brutal-btn bg-brutal-yellow" data-sequence="0" data-bs-toggle="collapse" data-bs-target=".faq-answer[data-sequence='0']" aria-expanded="false">When and where is the pet fair being held?</button>
                    <div class="faq-answer collapse hide" data-sequence="0">
                        The Pet Fair will held on June 28-30, 2024 at Sitio Tutulo Mahabang Parang Binangonan Rizal
                    </div>
                </div>
                <div class="col-sm-12 text-center mt-2">
                    <button type="button" class="faq-question btn brutal-btn bg-brutal-yellow" data-sequence="1" data-bs-toggle="collapse" data-bs-target=".faq-answer[data-sequence='1']" aria-expanded="false">What can I expect to see/do at the pet fair?</button>
                    <div class="faq-answer collapse hide" data-sequence="1">
                        Pet shows, demonstrations, vendor booths selling pet products, adoption opportunities, educational sessions, Free vaccination etc.
                    </div>
                </div>
                <div class="col-sm-12 text-center mt-2">
                    <button type="button" class="faq-question btn brutal-btn bg-brutal-yellow" data-sequence="2" data-bs-toggle="collapse" data-bs-target=".faq-answer[data-sequence='2']" aria-expanded="false">Can I bring my pet to the pet fair?</button>
                    <div class="faq-answer collapse hide" data-sequence="2">
                        Pets are allowed with specific rules (leash requirements, vaccination proof).
                    </div>
                </div>
                <div class="col-sm-12 text-center mt-2">
                    <button type="button" class="faq-question btn brutal-btn bg-brutal-yellow" data-sequence="3" data-bs-toggle="collapse" data-bs-target=".faq-answer[data-sequence='3']" aria-expanded="false">How much does it cost to attend the pet fair?</button>
                    <div class="faq-answer collapse hide" data-sequence="3">
                        It was initially approved that visitor registration for our Manalo Resort Hotel 2024 event will be free for all IAGD members, and only P100 for walk-ins, consumable at our café and samgupsal. In order to enjoy free entrance, individuals must first register as IAGD members.
                    </div>
                </div>
                <div class="col-sm-12 text-center mt-2">
                    <button type="button" class="faq-question btn brutal-btn bg-brutal-yellow" data-sequence="4" data-bs-toggle="collapse" data-bs-target=".faq-answer[data-sequence='4']" aria-expanded="false">Are there opportunities to adopt pets at the fair?</button>
                    <div class="faq-answer collapse hide" data-sequence="4">
                        There are SDF and other pets available for adoption.
                    </div>
                </div>
                <div class="col-sm-12 text-center mt-2">
                    <button type="button" class="faq-question btn brutal-btn bg-brutal-yellow" data-sequence="5" data-bs-toggle="collapse" data-bs-target=".faq-answer[data-sequence='5']" aria-expanded="false">Will there be food and drinks available at the pet fair?</button>
                    <div class="faq-answer collapse hide" data-sequence="5">
                        There will be food vendors, but you are also welcome to bring your own refreshments.
                    </div>
                </div>
                <div class="col-sm-12 text-center mt-2">
                    <button type="button" class="faq-question btn brutal-btn bg-brutal-yellow" data-sequence="6" data-bs-toggle="collapse" data-bs-target=".faq-answer[data-sequence='6']" aria-expanded="false">How can I participate as a vendor/exhibitor?</button>
                    <div class="faq-answer collapse hide" data-sequence="6">
                        <a class="btn brutal-btn-sm bg-brutal-orange" href="{{ route('exhibitor.form') }}" target="_blank">Click here to apply!</a>
                        <br>
                        - or -
                        <br>
                        Email: michaela.metaanimals@gmail.com
                        <br>
                        Facebook: <a class="btn brutal-btn-sm bg-brutal-orange" href="https://www.facebook.com/mvg.metaanimals/" target="_blank">https://www.facebook.com/mvg.metaanimals/</a>
                        <br>
                        Contact Number: 0995 642 1728
                    </div>
                </div>
                <div class="col-sm-12 text-center mt-2 mb-2">
                    <button type="button" class="faq-question btn brutal-btn bg-brutal-yellow" data-sequence="7" data-bs-toggle="collapse" data-bs-target=".faq-answer[data-sequence='7']" aria-expanded="false">Is parking available?</button>
                    <div class="faq-answer collapse hide" data-sequence="7">
                        Yes.
                    </div>
                </div>
            </div>
            <div class="row header-row text-center">
                <h4 class="text-brutal-white text-outlined header-text">Contact Us</h4>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-sm-12">
                    <div class="brutal-card brutal-card" style="width: 550px; display: inline-block;">
                        <div class="brutal-card-icon"></div>
                        <div class="brutal-card-header">
                            Address
                        </div>
                        <div class="brutal-card-body">
                            <span>
                                Sitio Tutulo, Brgy. Mahabang Parang,
                                <br>
                                Binangonan, Rizal
                            </span>
                        </div>
                    </div>
                    <div class="brutal-card brutal-card" style="width: 550px; display: inline-block;">
                        <div class="brutal-card-icon"></div>
                        <div class="brutal-card-header">
                            Call Us
                        </div>
                        <div class="brutal-card-body">
                            <span>
                                0995 642 1728
                                <br>
                                Globe
                            </span>
                        </div>
                    </div>
                    <div class="brutal-card brutal-card" style="width: 550px; display: inline-block;">
                        <div class="brutal-card-icon"></div>
                        <div class="brutal-card-header">
                            Email
                        </div>
                        <div class="brutal-card-body">
                            <span>
                                manaloresorthotel@gmail.com
                                <br>
                                michaela.metaanimals@gmail.com
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                {{-- <div class="col-12 col-lg-6 py-5">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sunt a, porro commodi aliquid beatae
                    dolorem. Accusamus dolores temporibus alias unde quae voluptas optio minus cupiditate illo fugiat,
                    voluptatem soluta?
                </div>
                <div class="col-12 col-lg-6 py-5">

                    <ul class="list-group list-group-numbered">
                        <li class="list-group-item active">Active item</li>
                        <li class="list-group-item">Item</li>
                        <li class="list-group-item disabled">Disabled item</li>
                    </ul>


                </div> --}}
                <div class="col-12 text-center py-5">
                    <small>
                        Copyright @2024
                    </small>
                </div>
            </div>
        </div>
    </div>
    @include('sections.scripts')
</body>

</html>
