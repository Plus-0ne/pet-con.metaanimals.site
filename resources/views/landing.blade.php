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
                                <h2 class="display-2 fw-bold text-light">
                                    Manalo Resort Hotel
                                    <span class="text-primary">
                                        Pet Fair
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="lc-block col-lg-6 mx-auto mb-5">
                            <div editable="rich">
                                <p class="lead text-light">
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
                            <a class="btn btn-primary btn-lg px-4 gap-3" href="#" role="button">
                                Pre-register
                            </a>
                            <a class="btn btn-success btn-lg px-4 gap-3" href="#" role="button">
                                Be an exhibitor
                            </a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#firstContainer" role="button">
                                Learn more
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
        <div id="firstContainer" class="container">
            <div class="row">

                <div class="col-12 py-5 d-flex flex-wrap flex-lg-row align-items-center">
                    <div class="col-12 col-lg-6">
                        <h4>
                            MANALO RESORT AND HOTEL PET FAIR 2024
                        </h4>

                        <p>
                            Date: JUNE 28-30, 2024
                        </p>
                        <p>
                            Time: 10:00 AM - 10:00 PM
                        </p>
                        <p>
                            Venue: Sitio Tutulo, Brgy. Mahabang Parang, Binangonan, Rizal
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{ asset('img/b02917ac-311f-491d-aa6e-d74b5abdc86f.jfif') }}" alt="">
                    </div>
                </div>

                <div class="col-12 py-5">
                    <div class="lead">
                        It was initially approved that visitor registration for our Manalo Resort Hotel 2024 event will
                        be free for all IAGD members, and only P100 for walk-ins, consumable at our café and samgupsal.
                        In order to enjoy free entrance, individuals must first register as IAGD members.
                    </div>
                </div>



                <div class="col-12 py-5">
                    <div class="lead">
                        We also propose to allow walk-ins during the event to ensure that we can accommodate everyone
                        who wishes to attend. A registration team will be on standby to assist walk-ins.
                    </div>
                </div>



                <div class="col-12 py-5">
                    <div class="lead">
                        Be one of our sponsors now! For exhibitor packages and those interested in having a booth with
                        us, register now using the link below.
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
