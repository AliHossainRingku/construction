<!-- =======================* Section Start *======================= -->
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a href="" class="navbar-brand"><img src="{{ asset('frontend')}}/assets/img/logo.png" alt="Amity" class="img-nav-logo"></a>
            <button type="button" name="button" class="navbar-toggler collapsed" data-toggle="collapse"
                data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="hamburger hamburger--collapse">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{URL::to('/')}}" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="{{URL::to('/about')}}" class="nav-link"><span>About Us</span></a></li>
                    <li class="nav-item"><a href="{{URL::to('/projects')}}" class="nav-link"><span>Projects</span></a>
                    </li>
                    <li class="nav-item"><a href="{{URL::to('/services')}}" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="{{URL::to('/news')}}" class="nav-link"><span>News</span></a>
                    </li>
                    <li class="nav-item"><a href="{{URL::to('/contacts')}}" class="nav-link"><span>Contact Us</span></a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a href="" class="navbar-brand"><img src="{{ asset('frontend')}}/assets/img/map.png" alt="Amity" style="height: 40px; width: 40px; border: red 0px solid"></a>
                        
                    </li>
                </ul> <!-- navbar End -->
            </div>
        </nav> <!-- main-nav End -->
    </div> <!-- wrapper End -->
</header> <!-- header End -->
<!-- =======================* Section End *======================= -->

<style type="text/css">
 .img-nav-logo{
    height: 15vh;
    width: 130px !important;
    padding-top: 0vh;
    padding-top: 0vh;
    margin: 0;
    padding: 0;
 }

 
</style>