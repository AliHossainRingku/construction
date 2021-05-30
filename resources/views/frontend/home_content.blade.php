@extends('frontend.home_layout')

@section('content')

        <!-- =======================* Section Start *======================= -->
        <section class="hero1">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php $banners = DB::table('banners')
                     ->where('publication_status',1)
                        ->get();
                    ?>
                    @foreach($banners as $banner)
                    
                    <div class="swiper-slide" style="background-image: url({{$banner->banner_image}});">
                        <div class="swiper-slide-label">
                            <p class="slider-lable-subtitle text-uppercase">{{$banner->banner_subtitle}}</p>
                            <h2 class="slide-label-title text-uppercase">{{$banner->banner_title}}
                            </h2>

                            <a href="contactus.html" class="btn btn-primary">Get Quote</a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <!-- <div class="controls">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div> -->
                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </section>
        <!-- =======================* Section End *======================= -->

        <!-- =======================* Section Start *===================== -->
        <section class="small-footer">
            <div class="container-social"> 
                <p><ul>
                    <li><a class="hide">Follow Us:</a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa fa-whatsapp"></i></a></li>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                </ul></p> 
            </div>
            <div class="container-copyright">
                <div class="left1">
                    <p>Copyright 2021 Amityapartment. All Rights Reserved.</p>
                </div>
                <div class="right1">
                    <p>Developed by Aamiri E-Ccentric Services.</p>
                </div>
            </div>
        </section>
        <!-- =======================* Section End *======================= -->




    

@endsection

<style type="text/css">

    .container-social{
        width: 100%;
        text-align: center;
        float: left;
        height: 70%;
        color: #0d103d !important;
        font-size: 14px;
        margin: 0 auto;
        border: red 0px solid;
        padding-top: 20px;
        padding-left: 500px; padding-right: 500px;
    }

    .container-copyright{
        width: 100%;
        text-align: center;
        float: left;
        height: 30%;
        background: #dedede;
        border: red 0px solid;
        display: flex;
    }
    .container-social ul {
        border: blue 0px solgrayid;
        display: flex;
    }
    .container-social ul li{
        padding: 20px;
        text-align: center;
        color: #b3b3b3;
        border: yellow 0px solid;
        margin: 0 auto;
    }
    .container-social ul li i{
        color: #b3b3b3;
    }
    .container-social ul li i:hover{
        color: #f5b316;
    }

    .left1{
        width: 50%;
        float: left;
        background: #dedede;
        margin: 0;
        border: red 0px solid;
    }

    .right1{
        width: 50%;
        float: right;
        background: #dedede;
        margin: 0;
        border: red 0px solid;

    }

    .left1 p, .right1 p{
        margin: 0 auto;
        padding: 10px;
        font-size: 14px;
        color: gray;
    } 

    .left1 p:hover{
        color: #0d103d;
    } 
    .right1 p:hover{
        color: #0d103d;
    }

    @media (max-width: 1600px){
        .container-social{
            padding-left: 500px; padding-right: 500px;
        }
    }

    @media (max-width: 1200px){
        .container-social{
            padding-left: 350px; padding-right: 350px;
        }
    }
 
    @media (max-width: 900px){
        .container-social{
            padding-left: 250px; padding-right: 250px;
        }
    }

    @media (max-width: 767.98px){
        .container-social{
            padding-left: 150px; padding-right: 150px;
        }
    }

    @media (max-width: 375.98px) {

        .container-copyright{
            width: 100%;
            text-align: center;
            background: #dedede;
            border: red 0px solid;
            padding: 10px;
        }
        .left1 {
            width: 100%;
        } 
        .right1{
            width: 100%;
        }
        .left1 p, .right1 p{
            font-size: 10px;
            padding: 0px;
        }

        /** SOCIAL NETWORKING LINKS in MOBILE*/
        .container-social{
            width: 100%;
            text-align: center;
            float: left;
            height: 70%;
            color: #0d103d !important;
            font-size: 14px;
            margin: 0 auto;
            border: red 0px solid;
            padding-top: 20px;
            padding-left: 20px; padding-right: 20px;
        }

        .container-copyright{
            width: 100%;
            text-align: center;
            float: left;
            height: 30%;
            background: #dedede;
            border: red 0px solid;
            display: flex;
        }
        .container-social ul {
            border: blue 0px solid;
            display: flex;
        }
        .container-social ul li{
            padding: 20px;
            text-align: center;
            color: #b3b3b3;
            border: yellow 0px solid;
            margin: 0 auto;
        }
        .container-social ul li i{
            color: #b3b3b3;
        }
        .container-social ul li i:hover{
            color: #f5b316;
        }


    }


</style>