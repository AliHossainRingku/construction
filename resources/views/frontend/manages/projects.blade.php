@extends('frontend.home_layout')

@section('content')
    <!-- =======================* Section Start *======================= -->
    <section class="pagehead bg-1">
        <div class="container">
            <nav aria-label="breadcrumb" class="pagehead-breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =======================* Section End *======================= -->

            <!-- =======================* Section Start *===================== -->
        <section class="works section-padding text-center bg-light">
            <div class="container">
                <h2 class="section-title text-left wow fadeInUp" data-wow-delay="200ms">OUR PROJECTS</h2>
                <div class="works-filter mt-5 mb-5 wow fadeInDown" data-wow-delay="200ms">
                    

                    <?php $categories = DB::table('categories')
                        ->where('publication_status',1)
                        ->get();
                    ?>

                    <button type="button" class="filter-btn filter-active mb-2 mb-lg-0" data-filter="*">All</button>

                    @foreach($categories as $category)
                    <button type="button" class="filter-btn mb-2 mb-lg-0"
                        data-filter=".{{$category->category_name}}"> {{$category->category_name}} </button>
                    @endforeach


                </div> <!-- filter-button-group End-->
            </div>
            <div class="container-fluid">
                <div class="row our-works">
                    @foreach($projects as $project)
                    <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 works-items {{$project->category_name}} wow fadeInLeft"
                        data-wow-delay="200ms">
                        <a href="{{url('/projects/'.$project->id)}}">
                        <div class="works-image" style="background-image: url({{ asset(''.$project->project_image1)}});">
                            <div class="overlay">
                                <h4 class="work-item-title">{{ $project->project_title }} </h4>
                                <p> {{$project->category_name}} </p>
                            </div>
                        </div> <!-- works-image End -->
                        </a>
                    </div> <!-- col-lg-4 End Loop-->
                    @endforeach
                </div> <!-- row our-works End-->
            </div>
        </section>
        <!-- =======================* Section End *======================= -->


 
    <!-- =======================* Section Start *===================== -->
    <section class="clients section-padding">
        <div class="container">
            <div id="clients" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./frontend/assets/img/clients-temp.png" alt="Clients"
                        class="img-fluid border saturate-animate">
                </div>
                <div class="item">
                    <img src="./frontend/assets/img/clients-temp.png" alt="Clients"
                        class="img-fluid border saturate-animate">
                </div>
                <div class="item">
                    <img src="./frontend/assets/img/clients-temp.png" alt="Clients"
                        class="img-fluid border saturate-animate">
                </div>
                <div class="item">
                    <img src="./frontend/assets/img/clients-temp.png" alt="Clients"
                        class="img-fluid border saturate-animate">
                </div>
                <div class="item">
                    <img src="./frontend/assets/img/clients-temp.png" alt="Clients"
                        class="img-fluid border saturate-animate">
                </div>
                <div class="item">
                    <img src="./frontend/assets/img/clients-temp.png" alt="Clients"
                        class="img-fluid border saturate-animate">
                </div>

            </div>
        </div>
    </section>
    <!-- =======================* Section End *======================= -->


@endsection


<style type="text/css">
    .max-lines{
        display: block;
        text-overflow: ellipsis;
        word-wrap: break-word;
        overflow: hidden;
        max-height: 6.0em;
        line-height: 2.0em;
    }

    .service-card .img-block {
        width: 120px !important;
        height: 120px !important;
    }
    .service-card .img-block img{
        width: 120px !important;
        height: 120px !important;
        padding: 10px !important;
    }

    }
</style>