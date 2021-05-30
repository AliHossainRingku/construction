@extends('frontend.home_layout')

@section('content')
    <!-- =======================* Section Start *======================= -->
    <section class="pagehead bg-1">
        <div class="container">
            <nav aria-label="breadcrumb" class="pagehead-breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =======================* Section End *======================= -->
    <!-- =======================* Section Start *===================== -->
    <section class="services section-padding">
        <div class="container">
            <h1 class="section-title">Our Services</h1>
            <div class="row">
                <?php 
                    $services = DB::table('services')
                                ->select('services.*')
                                ->where('services.publication_status','=','1')
                                ->get();
                ?>
                @foreach($services as $service)
                <div class="col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-card">
                        <div class="img-block with-animation">
                            <img src="{{$service->service_image}}" alt="Architecture">
                        </div>
                        <h4 class="service-title">{{$service->service_name}}</h4>
                        <p class="max-lines">{{$service->service_description}}</p>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section> <!-- services End -->
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