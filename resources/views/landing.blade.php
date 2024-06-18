<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ $title }}
    </title>
    @include('sections.styles')
    <link rel="stylesheet" href="{{ asset('css/style.v1.css') }}">
    </link>
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
                            <a class="btn brutal-btn bg-brutal-orange btn-lg px-4 gap-3" href="#" role="button" style="width: 225px; height: 52px;">
                                Pre-Register
                            </a>
                            <a class="btn brutal-btn bg-brutal-yellow btn-lg px-4 gap-3" href="#" role="button" style="width: 225px; height: 52px;">
                                Be an Exhibitor
                            </a>
                            <a class="btn brutal-btn bg-brutal-yellow btn-lg px-4" href="#firstContainer" role="button" style="width: 225px; height: 52px;">
                                Learn more
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
                    <div class="col-12 col-lg-6">
                        <div class="brutal-card brutal-card-small">
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
                        <div class="brutal-card brutal-card-small mt-5">
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
                        <div class="brutal-card brutal-card-small mt-5">
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
                    <div class="col-12 col-lg-6">
                        <img class="brutal-border" src="{{ asset('img/b02917ac-311f-491d-aa6e-d74b5abdc86f.jfif') }}" alt="">
                    </div>
                </div>
                <div class="col-12 brutal-card mb-3">
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
                    <a class="btn brutal-btn bg-brutal-yellow btn-lg px-4 gap-3" href="#" role="button" style="width: 225px; height: 52px;">
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
            <div class="row header-row text-center">
                <h4 class="text-brutal-white text-outlined header-text">F.A.Q.</h4>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    ~ Reserved ~
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
