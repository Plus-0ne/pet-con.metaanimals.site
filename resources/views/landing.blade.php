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
    <link rel="stylesheet" href="{{ asset('css/style.v1.css') }}"></link>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid bg-container-pet">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="container-fluid px-4 py-5 my-5 text-center">
                        <div class="lc-block mb-4">
                            <div editable="rich">
                                <h2 class="display-2 fw-bold text-light">Showcase <span class="text-primary">your pet!</span></h2>
                            </div>
                        </div>
                        <div class="lc-block col-lg-6 mx-auto mb-5">
                            <div editable="rich">
                                <p class="lead text-light">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat facilis ex cum provident ipsa dolore sapiente nemo enim, hic magni officiis excepturi inventore eos unde odio, pariatur saepe tenetur blanditiis.
                                </p>
                            </div>
                        </div>

                        <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                            <a
                                class="btn btn-primary btn-lg px-4 gap-3" href="#" role="button">
                                Pre-register
                            </a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#" role="button">
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
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste praesentium mollitia voluptatem est consequatur veritatis qui quis aut placeat, saepe obcaecati minima necessitatibus similique dolores eius, nostrum architecto, nemo amet!
                    </div>
                </div>

                <div class="col-12">
                    <div class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste praesentium mollitia voluptatem est consequatur veritatis qui quis aut placeat, saepe obcaecati minima necessitatibus similique dolores eius, nostrum architecto, nemo amet!
                    </div>
                </div>

                <div class="col-12">
                    <div class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste praesentium mollitia voluptatem est consequatur veritatis qui quis aut placeat, saepe obcaecati minima necessitatibus similique dolores eius, nostrum architecto, nemo amet!
                    </div>
                </div>



                <div class="col-12">
                    <div class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste praesentium mollitia voluptatem est consequatur veritatis qui quis aut placeat, saepe obcaecati minima necessitatibus similique dolores eius, nostrum architecto, nemo amet!
                    </div>
                </div>



                <div class="col-12">
                    <div class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste praesentium mollitia voluptatem est consequatur veritatis qui quis aut placeat, saepe obcaecati minima necessitatibus similique dolores eius, nostrum architecto, nemo amet!
                    </div>
                </div>



                <div class="col-12">
                    <div class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste praesentium mollitia voluptatem est consequatur veritatis qui quis aut placeat, saepe obcaecati minima necessitatibus similique dolores eius, nostrum architecto, nemo amet!
                    </div>
                </div>




                <div class="col-12">
                    <div class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste praesentium mollitia voluptatem est consequatur veritatis qui quis aut placeat, saepe obcaecati minima necessitatibus similique dolores eius, nostrum architecto, nemo amet!
                    </div>
                </div>



                <div class="col-12">
                    <div class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste praesentium mollitia voluptatem est consequatur veritatis qui quis aut placeat, saepe obcaecati minima necessitatibus similique dolores eius, nostrum architecto, nemo amet!
                    </div>
                </div>


                <div class="col-12">
                    <div class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste praesentium mollitia voluptatem est consequatur veritatis qui quis aut placeat, saepe obcaecati minima necessitatibus similique dolores eius, nostrum architecto, nemo amet!
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sunt a, porro commodi aliquid beatae dolorem. Accusamus dolores temporibus alias unde quae voluptas optio minus cupiditate illo fugiat, voluptatem soluta?
                </div>
                <div class="col-12 col-lg-6">

                    <ul class="list-group list-group-numbered">
                        <li class="list-group-item active">Active item</li>
                        <li class="list-group-item">Item</li>
                        <li class="list-group-item disabled">Disabled item</li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
    @include('sections.scripts')
</body>

</html>
