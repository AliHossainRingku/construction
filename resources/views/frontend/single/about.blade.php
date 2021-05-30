@extends('frontend.home_layout')

@section('content')
        <!-- =======================* Section Start *======================= -->
        <section class="pagehead bg-1">
            <div class="container">
                <nav aria-label="breadcrumb" class="pagehead-breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- =======================* Section End *======================= -->
        <!-- =======================* Section Start *===================== -->
        <section class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="pl-lg-4">
                            <h2 class="section-title text-left">About Us</h2>
                            <p class="lead">Archtera offers the widest and best in class range in furniture, home
                                furnishings & decor, modular kitchens, home improvement and more.</p>
                            <div class="tab-area mt-4 tabs-with-line">
                                <nav>
                                    <div class="nav nav-tabs justify-content-between" id="nav-tab" role="tablist">
                                        <?php 
                                        $abouts_first = DB::table('abouts')
                                                   ->select('abouts.*')
                                                   ->where('abouts.publication_status','=','1')
                                                   ->limit(1)
                                                   ->get();
                                        $abouts_rest = DB::table('abouts')
                                                   ->select('abouts.*')
                                                   ->where('abouts.publication_status','=','1')
                                                   ->where('abouts.id','!=','1')
                                                   ->get();
                                        ?>
                                        @foreach($abouts_first as $about)
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                            href="#nav-{{$about->id}}" role="tab" aria-controls="nav-home"
                                            aria-selected="true">
                                            {{$about->about_title}}
                                        </a>
                                        @endforeach

                                        @foreach($abouts_rest as $about_r)
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                            href="#nav-{{$about_r->id}}" role="tab" aria-controls="nav-profile"
                                            aria-selected="false">
                                            {{$about_r->about_title}}
                                        </a>
                                        @endforeach
                                    </div>
                                </nav>

                                <div class="tab-content" id="nav-tabContent">
                                    @foreach($abouts_first as $about)
                                    <div class="tab-pane fade show active" id="nav-{{$about->id}}" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                            
                                            <p class="objective-list">
                                            <?php 
                                                $description=$about->about_description;
                                                $description = preg_replace ("/\r\n|\r|\n/",'<li>',$description);
                                                echo '<li>',$description; 
                                            ?>
                                            </p>
                                        <a href="contactus.html" class="btn btn-primary mt-4 mr-lg-4">GET IN TOUCH</a>
                                    </div>
                                    @endforeach

                                    @foreach($abouts_rest as $about_r)
                                    <div class="tab-pane fade" id="nav-{{$about_r->id}}" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <p class="objective-list">
                                            <?php 
                                                $description=$about_r->about_description;
                                                $description = preg_replace ("/\r\n|\r|\n/",'<li>',$description);
                                                echo '<li>',$description; 
                                            ?>
                                        </p>
                                    </div>
                                    @endforeach

                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <p>To deliver high-quality, cost-effective projects on schedule by employing and
                                            supporting motivated, flexible, and focused teams. We value the importance
                                            of our relationships and will continue to remain fair and true in our
                                            dealings with all employees, clients, vendors, and partners.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 mb-5 mb-lg-0">
                        <img src="./assets/img/about.jpg" alt="" class="img-fluid m-auto d-block">
                    </div> -->
                </div>
            </div>
        </section> <!-- about End -->
        <!-- =======================* Section End *======================= -->
        <!-- =======================* Section Start *===================== -->
        <?php 
            $proj = DB::table('projects')
                        ->where('projects.publication_status','=','1')
                        ->get();
            $rev = DB::table('reviews')
                        ->where('reviews.publication_status','=','1')
                        ->get();
        ?>
        <section class="bg-light section-padding counter-bg">
            <div class="container">
                <div class="d-flex counter-flex flex-column flex-lg-row">
                    <div class="d-flex-item pb-4 pb-lg-0">
                        <div class="counter-box wow fadeInUp" data-wow-delay="200ms">
                            <span class="counter-icon"><img src="./frontend/assets/img/medal.svg" alt="Years of Service"></span>
                            <span class="counter">16</span>
                            <h3 class="text-light">Years of Service</h3>
                        </div> <!-- counter-box End -->
                    </div>
                    <div class="d-flex-item pt-4 pb-4 pt-lg-0 pb-lg-0">
                        <div class="counter-box wow fadeInUp" data-wow-delay="400ms">
                            <span class="counter-icon"><img src="./frontend/assets/img/flag.svg" alt="Completed Projects"></span>
                            <span class="counter">{{ count($proj)}}</span>
                            <h3 class="text-light">Completed Projects</h3>
                        </div> <!-- counter-box End -->
                    </div>
                    <div class="d-flex-item pt-4 pt-lg-0">
                        <div class="counter-box wow fadeInUp" data-wow-delay="600ms">
                            <span class="counter-icon"><img src="./frontend/assets/img/hands.svg" alt="Satisfied clients"></span>
                            <span class="counter">{{ count($rev)}}</span>
                            <h3 class="text-light">Satisfied Clients</h3>
                        </div> <!-- counter-box End -->
                    </div>
                </div>
            </div>
        </section> <!-- counter End -->
        <!-- =======================* Section End *======================= -->
        <!-- =======================* Section Start *===================== -->
        <section class="bg-light section-padding">
            <div class="container">
                <h2 class="section-title text-left">Our Team</h2>
                <div class="row">
                    <?php 
                        $members = DB::table('members')
                                    ->select('members.*')
                                    ->where('members.publication_status','=','1')
                                    ->get();
                    ?>
                    @foreach($members as $member)
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 wow fadeInUp" data-wow-delay="200ms">
                        <div class="card team-card">
                            <img src="{{$member->member_image}}" class="card-img-top" alt="Nathan Brown">
                            <div class="card-body text-center">
                                <div class="title-block">
                                    <h5 class="card-title">{{$member->member_name}}</h5>
                                    <p class="card-text">{{$member->member_designation}}</p>
                                </div>

                                <div class="social-icons">
                                    <a href="#" class="social-items"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a>
                                    <a href="#" class="social-items"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a>
                                    <a href="#" class="social-items"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>
                                    <a href="#" class="social-items"><i class="fa fa-linkedin"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- team member loop End -->
                    @endforeach

                </div> <!-- row End-->
            </div> <!-- container End-->
        </section> <!-- team End -->
        <!-- =======================* Section End *======================= -->
        <!-- =======================* Section Start *===================== -->
        <section class="testimonials section-padding">
            <div class="container">
                <h3 class="heading-2  section-title text-left">What Our Clients Say</h3>
                <div class="clearfix"></div>
                <div id="testimonialSlider" class="owl-carousel owl-theme">
                    <?php 
                        $reviews = DB::table('reviews')
                                    ->select('reviews.*')
                                    ->where('reviews.publication_status','=','1')
                                    ->get();
                    ?>
                    @foreach($reviews as $review)
                    <div class="testimonials-item">
                        <figure><img src="{{$review->user_image}}" alt="{{$review->user_name}}" class="img-fluid"></figure>
                        <div class="what-they-said">
                            {{$review->review_description}}
                        </div>
                        <h4 class="auther-title">{{$review->user_name}}</h4>
                        <p class="auther-designation">{{$review->user_designation}}</p>
                    </div> <!-- testimonials Item Loop End -->
                    @endforeach
                    
                </div>
            </div><!-- wrapper End -->
        </section><!-- testimonials End-->
        <!-- =======================* Section End *======================= -->
@endsection

<style type="text/css">
    .objective-list li{
        padding-left: 50px !important; 
        list-style: none;
    }
</style>
