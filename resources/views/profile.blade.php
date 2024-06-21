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
                                    Account
                                    <span class="text-brutal-orange">

                                    </span>
                                </h2>
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
        <div id="firstContainer" class="container text-center" style="max-width: 100%;">
            <div class="row header-row-bottom text-center">
                <h4 class="text-brutal-white text-outlined header-text">User Details</h4>
            </div>
            <div class="row">

                <div class="col-12 py-5 d-flex flex-wrap flex-lg-row align-items-center">
                    <div class="col-12 col-lg-6 mt-2">
                        <div class="brutal-card" style="width: 62%; margin: 0 auto;">
                            <div class="brutal-card-icon"></div>
                            <div class="brutal-card-header">
                                Name
                            </div>
                            <div class="brutal-card-body">
                                <span>
                                    First name
                                </span>
                                <span>
                                    Last name
                                </span>
                            </div>
                        </div>
                        <div class="brutal-card mt-5" style="width: 62%; margin: 0 auto;">
                            <div class="brutal-card-icon"></div>
                            <div class="brutal-card-header">
                                Job title
                            </div>
                            <div class="brutal-card-body">
                                <span>
                                    Web developer
                                </span>
                            </div>
                        </div>
                        <div class="brutal-card mt-5" style="width: 62%; margin: 0 auto;">
                            <div class="brutal-card-icon"></div>
                            <div class="brutal-card-header">
                                Email address
                            </div>
                            <div class="brutal-card-body">
                                <span>
                                    Lorem@gmail.com
                                </span>
                            </div>
                        </div>
                        <div class="brutal-card mt-5" style="width: 62%; margin: 0 auto;">
                            <div class="brutal-card-icon"></div>
                            <div class="brutal-card-header">
                                Contact #
                            </div>
                            <div class="brutal-card-body">
                                <span>
                                     (+63) 09091579995
                                </span>
                            </div>
                        </div>

                        <div class="brutal-card mt-5" style="width: 62%; margin: 0 auto;">
                            <div class="brutal-card-icon"></div>
                            <div class="brutal-card-header">
                                Registered At
                            </div>
                            <div class="brutal-card-body">
                                <span>
                                    06-46-79
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-2">
                        <div class="bg-envelope">
                            {{-- <i class="bi bi-envelope-paper-heart-fill"></i> --}}
                            {{-- <img class="brutal-border" src="{{ asset('img/b02917ac-311f-491d-aa6e-d74b5abdc86f.jfif') }}" alt=""> --}}
                            {{ QrCode::size(600)->margin(2)->generate('HAHAHAHAH') }}
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
