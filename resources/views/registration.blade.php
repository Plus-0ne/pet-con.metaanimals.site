<!DOCTYPE html>
<html lang="en">

<head>
    @include('sections.meta')
    <title>
        {{ $title }}
    </title>
    @include('sections.styles')
    <link rel="stylesheet" href="{{ asset('css/style.v1.css') }}">
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
                                    Registration
                                </h2>
                            </div>
                        </div>
                        <div class="lc-block col-lg-6 mx-auto mb-5">
                            <div editable="rich">
                                <p class="lead text-light">
                                    This upcoming <strong>June 28-30, 2024</strong>, we are having a pet fair at
                                    <strong>Manalo Resort Hotel, located at
                                        Sitio Tutulo, Mahabang Parang, Binangonan, Rizal</strong>. We, <strong>Meta
                                        Animals Technologies Corporation</strong>, an
                                    all-animal tech umbrella company that manages Manalo K9 Technologies International
                                    Corporation
                                    <strong>( Manalo K9 )</strong> and the International Animal Genetics Database
                                    <strong>( IAGD )</strong>, along with Manalo Resort
                                    Hotel, extend this invitation to Mahabang Parang to become one of our sponsors for
                                    our
                                    first-ever on-site Pet Fair.
                                </p>
                            </div>
                        </div>

                        <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                            <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('landing') }}" role="button">
                                Home
                            </a>
                            <a class="btn btn-success btn-lg px-4 gap-3" href="#" role="button">
                                Be an exhibitor
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
            <div class="row py-5">
                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="" class="form-label">First name</label>
                        <input type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your given name</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Last name</label>
                        <input type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your family name</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Middle name</label>
                        <input type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your middle name</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Job Title</label>
                        <input type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your job title</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Email address</label>
                        <input type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your email address</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Contact Number</label>
                        <input type="text" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your Mobile/Telephone number</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please enter your password</small>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Verify Password</label>
                        <input type="password" class="form-control"/>
                        <small id="helpId" class="form-text text-muted">Please verify your password</small>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-12">
                    <button id="submitRegistrationForm" type="button" class="btn btn-primary btn-lg">
                        Register
                    </button>
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
